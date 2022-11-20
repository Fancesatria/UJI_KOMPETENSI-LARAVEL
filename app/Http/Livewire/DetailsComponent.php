<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Product;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class DetailsComponent extends Component
{
    public $slug;
    public $qty;
    //for attribute
    public $s_attribute = [];

    public function mount($slug)
    {
        $this->slug = $slug;
        $this->qty = 1;
    }

    public function store($product_id, $product_name, $product_price)
    {
        Cart::instance('cart')->add($product_id, $product_name, $this->qty, $product_price, $this->s_attribute)->associate('App\Models\Product');
        session()->flash('success_message', 'Item added in Cart');
        return redirect()->route('product.cart');
    }

    public function increaseQty()
    {
        $this->qty++;
    }

    public function decreaseQty()
    {
        if ($this->qty > 1) {
            $this->qty--;
        }
    }

    
    public function render()
    {
        $product = Product::where('slug', $this->slug)->first();
        $popular_products = Product::inRandomOrder()->limit(5)->get();
        $related_products = Product::where('category_id', $product->category_id)->inRandomOrder()->limit(5)->get();
        //sale date / timer
        $saleDate = Sale::find(1);
        $dateValidation = $saleDate->status == 1 && $saleDate->sale_date > Carbon::now();
        return view('livewire.details-component', ['product'=>$product, 'popular_products'=>$popular_products, 'related_products'=>$related_products, 'saleDate'=>$saleDate, 'dateValidation'=>$dateValidation])->layout('layouts.base');
    }
}
