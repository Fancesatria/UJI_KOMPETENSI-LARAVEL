<?php

namespace App\Models;

use App\Models\AttributeValue;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductAttribute extends Model
{
    use HasFactory;

    public function attributeValues(){
        return $this->hasMany(AttributeValue::class);
    }
}
