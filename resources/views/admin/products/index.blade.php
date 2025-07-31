 @extends('layouts.master') 



@section('content')
<div class="card">
  <h5 class="card-header d-flex justify-content-between align-items-center">
    Products List
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">+ Add Product</a>
  </h5>

  <div class="table-responsive text-nowrap">
    <table class="table table-bordered">
      <thead>
        <tr class="text-nowrap text-center">
          <th>#</th>
          <th>Images</th>
          <th>Name</th>
          <th>Slug</th>
          <th>Variants</th>
          <th>Category</th>
          <th>Description</th>
          <th>Status</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        @forelse ($products as $index => $product)
          <tr class="text-center">
            <th scope="row">{{ $index + 1 }}</th>

            <td>
              @foreach($product->images as $img)
                <img src="{{ asset($img->image) }}" width="50" height="50" class="me-1 mb-1">
              @endforeach
            </td>

            <td>{{ $product->title }}</td>
            <td>{{ $product->slug }}</td>

            <td>
              @foreach($product->variants as $v)
                <div><strong>{{ $v->variant_name }}</strong> - ${{ $v->price }} ({{ $v->stock }})</div>
              @endforeach
            </td>

            <td>{{ $product->category ? $product->category->name : '-' }}</td>
            <td>{{ $product->description ?? '-' }}</td>
            <td>
              <span class="badge bg-{{ $product->is_active ? 'success' : 'secondary' }}">
                {{ $product->is_active ? 'Active' : 'Inactive' }}
              </span>
            </td>
            <td>{{ $product->created_at->format('Y-m-d') }}</td>
            <td>
              <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline delete-form">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="10" class="text-center">No products found.</td></tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
