<!-- Modal Wrapper -->
<div class="modal fade" id="addCategoryModal" tabindex="-1" aria-labelledby="addCategoryModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route('admin.categories.store') }}" method="POST">
      @csrf
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addCategoryModalLabel">Add New Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <!-- Category Name -->
          <div class="mb-3">
            <label class="form-label" for="category-name">Category Name</label>
            <input
              type="text"
              id="category-name"
              name="name"
              value="{{ old('name') }}"
              class="form-control @error('name') is-invalid @enderror"
              placeholder="Enter category name"
              required
            />
            @error('name')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

            <div class="mb-3">
            <label class="form-label" for="category-slug">Slug</label>
            <input
                type="text"
                id="category-slug"
                name="slug"
                value="{{ old('slug') }}"
                class="form-control @error('slug') is-invalid @enderror"
                placeholder="enter-category-slug"
                required
            />
            @error('slug')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
          <!-- Description -->
          <div class="mb-3">
            <label class="form-label" for="category-description">Description</label>
            <textarea
              id="category-description"
              name="description"
              class="form-control @error('description') is-invalid @enderror"
              placeholder="Enter category description"
            >{{ old('description') }}</textarea>
            @error('description')
              <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Create Category</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </div>
      </div>
    </form>
  </div>
</div>
