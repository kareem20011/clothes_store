<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_color_size extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_size_id',
        'product_color_id',
        'quantity',
        'price_two',
        'discount',
        'status',
    ];

    public function productColor(){
        return $this->belongsTo(Product_color::class);
    }
    public function productSize(){
        return $this->belongsTo(Product_size::class);
    }
}
