<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVariant;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;



class ProductController extends Controller
{
//    public function index()
//     {
//         $products = Product::latest()->paginate(10);
//         $categories = Category::where('is_active', true)->get();
//         return view('admin.products.index', compact('products','categories'));
//     }

//     public function create()
//     {
//         return view('admin.products.form');
//     }

//     public function store(Request $request)
// {
//     $data = $request->only(['name', 'slug', 'price', 'stock', 'category_id', 'description']);

//     // Handle image upload (optional)
//     if ($request->hasFile('product_img')) {
//         $filePath = $request->file('product_img')->store('product_images', 'public');
//         $data['product_img'] = $filePath;
//     }

//     Product::create($data);

//     return redirect()->route('admin.products.index')
//                      ->with('success', 'Product created successfully.');
// }

//     public function edit(Product $product)
//     {
//         return view('admin.products.edit', compact('product'));
//     }

//     public function update(Request $request, Product $product)
// {
//     $data = $request->only(['name', 'slug', 'price', 'stock', 'category_id', 'description']);

//     // Handle image upload (optional)
//     if ($request->hasFile('product_img')) {
//         $filePath = $request->file('product_img')->store('product_images', 'public');
//         $data['product_img'] = $filePath;
//     }

//     $product->update($data);

//     return redirect()->route('admin.products.index')
//                      ->with('success', 'Product updated successfully.');
// }


//     public function destroy(Product $product)
//     {
//         $product->delete();

//         return redirect()->route('admin.products.index')
//                          ->with('success', 'product deleted successfully.');
//     }


public function index()
{
    $products = Product::with('images', 'variants')->latest()->paginate(10);
    $categories = Category::where('is_active', true)->get();
    return view('admin.products.index', compact('products', 'categories'));
}

public function create()
{
    $categories = Category::where('is_active', true)->get();
    return view('admin.products.form', compact('categories'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'old_price' => 'nullable|numeric',
        'quantity' => 'required|integer',
        'category_id' => 'nullable|exists:categories,id',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    ]);

    $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);
    $validated['is_active'] = 1;

    $product = Product::create($validated);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('products', 'public');
            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'storage/' . $path
            ]);
        }
    }

    if ($request->variants) {
        foreach ($request->variants as $variant) {
            ProductVariant::create([
                'product_id' => $product->id,
                'variant_name' => $variant['name'] ?? '',
                'price' => $variant['price'] ?? 0,
                'stock' => $variant['stock'] ?? 0
            ]);
        }
    }

    return redirect()->route('admin.products.index')->with('success', 'Product added successfully.');
}

public function edit($id)
{
    $product = Product::with('images', 'variants')->findOrFail($id);
    $categories = Category::where('is_active', true)->get();
    return view('admin.products.edit', compact('product', 'categories'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'description' => 'nullable|string',
        'price' => 'required|numeric',
        'old_price' => 'nullable|numeric',
        'quantity' => 'required|integer',
        'category_id' => 'nullable|exists:categories,id',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
    ]);

    $validated['slug'] = $validated['slug'] ?? Str::slug($validated['title']);

    $product->update($validated);

    // Upload new images
    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $image) {
            $path = $image->store('products', 'public');
            ProductImage::create([
                'product_id' => $product->id,
                'image' => 'storage/' . $path
            ]);
        }
    }

    // Update variants
    $product->variants()->delete();
    if ($request->variants) {
        foreach ($request->variants as $variant) {
            ProductVariant::create([
                'product_id' => $product->id,
                'variant_name' => $variant['name'] ?? '',
                'price' => $variant['price'] ?? 0,
                'stock' => $variant['stock'] ?? 0
            ]);
        }
    }

    return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
}

public function destroy($id)
{
    $product = Product::findOrFail($id);

    foreach ($product->images as $image) {
        if (Storage::disk('public')->exists(str_replace('storage/', '', $image->image))) {
            Storage::disk('public')->delete(str_replace('storage/', '', $image->image));
        }
        $image->delete();
    }

    $product->variants()->delete();
    $product->delete();

    return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
}

}
