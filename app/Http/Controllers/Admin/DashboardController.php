<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Blog;


class DashboardController extends Controller
{
    public function index()
    {
                    $totalSliders = Slider::count();
            $totalBlogs = Blog::count();
            // dd($totalSliders);
         return view('admin.dashboard', compact('totalBlogs', 'totalSliders'));
    }
}
