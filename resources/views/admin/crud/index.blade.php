{{-- Generic module index: search, filters, sortable columns, status toggle,
     bulk delete, trash view with restore / permanent delete.
     Driven entirely by the controller's columns() config. --}}
@extends('admin.layouts.app')

@section('title', Str::plural($title))

@section('breadcrumbs')
    <li class="breadcrumb-item active">{{ Str::plural($title) }}</li>
@endsection

@section('content')
    @php $onTrash = request()->boolean('trashed'); @endphp

    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <h1 class="h4 mb-0">
            {{ Str::plural($title) }}
            @if($onTrash)<span class="badge bg-danger ms-1">Trash</span>@endif
        </h1>
        <div class="d-flex gap-2">
            <a href="{{ route("{$routePrefix}.index", ['trashed' => $onTrash ? null : 1]) }}"
               class="btn btn-sm btn-outline-{{ $onTrash ? 'secondary' : 'danger' }}">
                <i class="bi {{ $onTrash ? 'bi-arrow-left' : 'bi-trash' }} me-1"></i>
                {{ $onTrash ? 'Back to List' : 'Trash' }}
            </a>
            @if(!$onTrash)
                @can("{$permission}.create")
                    <a href="{{ route("{$routePrefix}.create") }}" class="btn btn-sm btn-primary">
                        <i class="bi bi-plus-lg me-1"></i> Add {{ $title }}
                    </a>
                @endcan
            @endif
        </div>
    </div>

    {{-- Filters --}}
    <div class="card mb-3">
        <div class="card-body py-2">
            <form method="GET" class="row g-2 align-items-center">
                @if($onTrash)<input type="hidden" name="trashed" value="1">@endif
                <div class="col-md-4">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" name="search" class="form-control" placeholder="Search…"
                               value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <select name="status" class="form-select form-select-sm" onchange="this.form.submit()">
                        <option value="">All statuses</option>
                        <option value="1" @selected(request('status') === '1')>Active</option>
                        <option value="0" @selected(request('status') === '0')>Inactive</option>
                    </select>
                </div>
                <div class="col-auto">
                    <button class="btn btn-sm btn-outline-primary">Filter</button>
                    @if(request()->hasAny(['search', 'status']))
                        <a href="{{ route("{$routePrefix}.index", $onTrash ? ['trashed' => 1] : []) }}"
                           class="btn btn-sm btn-outline-secondary">Reset</a>
                    @endif
                </div>
                <div class="col text-end">
                    @can("{$permission}.edit")
                        @unless($onTrash)
                            <button type="button" class="bulk-status-btn btn btn-sm btn-outline-success d-none"
                                    data-url="{{ route("{$routePrefix}.bulk-status") }}" data-active="1">
                                <i class="bi bi-check-circle me-1"></i> Activate (<span class="count">0</span>)
                            </button>
                            <button type="button" class="bulk-status-btn btn btn-sm btn-outline-secondary d-none"
                                    data-url="{{ route("{$routePrefix}.bulk-status") }}" data-active="0">
                                <i class="bi bi-dash-circle me-1"></i> Deactivate (<span class="count">0</span>)
                            </button>
                        @endunless
                    @endcan
                    @can("{$permission}.delete")
                        @unless($onTrash)
                            <button type="button" id="bulk-delete-btn"
                                    data-url="{{ route("{$routePrefix}.bulk-delete") }}"
                                    class="btn btn-sm btn-danger d-none">
                                <i class="bi bi-trash me-1"></i> Delete (<span class="count">0</span>)
                            </button>
                        @endunless
                    @endcan
                </div>
            </form>
        </div>
    </div>

    {{-- Table --}}
    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        @can("{$permission}.delete")
                            @unless($onTrash)
                                <th style="width: 36px;"><input type="checkbox" id="select-all" class="form-check-input"></th>
                            @endunless
                        @endcan
                        @foreach($columns as $column)
                            <th>
                                @if($column['sortable'] ?? false)
                                    @php
                                        $active = request('sort') === $column['key'];
                                        $nextDir = $active && request('direction') === 'asc' ? 'desc' : 'asc';
                                    @endphp
                                    <a href="{{ request()->fullUrlWithQuery(['sort' => $column['key'], 'direction' => $nextDir]) }}"
                                       class="text-decoration-none text-reset">
                                        {{ $column['label'] }}
                                        <i class="bi {{ $active ? (request('direction') === 'asc' ? 'bi-sort-up' : 'bi-sort-down') : 'bi-arrow-down-up opacity-25' }} small"></i>
                                    </a>
                                @else
                                    {{ $column['label'] }}
                                @endif
                            </th>
                        @endforeach
                        <th style="width: 90px;">Status</th>
                        <th style="width: 130px;" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr>
                            @can("{$permission}.delete")
                                @unless($onTrash)
                                    <td><input type="checkbox" class="form-check-input row-checkbox" value="{{ $item->id }}"></td>
                                @endunless
                            @endcan

                            @foreach($columns as $column)
                                @php $value = data_get($item, $column['key']); @endphp
                                <td>
                                    @switch($column['type'] ?? 'text')
                                        @case('image')
                                            <img src="{{ uploaded_asset($value) }}" alt=""
                                                 class="rounded" width="44" height="44" style="object-fit: cover;" loading="lazy">
                                            @break
                                        @case('icon')
                                            @if($value)<i class="bi {{ $value }} fs-5 text-primary"></i> <code class="small">{{ $value }}</code>@else — @endif
                                            @break
                                        @case('badge')
                                            @if($value)<span class="badge bg-secondary">{{ $value }}</span>@else — @endif
                                            @break
                                        @case('boolean')
                                            <i class="bi {{ $value ? 'bi-check-circle-fill text-success' : 'bi-dash-circle text-muted' }}"></i>
                                            @break
                                        @case('date')
                                            <span class="small text-muted">{{ $value?->format('d M Y') ?? '—' }}</span>
                                            @break
                                        @case('color')
                                            @if($value)
                                                <span class="d-inline-block rounded border align-middle me-1" style="width: 18px; height: 18px; background: {{ $value }};"></span>
                                                <code class="small">{{ $value }}</code>
                                            @else — @endif
                                            @break
                                        @default
                                            <span class="{{ $loop->first ? 'fw-semibold' : 'text-muted' }}">{{ Str::limit(strip_tags((string) $value), 60) ?: '—' }}</span>
                                    @endswitch
                                </td>
                            @endforeach

                            <td>
                                @can("{$permission}.edit")
                                    <div class="form-check form-switch">
                                        <input type="checkbox" class="form-check-input status-toggle" role="switch"
                                               data-url="{{ route("{$routePrefix}.toggle-status", $item->id) }}"
                                               @checked($item->isActive()) @disabled($onTrash)>
                                    </div>
                                @else
                                    <span class="badge {{ $item->status->badge() }}">{{ $item->status->label() }}</span>
                                @endcan
                            </td>

                            <td class="text-end">
                                @if($onTrash)
                                    @can("{$permission}.delete")
                                        <form method="POST" action="{{ route("{$routePrefix}.restore", $item->id) }}" class="d-inline">
                                            @csrf
                                            <button class="btn btn-sm btn-outline-success" title="Restore"><i class="bi bi-arrow-counterclockwise"></i></button>
                                        </form>
                                        <form method="POST" action="{{ route("{$routePrefix}.force-delete", $item->id) }}" class="d-inline force-delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" title="Delete permanently"><i class="bi bi-x-octagon"></i></button>
                                        </form>
                                    @endcan
                                @else
                                    @can("{$permission}.edit")
                                        <a href="{{ route("{$routePrefix}.edit", $item->id) }}" class="btn btn-sm btn-outline-primary" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    @endcan
                                    @can("{$permission}.delete")
                                        <form method="POST" action="{{ route("{$routePrefix}.destroy", $item->id) }}" class="d-inline delete-form">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-outline-danger" title="Move to trash"><i class="bi bi-trash"></i></button>
                                        </form>
                                    @endcan
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="{{ count($columns) + 3 }}" class="text-center text-muted py-5">
                                <i class="bi bi-inbox display-6 d-block mb-2"></i>
                                {{ $onTrash ? 'Trash is empty.' : 'No records found.' }}
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="mt-3">
        {{ $items->links() }}
    </div>
@endsection
