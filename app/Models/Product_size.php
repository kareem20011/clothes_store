<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_size extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'color',
    ];

    public function category(){
        return $this->belongsTo(Product::class);
    }
    public function productColorSize(){
        return $this->hasMany(Product_color_size::class);
    }
}
