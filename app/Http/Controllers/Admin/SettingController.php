<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Blog;

class SettingController extends Controller
{
    public function sliders()
    {
        $sliders = Slider::latest()->get();
        return view('admin.settings.slider-index', compact('sliders'));
    }

    public function storeSlider(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $filename = time() . '_' . $request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('sliders'), $filename);

        Slider::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'image' => 'sliders/' . $filename,
            'status' => 1,
        ]);

        return redirect()->route('admin.settings.sliders')->with('success', 'Slider added successfully.');
    }

    public function updateSlider(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->only(['title', 'subtitle', 'button_text', 'button_link']);

        if ($request->hasFile('image')) {
            if ($slider->image && file_exists(public_path($slider->image))) {
                unlink(public_path($slider->image));
            }

            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('sliders'), $filename);
            $data['image'] = 'sliders/' . $filename;
        }

        $slider->update($data);

        return redirect()->route('admin.settings.sliders')->with('success', 'Slider updated successfully.');
    }

    public function deleteSlider($id)
    {
        $slider = Slider::findOrFail($id);

        if ($slider->image && file_exists(public_path($slider->image))) {
            unlink(public_path($slider->image));
        }

        $slider->delete();

        return redirect()->route('admin.settings.sliders')->with('success', 'Slider deleted successfully.');
    }

    public function blogs()
    {
        $blogs = Blog::latest()->get();
        return view('admin.settings.blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image',
            'category' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('blogs'), $filename);
            $data['image'] = 'blogs/' . $filename;
        }

        Blog::create($data);
        return redirect()->route('admin.settings.blog-index')->with('success', 'Blog created successfully.');
    }

    public function edit(Blog $blog)
    {
        return view('admin.blogs.edit', compact('blog'));
    }

    public function updateBlog(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->only(['title', 'content', 'category']);

        if ($request->hasFile('image')) {
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            $filename = time() . '_' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path('blogs'), $filename);
            $data['image'] = 'blogs/' . $filename;
        }

        $blog->update($data);

        return redirect()->route('admin.settings.blog-index')->with('success', 'Blog updated successfully.');
    }

    public function deleteBlog($id)
    {
        $blog = Blog::findOrFail($id);

        if ($blog->image && file_exists(public_path($blog->image))) {
            unlink(public_path($blog->image));
        }

        $blog->delete();

        return redirect()->route('admin.settings.blog-index')->with('success', 'Blog deleted successfully.');
    }
}
