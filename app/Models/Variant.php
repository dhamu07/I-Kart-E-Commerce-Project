<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = ['product_id', 'sku', 'title', 'price', 'quantity', 'color', 'size', 'weight'];

    public function product()
    {
        return $this->belongsTo(Product::class)->withTrashed();
    }

    public function variantImage()
    {
        return $this->hasMany(ProductVariantImage::class);
    }
}
