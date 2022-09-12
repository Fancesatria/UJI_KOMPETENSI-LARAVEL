<?php

namespace App\Models;


use App\Models\ProductAttribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AttributeValue extends Model
{
    use HasFactory;

    public function productAttribute(){
        return $this->belongsTo(ProductAttribute::class, 'product_attribute_id');
    }
}
