<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function product_images()
    {
        return $this->hasMany(ProductImage::class);
    }
}
