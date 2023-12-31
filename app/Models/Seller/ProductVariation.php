<?php

namespace App\Models\Seller;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productVariation extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'product_id',
        'product_price',
        'product_color',
        'stock',
        'product_image',
    ];

    public function product(){
        return $this->belongsTo(Product::class,'product_id');
    }
}
