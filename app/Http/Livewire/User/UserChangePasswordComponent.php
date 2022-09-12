<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserChangePasswordComponent extends Component
{
    public $current_password;
    public $password;
    public $password_confirmation;

    public function updated($fields){
        $this->validateOnly($fields, [
            'current_password'=>'required',
            'password'=>'required|min:8|confirmed|different:current_password',
            'password'=>'required|same:password'
        ]);
    }

    public function changePassword(){
        $this->validate([
            'current_password'=>'required',
            'password'=>'required|min:8|confirmed|different:current_password',
            'password'=>'required|same:password'
        ]);

        if (Hash::check($this->current_password, Auth::user()->password)) {
            $user = User::findOrFail(Auth::user()->id);
            $user->password = Hash::make($this->password);
            $user->save();
            session()->flash('pw_success','Password has been changed!');

        } else {
            session()->flash('pw_error',"Password doesn't match!");
        }
    }

    public function render()
    {
        return view('livewire.user.user-change-password-component')->layout('layouts.base');
    }
}
