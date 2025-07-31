@extends('layouts.master') 
@section('content')
<div class="container">
  <div class="card mt-4">
    <div class="card-header d-flex justify-content-between align-items-center">
      <h5>Add Product</h5>
      <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Back to List</a>
    </div>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="card-body">
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="product-name" class="form-label">Product Name</label>
            <input type="text" id="product-name" name="title" class="form-control" required>
          </div>

          <div class="mb-3 col-md-6">
            <label for="product-slug" class="form-label">Slug</label>
            <input type="text" id="product-slug" name="slug" class="form-control" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3 col-md-4">
            <label for="product-price" class="form-label">Price</label>
            <input type="number" id="product-price" name="price" step="0.01" class="form-control" required>
          </div>

          <div class="mb-3 col-md-4">
            <label for="product-old-price" class="form-label">Old Price</label>
            <input type="number" id="product-old-price" name="old_price" step="0.01" class="form-control">
          </div>

          <div class="mb-3 col-md-4">
            <label for="product-stock" class="form-label">Stock</label>
            <input type="number" id="product-stock" name="quantity" class="form-control" required>
          </div>
        </div>

        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="countdown-end" class="form-label">Sale Countdown End</label>
            <input type="datetime-local" id="countdown-end" name="countdown_end" class="form-control">
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label d-block">Status</label>
            <input type="checkbox" name="status" checked> Active
          </div>
        </div>

        <div class="mb-3">
          <label for="category-id" class="form-label">Category</label>
          <select id="category-id" name="category_id" class="form-control" required>
            <option value="">-- Choose Category --</option>
            @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="mb-3">
          <label for="product-description" class="form-label">Description</label>
          <textarea id="product-description" name="description" class="form-control" rows="4"></textarea>
        </div>

        <div class="mb-3">
          <label for="main-image" class="form-label">Main Image</label>
          <input type="file" id="main-image" name="main_image" class="form-control" accept="image/*" required>
        </div>

        <div class="mb-3">
          <label for="gallery-images" class="form-label">Gallery Images</label>
          <input type="file" id="gallery-images" name="gallery_images[]" class="form-control" multiple accept="image/*">
        </div>

        <hr>
        <h6>Product Variants</h6>
        <div id="variant-wrapper"></div>
        <button type="button" id="add-variant" class="btn btn-sm btn-secondary mt-2">+ Add Variant</button>
      </div>

      <div class="card-footer text-end">
        <button type="submit" class="btn btn-primary">Save Product</button>
      </div>
    </form>
  </div>
</div>
@endsection

@push('scripts')
<script>
  function addVariantRow(index = null) {
    index = document.querySelectorAll('.variant-row').length;
    const html = `
      <div class="row mb-2 variant-row">
        <div class="col-md-4"><input type="text" name="variants[${index}][color]" class="form-control" placeholder="Color"></div>
        <div class="col-md-3"><input type="text" name="variants[${index}][size]" class="form-control" placeholder="Size"></div>
        <div class="col-md-3"><input type="number" name="variants[${index}][stock]" class="form-control" placeholder="Stock"></div>
        <div class="col-md-2"><button type="button" class="btn btn-danger remove-variant">X</button></div>
      </div>`;
    document.getElementById('variant-wrapper').insertAdjacentHTML('beforeend', html);
  }

  document.getElementById('add-variant')?.addEventListener('click', () => addVariantRow());

  document.addEventListener('click', e => {
    if (e.target.classList.contains('remove-variant')) {
      e.target.closest('.variant-row').remove();
    }
  });
</script>
@endpush
