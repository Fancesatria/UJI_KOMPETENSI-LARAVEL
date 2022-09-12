<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class HeaderSearchComponent extends Component
{
    public $search;
    public $prodcat;
    public $prodCatId;

    public function mount(){
        $this->prodCat = 'All Category';
        $this->fill(request()->only('search','prodCat','prodCatId'));
    }

    public function render()
    {
        //mengakses semua kategori
        $categories = Category::all();
        return view('livewire.header-search-component',['categories'=>$categories])->layout('layouts.base');
    }
}
