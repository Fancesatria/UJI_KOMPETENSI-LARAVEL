<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;

class AdminEditCategoryComponent extends Component
{
    public $category_slug;
    public $category_id;

    public $name;
    public $slug;

    //subcategory
    public $scategory_id;
    public $scategory_slug;

    public function mount($category_slug, $scategory_slug=null) //null krn prameter subcategoy slug itu optional
    {
        if ($scategory_slug) {
            $this->scategory_slug = $scategory_slug;
            $scategory = Subcategory::where('slug', $scategory_slug)->first();
            $this->scategory_id = $scategory->id;
            $this->category_id = $scategory->category_id;
            $this->name = $scategory->name;
            $this->slug = $scategory->slug;

        } else {
            $category = Category::where('slug',$category_slug)->first();
            $this->category_slug = $category_slug;
            $this->category_id = $category->id;
            $this->name = $category->name;
            $this->slug = $category->slug;
        }
        
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'name'=>'required|alpha',
            'slug'=>'required | unique:categories'
        ]);
    }

    public function editCategory()
    {
        $this->validate([
            'name'=>'required|alpha',
            'slug'=>'required | unique:categories'
        ]);

        if ($this->scategory_id) {
            $scategory = Subcategory::find($this->scategory_id);
            $scategory->name = $this->name;
            $scategory->slug = $this->slug;
            $scategory->category_id = $this->category_id;
            $scategory->save();

        } else {
            $category = Category::find($this->category_id);
            $category->name = $this->name;
            $category->slug = $this->slug;
            $category->save();
        }
        
        session()->flash('message','Category has been changed !');
    }
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-edit-category-component',['categories'=>$categories])->layout('layouts.base');
    }
}
