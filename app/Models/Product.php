<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = ['categories_id', 'seller_id', 'sku', 'MRP', 'selling_price', 'HSN_code', 'GST', 'dispatch_in_day', 'quantity', 'local_delivery_charge', 'zonal_delivery_charge', 'national_delivery_charge', 'weight', 'length', 'width','height','title','manufacturer','barnd_name','description','keyword','key_features','meta_tags','return_order','return_order_in_date','sale_price','sale_start_data','sale_end_data','country_of_origin','status'];

    public function category()
    {
        return $this->belongsTo(Category::class)->withTrashed();
    }

    public function variants()
    {
        return $this->hasMany(Variant::class);
    }

    public function productImage()
    {
        return $this->hasMany(ProductVariantImage::class);
    }

}
