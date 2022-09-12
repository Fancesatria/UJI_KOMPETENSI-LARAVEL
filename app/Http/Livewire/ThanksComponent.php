<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ThanksComponent extends Component
{
    public function render()
    {
        return view('livewire.thanks-component')->layout('layouts.base');
    }
}
