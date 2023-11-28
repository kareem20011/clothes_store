<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'discount_price',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function productColorSize(){
        return $this->hasMany(Product_color_size::class,'product_id');
    }
    public function productColor(){
        return $this->hasMany(Product_color_size::class,'product_id');
    }
    public function productSize(){
        return $this->hasMany(Product_color_size::class,'product_id');
    }
}
