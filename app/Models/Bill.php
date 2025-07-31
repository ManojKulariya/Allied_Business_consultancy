<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'customer_id',
        'customer_email',
        'total_price',
    ];

    // A Bill has many BillItems
    public function billItems()
    {
        return $this->hasMany(BillItem::class);
    }
// Bill.php (Model)
public function customer()
{
    return $this->belongsTo(Customer::class, 'customer_id');
}


}
