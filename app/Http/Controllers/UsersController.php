<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Blog;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class UsersController extends Controller
{
public function myprofile()
{
    $user = Auth::user(); 
    return view('user.user-profile', compact('user'));
}
public function editAccount()
{
    $user = auth()->user(); // Get the currently logged-in user
    return view('user.account-details', compact('user'));
}
public function updateAccount(Request $request)
{
    $user = auth()->user();

    $request->validate([
        'name' => 'required|string|max:255',
        'last_name' => 'nullable|string|max:255',
        'email' => 'required|email|unique:users,email,' . $user->id,
        'password' => 'nullable|string|min:8|confirmed',
        'profile_image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
    ]);

    $user->name = $request->name;
    $user->last_name = $request->last_name;
    $user->email = $request->email;

    // Handle password change
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    // Handle profile image
    if ($request->hasFile('profile_image')) {
        // Delete old image if exists
        if ($user->profile_image && Storage::disk('public')->exists('profile_images/' . $user->profile_image)) {
            Storage::disk('public')->delete('profile_images/' . $user->profile_image);
        }

        $filename = uniqid() . '.' . $request->file('profile_image')->getClientOriginalExtension();
        $request->file('profile_image')->storeAs('profile_images', $filename, 'public');
        $user->profile_image = $filename;
    }

    $user->save();

    return back()->with('status', 'Account updated successfully!');
}

    public function Blogindex()
    {
        $blogs = Blog::latest()->get();
        return view('user.blog', compact('blogs'));
    }
   public function index()
   {
      $sliders = Slider::where('status', 1)->latest()->get(); // only active
    return view('user.index',compact('sliders'));
   }
      public function aboutus()
   {
    return view('user.about-us');
   }
         public function contactus()
   {
    return view('user.contact-us');
   }
            public function shop()
   {
    return view('user.shop');
   }
             public function cart()
   {
    return view('user.cart');
   }
                public function checkout()
   {
    return view('user.checkout');
   }
}
