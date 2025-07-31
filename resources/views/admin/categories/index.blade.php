@extends('layouts.master') {{-- Or whatever your master layout is --}}

@section('content')
<div class="card">
  <h5 class="card-header d-flex justify-content-between">
    Categories List
<button class="btn btn-primary" onclick="openCategoryModal()">+ Add Category</button>
 @include('admin.categories.form')
  </h5>

  <div class="table-responsive text-nowrap">
    <table class="table table-bordered">
      <thead>
        <tr class="text-nowrap text-center">
          <th>#</th>
          <th>Name</th>
          <th>Slug</th>
          <th>Description</th>
          <th>Status</th>
          <th>Created At</th>
          <th>Actions</th>
        </tr>
      </thead>

      <tbody>
        @forelse ($categories as $index => $category)
          <tr class="text-center">
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $category->name }}</td>
            <td>{{ $category->slug }}</td>
            <td>{{ $category->description ?? '-' }}</td>
            <td>
              <span class="badge bg-{{ $category->is_active ? 'success' : 'secondary' }}">
                {{ $category->is_active ? 'Active' : 'Inactive' }}
              </span>
            </td>
            <td>{{ $category->created_at->format('Y-m-d') }}</td>
            <td>
        <button 
        class="btn btn-sm btn-warning" 
        onclick="editCategory('{{ $category->id }}', '{{ $category->name }}', '{{ $category->slug }}', `{{ $category->description }}`)"
        >
        Edit
        </button>
              <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST" style="display:inline-block;" class="delete-form">
  @csrf
  @method('DELETE')
  <button type="button" class="btn btn-sm btn-danger btn-delete">Delete</button>
</form>

            </td>
          </tr>
        @empty
          <tr>
            <td colspan="7" class="text-center">No categories found.</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>

  {{-- Pagination --}}
  <div class="card-footer">
    {{ $categories->links() }}
  </div>
</div>
@endsection
