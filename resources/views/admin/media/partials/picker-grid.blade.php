{{-- Lightweight grid rendered inside the media picker modal (AJAX) --}}
<div class="picker-toolbar d-flex flex-wrap gap-2 mb-3">
    <div class="input-group input-group-sm" style="max-width: 240px;">
        <span class="input-group-text"><i class="bi bi-search"></i></span>
        <input type="text" class="form-control picker-search" placeholder="Search…" value="{{ request('search') }}">
    </div>
    <select class="form-select form-select-sm picker-type" style="max-width: 140px;">
        <option value="">All types</option>
        @foreach(['image' => 'Images', 'pdf' => 'PDF', 'word' => 'Word', 'excel' => 'Excel'] as $key => $label)
            <option value="{{ $key }}" @selected(request('type') === $key)>{{ $label }}</option>
        @endforeach
    </select>
</div>

{{-- Folder navigation --}}
<nav class="mb-2 small">
    <a href="#" class="picker-nav text-decoration-none" data-folder=""><i class="bi bi-house-door"></i> Library</a>
    @foreach($breadcrumbs as $crumb)
        <span class="text-muted mx-1">/</span>
        <a href="#" class="picker-nav text-decoration-none" data-folder="{{ $crumb->id }}">{{ $crumb->name }}</a>
    @endforeach
</nav>

@if($folders->isNotEmpty() && !request()->filled('search'))
    <div class="d-flex flex-wrap gap-2 mb-3">
        @foreach($folders as $f)
            <a href="#" class="picker-nav btn btn-sm btn-light border" data-folder="{{ $f->id }}">
                <i class="bi bi-folder-fill text-warning me-1"></i>{{ $f->name }}
            </a>
        @endforeach
    </div>
@endif

<div class="row g-2">
    @forelse($items as $media)
        <div class="col-4 col-md-3 col-lg-2">
            <button type="button" class="picker-item card border p-0 w-100"
                    data-id="{{ $media->id }}"
                    data-path="{{ $media->file_path }}"
                    data-url="{{ $media->url }}"
                    data-thumb="{{ $media->thumb_url }}"
                    data-name="{{ $media->name }}"
                    data-type="{{ $media->type }}">
                @if($media->isImage())
                    <img src="{{ $media->thumb_url }}" alt="{{ $media->alt_text ?? $media->name }}"
                         class="card-img-top" loading="lazy" style="aspect-ratio: 1; object-fit: cover;">
                @else
                    <div class="d-flex align-items-center justify-content-center bg-light" style="aspect-ratio: 1;">
                        <i class="bi {{ [
                            'pdf' => 'bi-file-earmark-pdf text-danger',
                            'word' => 'bi-file-earmark-word text-primary',
                            'excel' => 'bi-file-earmark-excel text-success',
                        ][$media->type] ?? 'bi-file-earmark text-secondary' }} fs-2"></i>
                    </div>
                @endif
                <div class="small text-truncate px-1 pb-1" title="{{ $media->name }}">{{ $media->name }}</div>
            </button>
        </div>
    @empty
        <div class="col-12 text-center text-muted py-4">
            <i class="bi bi-images fs-1 d-block mb-2"></i> No files found.
        </div>
    @endforelse
</div>

<div class="mt-2 picker-pagination">
    {{ $items->links() }}
</div>
