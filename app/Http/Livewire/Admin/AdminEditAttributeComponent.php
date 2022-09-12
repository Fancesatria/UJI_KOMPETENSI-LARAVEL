<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\ProductAttribute;

class AdminEditAttributeComponent extends Component
{
    public $name;
    public $attribute_id;

    public function mount($attribute_id){
        $attribute = ProductAttribute::where('id', $attribute_id)->first();
        $this->attribute_id = $attribute->id;
        $this->name = $attribute->name;

    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'name'=>'required'
        ]);
    }

    public function updateAttribute(){
        $this->validate([
            'name'=>'required'
        ]);

        $editAttribute = ProductAttribute::find($this->attribute_id);
        $editAttribute->name = $this->name;
        $editAttribute->save();
        session()->flash('message','Item has been updated!');


    }
    public function render()
    {
        return view('livewire.admin.admin-edit-attribute-component')->layout('layouts.base');
    }
}
