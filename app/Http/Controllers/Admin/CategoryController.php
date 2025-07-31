<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Helpers\CustomHelper;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = CustomHelper::___getCategorys();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.form');
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255|unique:categories',
        //     'description' => 'nullable|string',
        //     'is_active' => 'nullable|boolean',
        // ]);

        Category::create([
            'name' => $request->name,
            'slug' => ($request->slug),
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Category created successfully.');
    }
    public function edit(Category $category)
    {
        return view('admin.categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        // $request->validate([
        //     'name' => 'required|string|max:255|unique:categories,name,' . $category->id,
        //     'description' => 'nullable|string',
        //     'is_active' => 'nullable|boolean',
        // ]);

        $category->update([
            'name' => $request->name,
            'slug' => ($request->slug),
            'description' => $request->description,
        ]);

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Category updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin.categories.index')
                         ->with('success', 'Category deleted successfully.');
    }
}
