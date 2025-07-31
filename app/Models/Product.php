<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'title', 'slug', 'description', 'price', 'old_price', 'quantity', 'status', 'countdown_end'
    ];

    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class);
    }
}
