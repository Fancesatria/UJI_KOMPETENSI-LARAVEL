<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Sale;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\HomeSlider;
use App\Models\HomeCategory;
use Illuminate\Support\Facades\Auth;
use Cart;

class HomeComponent extends Component
{
    
    public function render()
    {
        $sliders = HomeSlider::where('status',1)->get();
        $lproducts = Product::OrderBy('created_at','DESC')->get()->take(8);
        //home categories
        $category = HomeCategory::find(1);
        $cats = explode(',',$category->sel_category);
        $categories = Category::whereIn('id',$cats)->get();
        $productNumber = $category->product_number;
        //on sale section
        $saleProduct = Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        //timer/sale date
        $saleDate = Sale::find(1);
        $dateValidation = $saleDate->status == 1 && $saleDate->sale_date > Carbon::now();
        //restore cart from database
        if (Auth::check()) {
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);
            Cart::instance('saveForLater')->restore(Auth::user()->email);
        }
        return view('livewire.home-component',['sliders'=>$sliders, 'lproducts'=>$lproducts,'categories'=>$categories, 'productNumber'=>$productNumber, 'saleProduct'=>$saleProduct, 'saleDate'=>$saleDate, 'dateValidation'=>$dateValidation])->layout('layouts.base');
    }
}
