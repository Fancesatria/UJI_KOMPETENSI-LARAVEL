<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ProductAttribute;

class AdminAddAttributeComponent extends Component
{
    public $name;

    public function updated($fields){
        $this->validateOnly($fields, [
            'name'=>'required'
        ]);
    }

    public function storeAttribute(){
        $this->validate([
            'name'=>'required'
        ]);

        $attribute = new ProductAttribute();
        $attribute->name = $this->name;
        $attribute->save();
        session()->flash('message', 'Attribute has been added!');
    }

    public function render()
    {
        return view('livewire.admin.admin-add-attribute-component')->layout('layouts.base');
    }
}
