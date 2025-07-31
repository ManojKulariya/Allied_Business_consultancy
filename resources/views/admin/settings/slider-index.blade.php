@extends('layouts.master')

@section('content')
            @if(session('success'))
        <div class="alert alert-primary">{{ session('success') }}</div>
        @endif
<div class="card mt-4">
    <h5 class="card-header d-flex justify-content-between align-items-center">
        Sliders
        <button class="btn btn-primary" onclick="openSliderModal()">+ Add Slider</button>
    </h5>

    @include('admin.settings.slider-form')

    <div class="table-responsive text-nowrap">
        <table class="table table-bordered table-striped align-middle mb-0">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Subtitle</th>
                    <!-- <th>Status</th> -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($sliders as $slider)
                <tr>
                    <td><img src="{{ asset($slider->image) }}" alt="slider" width="100"></td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->subtitle }}</td>
                    <!-- <td>
                        <span class="badge bg-{{ $slider->status ? 'success' : 'danger' }}">
                            {{ $slider->status ? 'Active' : 'Inactive' }}
                        </span>
                    </td> -->
                    <td>
                        <button class="btn btn-sm btn-info"
                            onclick="openSliderModal('{{ $slider->id }}', `{{ $slider->title }}`, `{{ $slider->subtitle }}`, `{{ $slider->button_text }}`, `{{ $slider->button_link }}`)">
                            Edit
                        </button>
                        
                        <form action="{{ route('admin.settings.slider.delete', $slider->id) }}" method="POST" style="display:inline-block;" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-sm btn-danger btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">No sliders found.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script>
    function openSliderModal(id = null, title = '', subtitle = '', buttonText = '', buttonLink = '') {
        const modal = new bootstrap.Modal(document.getElementById('sliderModal'));

        // Set form fields
        document.getElementById('sliderTitle').value = title;
        document.getElementById('sliderSubtitle').value = subtitle;
        document.getElementById('sliderButtonText').value = buttonText;
        document.getElementById('sliderButtonLink').value = buttonLink;

        const form = document.getElementById('sliderForm');
        const methodInput = document.getElementById('formMethod');
        const modalTitle = document.getElementById('sliderModalTitle');
        const submitBtn = document.getElementById('modalSubmitButton');

        if (id) {
            form.action = `/admin/settings/sliders/update/${id}`;
            methodInput.value = 'POST';
            modalTitle.innerText = 'Edit Slider';
            submitBtn.innerText = 'Update';
        } else {
            form.action = `{{ route('admin.settings.sliders.store') }}`;
            methodInput.value = 'POST';
            modalTitle.innerText = 'Add New Slider';
            submitBtn.innerText = 'Save';
        }

        modal.show();
    }
</script>
@endpush
