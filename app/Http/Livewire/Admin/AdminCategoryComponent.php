<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Livewire\WithPagination;

class AdminCategoryComponent extends Component
{
    use WithPagination;

    public function delCategory($id){
        $Category = Category::find($id);
        $Category->delete();
        session()->flash('message','Category Removed !');
    }

    public function delSubcategory($id){
        $scategory = Subcategory::find($id);
        $scategory->delete();
        session()->flash('message','Subcategory Removed !');
    }

    public function render()
    {
        $categories = Category::paginate(5);
        return view('livewire.admin.admin-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
