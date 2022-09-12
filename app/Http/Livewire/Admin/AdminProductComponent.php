<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class AdminProductComponent extends Component
{
    use WithPagination;
    public $searchTerm;

    public function delProduct($id){
        $product = Product::find($id);
        if ($product->image) {
            unlink('assets/images/products/' . $product->image);
        }
        if ($product->images) {
            $images = explode(',' , $product->images);
            foreach ($images as $img) {
                if ($img) {
                    unlink('assets/images/products/' . $img);
                }
            }
        }
        $product->delete();
        session()->flash('message','Product removed !');
    }
    
    public function render()
    {
        $search = '%'.$this->searchTerm.'%';
        $products = Product::where('name','LIKE', $search)
        ->orWhere('stock_status','LIKE',$search)
        ->orWhere('regular_price','LIKE',$search)
        ->orWhere('sale_price','LIKE',$search)
        ->orWhere('id','DESC')
        ->paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.base');
    }
}
