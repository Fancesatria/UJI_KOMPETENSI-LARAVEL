<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\AttributeValue;
use Illuminate\Support\Carbon;
use App\Models\ProductAttribute;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_desc;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $images;

    public $scategory_id;

    //for product attribute
    public $attribute;
    public $inputs = []; //pakai array krn inputan bisa lebih dr 1
    public $attribute_array = [];
    public $attribute_values;

    public function mount(){
        $this->stock_status = 'instock';
        $this->featured = 0;

    }

    //dding attributes to product
    public function addAttribute(){
        if (!in_array($this->attribute, $this->attribute_array)) { 
            //kalau attribute dan arraynya kosong//doesnt exsist, maka
            array_push($this->inputs, $this->attribute);
            array_push($this->attribute_array, $this->attribute);
        }
    }

    //delete attribute
    public function delAttribute($attribute){
        unset($this->inputs[$attribute]);
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name, '-');
    }

    public function updated($fields){
        $this->validateOnly($fields, [
            'name'=>'required',
            'slug'=>'required | unique:products',
            'short_desc'=>'required',
            'description'=>'required',
            'regular_price'=>'required | numeric',
            'sale_price'=>'numeric|nullable',
            'SKU'=>'required | unique:products',
            'stock_status'=>'required',
            'image'=>'required | mimes:jpeg, png',
            'category_id'=>'required ',
            'quantity'=>'required | numeric',
        ]);
    }

    public function addProduct(){
        $this->validate([
            'name'=>'required',
            'slug'=>'required | unique:products',
            'short_desc'=>'required',
            'description'=>'required',
            'regular_price'=>'required | numeric',
            'sale_price'=>'numeric|nullable',
            'SKU'=>'required | unique:products',
            'stock_status'=>'required',
            'image'=>'required | mimes:jpeg, png',
            'category_id'=>'required',
            'quantity'=>'required | numeric'
        ]);
        $product = new Product();
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_desc;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;

        //add image
        $imageName = Carbon::now()->timestamp. '-' .$this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;

        //product gallery
        if ($this->images) {
            $imagesName = '';
            foreach ($this->images as $key => $image) {
                $imgName = Carbon::now()->timestamp. $key .'-' .$this->image->extension();
                $image->storeAs('products',$imgName);
                $imagesName = $imagesName.','.$imgName;
            }
            $product->images = $imagesName;
        }

        $product->category_id = $this->category_id;
        if ($this->scategory_id) {
            $product->subcategory_id = $this->scategory_id;
        }
        $product->save();

        //saving attributes to product
        if(isset($this->attribute_values)){
            foreach ($this->attribute_values as $key=>$attribute_value) {
                $attr_value = explode(',', $attribute_value);
                foreach ($attr_value as $avalue) {
                    $attr_value = new AttributeValue();
                    $attr_value->product_attribute_id = $key;
                    $attr_value->value = $avalue;
                    $attr_value->product_id = $product->id;
                    $attr_value->save();
                }
            }
        }

        session()->flash('message', 'Product has been added !');
    }

    public function changeSubcategory(){
        $this->scategory_id = 0;
    }

    public function render()
    {
        $categories = Category::all();
        $scategories = Subcategory::where('category_id', $this->category_id)->get(); 

        //product attribute
        $attributes = ProductAttribute::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories, 'scategories'=>$scategories, 'attributes'=>$attributes])->layout('layouts.base');
    }
}
