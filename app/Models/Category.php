<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'parent_id', 'slug', 'status', 'is_on_home_page', 'image', 'icon', 'HSN_code'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id')->with('parent');
    }

    public function child()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id')->with('child')->with('parent');
    }
}
