<?php

// app/Http/Controllers/SocialLinkController.php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function create()
    {
        $link = SocialLink::first();
        return view('admin.settings.social_media', compact('link'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'twitter' => 'nullable|url',
            'email' => 'nullable|email',
            'contact_no' => 'nullable|string|max:20',
        ]);

        SocialLink::updateOrCreate(
            ['id' => 1], // You can make it single row always
            $request->only('facebook', 'instagram', 'twitter', 'email', 'contact_no')
        );

        return redirect()->back()->with('success', 'Social media links updated successfully.');
    }
}
