<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;

class SearchComponent extends Component
{
    public $sorting;
    public $pagesize;

    public $search;
    public $prodCat;
    public $prodCatId;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;
        $this->fill(request()->only('search','prodCat','prodCatId'));
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }

    use WithPagination;
    public function render()
    {
        if($this->sorting == 'date') {
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->prodCatId  .'%')->orderBy('created_at','DESC')->paginate($this->pagesize);

        } else if($this->sorting == 'price') {
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->prodCatId .'%')->orderBy('regular_price','ASC')->paginate($this->pagesize);

        } else if ($this->sorting == 'price-desc') {
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->prodCatId .'%')->orderBy('regular_price','DESC')->paginate($this->pagesize);

        } else {
            $products = Product::where('name','like','%'.$this->search .'%')->where('category_id','like','%'.$this->prodCatId .'%')->paginate($this->pagesize);

        }

        $categories = Category::all();
        
        return view('livewire.search-component', ['products'=>$products, 'categories'=>$categories])->layout('layouts.base');
    }
}
