<?php

namespace App\Http\Livewire\User;

use App\Models\Order;
use App\Models\Setting;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserInvoiceComponent extends Component
{
    public function render()
    {
        // $order = Order::all();
        $sender = Setting::all();
        $order = Order::where('user_id', Auth::user()->id)->first();
        return view('livewire.user.user-invoice-component', ['order'=>$order, 'sender'=>$sender])->layout('layouts.base');
    }
}
