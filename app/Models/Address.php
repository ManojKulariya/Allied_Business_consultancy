<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Address.php
class Address extends Model
{
 protected $fillable = [
        'address_line1',
        'address_line2',
        'area',
        'city',
        'postal_code',
        'state',
        'country',
    ];
}

