<?php

namespace App\Helpers;
use Illuminate\Http\Request;
use App\Models\Category;

class CustomHelper
{
    public static function ___getCategorys()
    {
       return Category::latest()->paginate(10);
    }

}
