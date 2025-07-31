<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
      protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'category_id',
        'product_img',
    ];
    public function category()
{
    return $this->belongsTo(Category::class);
}
}
