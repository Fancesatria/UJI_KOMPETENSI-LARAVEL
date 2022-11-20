<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use App\Models\Product;
use Livewire\Component;
use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\AttributeValue;
use App\Models\ProductAttribute;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $product_slug;
    public $product_id;
    public $newimage;

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

    //poduct gallery
    public $images;
    public $newImages;

    //subcategory
    public $scategory_id;

    //for product attribute
    public $attribute;
    public $inputs = []; //pakai array krn inputan bisa lebih dr 1
    public $attribute_array = [];
    public $attribute_values = [];

    public $attribute_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        $this->name = $product->name; 
        $this->slug = $product->slug; 
        $this->short_desc = $product->short_description; 
        $this->description = $product->description; 
        $this->regular_price = $product->regular_price; 
        $this->sale_price = $product->sale_price; 
        $this->SKU = $product->SKU; 
        $this->stock_status = $product->stock_status; 
        $this->featured = $product->featured; 
        $this->quantity = $product->quantity; 
        $this->image = $product->image; 
        $this->images = explode(',' , $product->images); 
        $this->category_id = $product->category_id; 
        $this->product_id = $product->id; 
        $this->scategory_id = $product->subcategory_id; 
        $this->inputs = $product->attributeValue->where('product_id', $product->id)->unique('product_attribute_id')->pluck('product_attribute_id'); 
        $this->attribute_array = $product->attributeValue->where('product_id', $product->id)->unique('product_attribute_id')->pluck('product_attribute_id'); 

        foreach ($this->attribute_array as $a_arr) {
            $allAttributeValue = AttributeValue::where('product_id', $product->id)->where('product_attribute_id', $a_arr)->get()->pluck('value');
            $valueString = '';
            foreach ($allAttributeValue as $value) {
                $valueString = $valueString. $value. ',';
            }
            $this->attribute_values[$a_arr] = rtrim($valueString, ',');
        }
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name'=>'required',
            'slug'=>'required',
            'short_desc'=>'required',
            'description'=>'required',
            'regular_price'=>'required | numeric',
            'sale_price'=>'numeric|nullable',
            'SKU'=>'required',
            'stock_status'=>'required',
            'category_id'=>'required',
            'quantity'=>'required | numeric'
        ]);

        // if ($this->newimage) {
        //     $this->validateOnly($fields, [
        //         'image'=>'required | mimes:jpg, jpeg, png', 
        //     ]);
        // }
    }

    //add attribute editProduct
    public function addAttribute(){
        if (!$this->attribute_array->contains($this->attribute)) {
            $this->inputs->push($this->attribute);
            $this->attribute_array->push($this->attribute);
        }
    }
    //delete product attribute
    public function delAttribute($attribute){
        unset($this->inputs[$attribute]);
    }

    public function editProduct()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'short_desc'=>'required',
            'description'=>'required',
            'regular_price'=>'required | numeric',
            'sale_price'=>'numeric|nullable',
            'SKU'=>'required',
            'stock_status'=>'required',
            'category_id'=>'required ',
            'quantity'=>'required | numeric'
        ]);
        // if ($this->newimage) {
        //     $this->validate([
        //         'image'=>'required | mimes:jpg, jpeg, png', 
        //     ]);
        // }
        $product = Product::find($this->product_id);
        $product->name = $this->name ;
        $product->slug = $this->slug ;
        $product->short_description = $this->short_desc ;
        $product->description = $this->description ;
        $product->regular_price = $this->regular_price ;
        $product->sale_price = $this->sale_price ;
        $product->SKU = $this->SKU ;
        $product->stock_status = $this->stock_status ;
        $product->featured = $this->featured ;
        $product->quantity = $this->quantity ;
        if ($this->newimage) {
            unlink('assets/images/products/' . $product->image);
            //add image
            $imageName = Carbon::now()->timestamp. '-' .$this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }

        //product gallery
        if ($this->newImages) {
            if ($product->images) {
                $images = explode(',', $product->images);
                foreach ($images as $item) {
                    if ($item) {
                        unlink('assets/images/products/' . $item);
                    }
                }
            }

            $imagesName = '';
            foreach ($this->newImages as $key => $image) {
                $imgName = Carbon::now()->timestamp . $key . '-' . $image->extension();
                $image->storeAs('products', $imgName);
                $imagesName = $imagesName . ',' . $imgName;
            }
            $product->images = $imagesName;
        }
        
        $product->category_id = $this->category_id ;
        if ($this->scategory_id) {
            $product->subcategory_id = $this->scategory_id ;
        }
        $product->save();

        //for product attribute
        if(isset($this->attribute_values)){
            AttributeValue::where('product_id', $product->id)->delete();
            foreach ($this->attribute_values as $key => $attribute_value) {
            $a_values = explode(',', $attribute_value);

            foreach ($a_values as $avalue) {
                $attr_value = new AttributeValue();
                $attr_value->product_attribute_id = $key;
                $attr_value->value = $avalue;
                $attr_value->product_id = $product->id;
                $attr_value->save();
            }
        }
        }
        session()->flash('message', 'Product has been changed !');
    }
    
    public function generateslug(){
        $this->slug = Str::slug($this->name);
    }

    public function changeSubcategory(){
        $this->scategory_id = 0;
    }

    public function render()
    {
        $categories = Category::all();
        $scategories = Subcategory::where('category_id',$this->category_id)->get();
        $attributes = ProductAttribute::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories, 'scategories'=>$scategories, 'attributes'=>$attributes])->layout('layouts.base');
    }
}
