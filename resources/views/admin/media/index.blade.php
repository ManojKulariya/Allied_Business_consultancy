@extends('admin.layouts.app')

@section('title', 'Media Manager')

@section('breadcrumbs')
    <li class="breadcrumb-item active">Media Manager</li>
@endsection

@section('content')
    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <h1 class="h4 mb-0">Media Manager</h1>
        <div class="d-flex gap-2">
            <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#newFolderModal">
                <i class="bi bi-folder-plus me-1"></i> New Folder
            </button>
            @can('media.create')
                <button class="btn btn-primary" id="uploadTrigger">
                    <i class="bi bi-cloud-arrow-up me-1"></i> Upload Files
                </button>
            @endcan
        </div>
    </div>

    {{-- Toolbar: search + filters + bulk actions --}}
    <div class="card mb-3">
        <div class="card-body py-2">
            <form method="GET" class="row g-2 align-items-center">
                @if($currentFolder)
                    <input type="hidden" name="folder" value="{{ $currentFolder->id }}">
                @endif
                <div class="col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" name="search" class="form-control" placeholder="Search all files…"
                               value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <select name="type" class="form-select form-select-sm" onchange="this.form.submit()">
                        <option value="">All types</option>
                        @foreach(['image' => 'Images', 'pdf' => 'PDF', 'word' => 'Word', 'excel' => 'Excel'] as $key => $label)
                            <option value="{{ $key }}" @selected(request('type') === $key)>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-auto">
                    <button class="btn btn-sm btn-outline-primary">Filter</button>
                    @if(request()->hasAny(['search', 'type']))
                        <a href="{{ route('admin.media.index', $currentFolder ? ['folder' => $currentFolder->id] : []) }}"
                           class="btn btn-sm btn-outline-secondary">Reset</a>
                    @endif
                </div>
                <div class="col text-end">
                    @can('media.delete')
                        <button type="button" id="bulk-delete-btn" data-url="{{ route('admin.media.bulk-delete') }}"
                                class="btn btn-sm btn-danger d-none">
                            <i class="bi bi-trash me-1"></i> Delete (<span class="count">0</span>)
                        </button>
                    @endcan
                </div>
            </form>
        </div>
    </div>

    {{-- Folder breadcrumbs --}}
    <nav class="mb-3 small">
        <a href="{{ route('admin.media.index') }}" class="text-decoration-none">
            <i class="bi bi-house-door"></i> Library
        </a>
        @foreach($breadcrumbs as $crumb)
            <span class="text-muted mx-1">/</span>
            <a href="{{ route('admin.media.index', ['folder' => $crumb->id]) }}" class="text-decoration-none">
                {{ $crumb->name }}
            </a>
        @endforeach
    </nav>

    {{-- Drop zone --}}
    @can('media.create')
        <div id="dropZone" class="drop-zone mb-3 d-none">
            <i class="bi bi-cloud-arrow-up display-5"></i>
            <p class="mb-0">Drop files here to upload</p>
            <p class="small text-muted">Images, PDF, Word, Excel — max 10 MB each</p>
        </div>
        <input type="file" id="fileInput" multiple class="d-none"
               accept="image/*,.pdf,.doc,.docx,.xls,.xlsx,.csv">
        <div id="uploadProgress" class="mb-3 d-none">
            <div class="progress" style="height: 6px;">
                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 100%"></div>
            </div>
            <div class="small text-muted mt-1">Uploading…</div>
        </div>
    @endcan

    {{-- Folders --}}
    @if($folders->isNotEmpty() && !request()->hasAny(['search', 'type']))
        <div class="row g-2 mb-3">
            @foreach($folders as $f)
                <div class="col-6 col-md-3 col-xl-2">
                    <div class="card folder-card h-100">
                        <div class="card-body py-2 px-3 d-flex align-items-center gap-2">
                            <a href="{{ route('admin.media.index', ['folder' => $f->id]) }}"
                               class="d-flex align-items-center gap-2 text-decoration-none text-dark flex-grow-1 text-truncate">
                                <i class="bi bi-folder-fill text-warning fs-4"></i>
                                <span class="text-truncate small">
                                    {{ $f->name }}
                                    <span class="text-muted d-block" style="font-size: .72rem;">{{ $f->media_count }} file(s)</span>
                                </span>
                            </a>
                            @can('media.delete')
                                <button class="btn btn-sm btn-link text-danger p-0 folder-delete"
                                        data-url="{{ route('admin.media-folders.destroy', $f) }}" title="Delete folder">
                                    <i class="bi bi-x-lg small"></i>
                                </button>
                            @endcan
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    {{-- Media grid --}}
    <div class="row g-2" id="mediaGrid">
        @forelse($items as $media)
            @include('admin.media.partials.card', ['media' => $media])
        @empty
            <div class="col-12">
                <div class="text-center text-muted py-5">
                    <i class="bi bi-images display-4 d-block mb-2"></i>
                    No files here yet. @can('media.create') Upload some files to get started. @endcan
                </div>
            </div>
        @endforelse
    </div>

    <div class="mt-3">
        {{ $items->links() }}
    </div>

    {{-- New folder modal --}}
    <div class="modal fade" id="newFolderModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <form class="modal-content" id="newFolderForm"
                  data-url="{{ route('admin.media-folders.store') }}">
                <div class="modal-header py-2">
                    <h6 class="modal-title">New Folder</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="name" class="form-control" placeholder="Folder name" required maxlength="100">
                    <input type="hidden" name="parent_id" value="{{ $currentFolder?->id }}">
                </div>
                <div class="modal-footer py-2">
                    <button type="submit" class="btn btn-sm btn-primary">Create</button>
                </div>
            </form>
        </div>
    </div>

    {{-- Details offcanvas --}}
    <div class="offcanvas offcanvas-end" tabindex="-1" id="mediaDetails">
        <div class="offcanvas-header border-bottom">
            <h6 class="offcanvas-title">File Details</h6>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body" id="mediaDetailsBody"></div>
    </div>
@endsection

@push('scripts')
    <script>
        window.mediaManagerConfig = {
            uploadUrl: @json(route('admin.media.store')),
            updateUrlBase: @json(url('admin/media')),
            folderId: @json($currentFolder?->id),
            canDelete: @json(auth()->user()->can('media.delete')),
        };
    </script>
    <script src="{{ asset('admin/js/media-manager.js') }}"></script>
@endpush
