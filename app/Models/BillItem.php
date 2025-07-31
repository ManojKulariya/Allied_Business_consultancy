<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'bill_id',
        'product_id',
        'quantity',
        'price_per_unit',
        'subtotal',
    ];

    // Belongs to Bill
    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }

    // Belongs to Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
