<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Blog;





class AdminController extends Controller
{
        public function dashboard()
    {
            $totalSliders = Slider::count();
            $totalBlogs = Blog::count();
            dd($totalSliders);
         return view('admin.dashboard', compact('totalBlogs', 'totalSliders'));
    }
}
