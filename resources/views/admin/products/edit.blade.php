@extends('layouts.master')

@section('content')
<div class="card">
  <div class="card-header">
    <h5>Edit Product</h5>
  </div>
  <div class="card-body">
    <form action="{{ url('admin/products/update/' . $product->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('POST')

      <div class="row">
        <div class="mb-3 col-md-6">
          <label for="product-name" class="form-label">Product Name</label>
          <input type="text" id="product-name" name="title" value="{{ $product->title }}" class="form-control" required>
        </div>

        <div class="mb-3 col-md-6">
          <label for="product-slug" class="form-label">Slug</label>
          <input type="text" id="product-slug" name="slug" value="{{ $product->slug }}" class="form-control" required>
        </div>
      </div>

      <div class="row">
        <div class="mb-3 col-md-6">
          <label for="product-price" class="form-label">Price</label>
          <input type="number" id="product-price" name="price" value="{{ $product->price }}" step="0.01" class="form-control" required>
        </div>

        <div class="mb-3 col-md-6">
          <label for="product-stock" class="form-label">Stock</label>
          <input type="number" id="product-stock" name="quantity" value="{{ $product->quantity }}" class="form-control" required>
        </div>
      </div>

      <div class="mb-3">
        <label for="category-id" class="form-label">Category</label>
        <select id="category-id" name="category_id" class="form-control" required>
          <option value="">-- Choose Category --</option>
          @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
          @endforeach
        </select>
      </div>

      <div class="mb-3">
        <label for="product-description" class="form-label">Description</label>
        <textarea id="product-description" name="description" class="form-control">{{ $product->description }}</textarea>
      </div>

      <div class="mb-3">
        <label class="form-label" for="product-img">Product Images</label>
        <input type="file" id="product-img" name="images[]" class="form-control" multiple accept="image/*">
        @foreach($product->images as $img)
          <img src="{{ asset($img->image_path) }}" width="60" class="me-2 mt-2">
        @endforeach
      </div>

      <div id="variant-wrapper">
        @foreach($product->variants as $index => $variant)
          <div class="row mb-2 variant-row">
            <div class="col-md-4"><input type="text" name="variants[{{ $index }}][color]" class="form-control" value="{{ $variant->color }}" placeholder="Color"></div>
            <div class="col-md-3"><input type="text" name="variants[{{ $index }}][size]" class="form-control" value="{{ $variant->size }}" placeholder="Size"></div>
            <div class="col-md-3"><input type="number" name="variants[{{ $index }}][stock]" class="form-control" value="{{ $variant->stock }}" placeholder="Stock"></div>
            <div class="col-md-2"><button type="button" class="btn btn-danger remove-variant">X</button></div>
          </div>
        @endforeach
      </div>

      <button type="button" id="add-variant" class="btn btn-sm btn-secondary mt-2">+ Add Variant</button>

      <div class="mt-4">
        <button type="submit" class="btn btn-success">Update Product</button>
        <a href="{{ url('admin/products') }}" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
</div>

<script>
document.getElementById('add-variant').addEventListener('click', () => {
  const index = document.querySelectorAll('.variant-row').length;
  const html = `
    <div class="row mb-2 variant-row">
      <div class="col-md-4"><input type="text" name="variants[${index}][color]" class="form-control" placeholder="Color"></div>
      <div class="col-md-3"><input type="text" name="variants[${index}][size]" class="form-control" placeholder="Size"></div>
      <div class="col-md-3"><input type="number" name="variants[${index}][stock]" class="form-control" placeholder="Stock"></div>
      <div class="col-md-2"><button type="button" class="btn btn-danger remove-variant">X</button></div>
    </div>`;
  document.getElementById('variant-wrapper').insertAdjacentHTML('beforeend', html);
});

document.addEventListener('click', e => {
  if (e.target.classList.contains('remove-variant')) {
    e.target.closest('.variant-row').remove();
  }
});
</script>
@endsection
