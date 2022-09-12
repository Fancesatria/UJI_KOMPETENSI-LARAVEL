<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\HomeCategory;

class AdminHomeCategoryComponent extends Component
{
    public $selectedCategories = [];
    public $productNumber;

    public function mount(){
        $category = HomeCategory::find(1);
        $this->selectedCategories = explode(',',$category->sel_category);
        $this->productNumber = $category->product_number;
    }

    //updating record 
    public function updateHomeCat(){
        $category = HomeCategory::find(1);
        $category->sel_category = implode(',',$this->selectedCategories);
        $category->product_number = $this->productNumber;
        $category->save();
        session()->flash('message','Home Category has been changed !');
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-home-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
