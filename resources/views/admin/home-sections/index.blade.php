@extends('admin.layouts.app')

@section('title', 'Homepage Builder')

@section('breadcrumbs')
    <li class="breadcrumb-item active">Homepage Builder</li>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h4 mb-1">Homepage Builder</h1>
            <p class="text-muted small mb-0">Drag to reorder · toggle to show/hide · click a section to edit its content</p>
        </div>
        <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-secondary btn-sm">
            <i class="bi bi-eye me-1"></i> Preview Homepage
        </a>
    </div>

    <div class="card">
        <div class="list-group list-group-flush" id="sectionList"
             data-reorder-url="{{ route('admin.home-sections.reorder') }}">
            @foreach($sections as $section)
                <div class="list-group-item d-flex align-items-center gap-3 py-3" data-id="{{ $section->id }}">
                    <i class="bi bi-grip-vertical text-muted fs-5 drag-handle" style="cursor: grab;"></i>

                    <div class="flex-grow-1">
                        <div class="fw-semibold">
                            {{ $section->name }}
                            <code class="small text-muted ms-1">{{ $section->section_key }}</code>
                        </div>
                        <div class="small text-muted text-truncate">{{ $section->title ?: '—' }}</div>
                    </div>

                    <div class="form-check form-switch mb-0" title="Show / hide section">
                        <input type="checkbox" class="form-check-input status-toggle" role="switch"
                               data-url="{{ route('admin.home-sections.toggle-status', $section->id) }}"
                               @checked($section->isActive())>
                    </div>

                    <a href="{{ route('admin.home-sections.edit', $section) }}" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-pencil me-1"></i> Edit
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.2/Sortable.min.js"></script>
    <script>
        const list = document.getElementById('sectionList');

        new Sortable(list, {
            handle: '.drag-handle',
            animation: 150,
            onEnd: function () {
                const order = Array.from(list.children).map((el) => el.dataset.id);

                $.post(list.dataset.reorderUrl, { order: order })
                    .done((res) => Swal.mixin({
                        toast: true, position: 'top-end', showConfirmButton: false, timer: 2000,
                    }).fire({ icon: 'success', title: res.message }))
                    .fail(() => Swal.fire('Error', 'Could not save order.', 'error'));
            },
        });
    </script>
@endpush
