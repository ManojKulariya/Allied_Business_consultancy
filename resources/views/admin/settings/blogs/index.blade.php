@extends('layouts.master')

@section('content')
            @if(session('success'))
        <div class="alert alert-primary">{{ session('success') }}</div>
        @endif

<div class="card mt-4">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        Blogs
        <button class="btn btn-primary" onclick="openBlogModal()">+ Add Blog</button>
    </h5>

    @include('admin.settings.blogs.form')

    <div class="table-responsive text-nowrap">
        <table class="table table-bordered table-striped align-middle mb-0">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <!-- <th>Category</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($blogs as $blog)
                
                <tr>
                    <td><img src="{{ asset($blog->image) }}" alt="blog" width="100" height="70"></td>
                    <td>{{ $blog->title }}</td>
                    <!-- <td>{{ $blog->category }}</td> -->
                    <td>
                        <button class="btn btn-sm btn-info"
                            onclick="openBlogModal('{{ $blog->id }}', `{{ $blog->title }}`, `{{ $blog->content }}`, `{{ $blog->category }}`)">
                            Edit
                        </button>
                        <form action="{{ route('admin.settings.blog.delete', $blog->id) }}" method="POST" style="display:inline-block;" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-sm btn-danger btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">No blogs found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function openBlogModal(id = null, title = '', content = '') {
        const modal = new bootstrap.Modal(document.getElementById('blogModal'));

        document.getElementById('blogTitle').value = title;
        document.getElementById('blogContent').value = content;

        const form = document.getElementById('blogForm');
        const methodInput = document.getElementById('formMethod');
        const modalTitle = document.getElementById('blogModalTitle');
        const submitBtn = document.getElementById('modalSubmitButton');

        if (id) {
            form.action = `/admin/settings/blogs/update/${id}`;
            methodInput.value = 'POST';
            modalTitle.innerText = 'Edit Blog';
            submitBtn.innerText = 'Update';
        } else {
            form.action = `{{ route('admin.settings.blogs.store') }}`;
            methodInput.value = 'POST';
            modalTitle.innerText = 'Add New Blog';
            submitBtn.innerText = 'Save';
        }

        modal.show();
    }
</script>
@endpush
