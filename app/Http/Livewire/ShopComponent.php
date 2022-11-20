<?php

namespace App\Http\Livewire;

use Cart;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class ShopComponent extends Component
{
    public $sorting;
    public $pagesize;
    
    //sort by price
    public $minPrice;
    public $maxPrice;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 12;

        $this->minPrice = 1;
        $this->maxPrice = 1000;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, 1, $product_price)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function addToWishlist($product_id, $product_name, $product_price){
        Cart::instance('wishlist')->add($product_id, $product_name,1, $product_price)->associate('App\Models\Product');
        $this->emitTo('wishlist-count-component','refreshComponent');
        // return redirect()->route('product.shop');
    }

    public function removeWishlist($product_id){
        foreach(Cart::instance('wishlist')->content() as $witem){
            if ($witem->id == $product_id) {
                Cart::instance('wishlist')->remove($witem->rowId);
                $this->emitTo('wishlist-count-component','refreshComponent');
                return;
            }
        }
    }

    use WithPagination;
    public function render()
    {
        if($this->sorting == 'date') {
            $products = Product::whereBetween('regular_price', [$this->minPrice, $this->maxPrice])->orderBy('created_at','DESC')->paginate($this->pagesize);

        } else if($this->sorting == 'price') {
            $products = Product::whereBetween('regular_price', [$this->minPrice, $this->maxPrice])->orderBy('regular_price','ASC')->paginate($this->pagesize);

        } else if ($this->sorting == 'price-desc') {
            $products = Product::whereBetween('regular_price', [$this->minPrice, $this->maxPrice])->orderBy('regular_price','DESC')->paginate($this->pagesize);

        } else {
            $products = Product::whereBetween('regular_price', [$this->minPrice, $this->maxPrice])->paginate($this->pagesize);

        }

        $categories = Category::all();

        if (Auth::check()) {
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);
        }
        $popular_products = Product::inRandomOrder()->limit(4)->get();
        return view('livewire.shop-component', ['products'=>$products, 'categories'=>$categories, 'popular_products'=>$popular_products])->layout('layouts.base');
    }
}
