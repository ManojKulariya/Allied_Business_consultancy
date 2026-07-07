@extends('admin.layouts.app')

@section('title', 'Contact Enquiries')

@section('breadcrumbs')
    <li class="breadcrumb-item active">Contact Enquiries</li>
@endsection

@section('content')
    @php $onTrash = request()->boolean('trashed'); @endphp

    <div class="d-flex flex-wrap justify-content-between align-items-center gap-2 mb-4">
        <h1 class="h4 mb-0">
            Contact Enquiries
            @if($onTrash)<span class="badge bg-danger ms-1">Trash</span>@endif
        </h1>
        <div class="d-flex gap-2">
            <a href="{{ route('admin.contacts.index', ['trashed' => $onTrash ? null : 1] + request()->except('trashed')) }}"
               class="btn btn-sm btn-outline-{{ $onTrash ? 'secondary' : 'danger' }}">
                <i class="bi {{ $onTrash ? 'bi-arrow-left' : 'bi-trash' }} me-1"></i>
                {{ $onTrash ? 'Back to List' : 'Trash' }}
            </a>
            @unless($onTrash)
                <a href="{{ route('admin.contacts.export-csv', request()->query()) }}" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-filetype-csv me-1"></i> Export CSV
                </a>
                <a href="{{ route('admin.contacts.export-excel', request()->query()) }}" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-file-earmark-excel me-1"></i> Export Excel
                </a>
            @endunless
        </div>
    </div>

    {{-- Filters --}}
    <div class="card mb-3">
        <div class="card-body py-2">
            <form method="GET" class="row g-2 align-items-center">
                @if($onTrash)<input type="hidden" name="trashed" value="1">@endif
                <div class="col-md-3">
                    <div class="input-group input-group-sm">
                        <span class="input-group-text"><i class="bi bi-search"></i></span>
                        <input type="text" name="search" class="form-control" placeholder="Search name, email, phone…"
                               value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <select name="read" class="form-select form-select-sm" onchange="this.form.submit()">
                        <option value="">All (read/unread)</option>
                        <option value="0" @selected(request('read') === '0')>Unread</option>
                        <option value="1" @selected(request('read') === '1')>Read</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <select name="reply_status" class="form-select form-select-sm" onchange="this.form.submit()">
                        <option value="">All reply statuses</option>
                        <option value="pending" @selected(request('reply_status') === 'pending')>Pending</option>
                        <option value="replied" @selected(request('reply_status') === 'replied')>Replied</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="date" name="date_from" class="form-control form-control-sm" value="{{ request('date_from') }}" title="From date">
                </div>
                <div class="col-md-2">
                    <input type="date" name="date_to" class="form-control form-control-sm" value="{{ request('date_to') }}" title="To date">
                </div>
                <div class="col-auto">
                    <button class="btn btn-sm btn-outline-primary">Filter</button>
                    @if(request()->hasAny(['search', 'read', 'reply_status', 'date_from', 'date_to']))
                        <a href="{{ route('admin.contacts.index', $onTrash ? ['trashed' => 1] : []) }}"
                           class="btn btn-sm btn-outline-secondary">Reset</a>
                    @endif
                </div>
                <div class="col text-end">
                    <button type="button" id="bulk-delete-btn"
                            data-url="{{ route('admin.contacts.bulk-delete') }}"
                            class="btn btn-sm btn-danger d-none">
                        <i class="bi bi-trash me-1"></i> Delete (<span class="count">0</span>)
                    </button>
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
                        @unless($onTrash)
                            <th style="width: 36px;"><input type="checkbox" id="select-all" class="form-check-input"></th>
                        @endunless
                        <th>Name</th>
                        <th>Contact Info</th>
                        <th>Service Interested</th>
                        <th>Status</th>
                        <th>Reply</th>
                        <th>Submitted</th>
                        <th style="width: 120px;" class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($items as $item)
                        <tr class="{{ $item->is_read ? '' : 'fw-semibold' }}">
                            @unless($onTrash)
                                <td><input type="checkbox" class="form-check-input row-checkbox" value="{{ $item->id }}"></td>
                            @endunless
                            <td>
                                {{ $item->name }}
                                @if($item->source === 'chatbot')
                                    <span class="badge bg-info-subtle text-info-emphasis ms-1" title="Captured via the AI Chat Assistant">
                                        <i class="bi bi-chat-dots"></i> Chatbot
                                    </span>
                                @endif
                                @if($item->company_name)<div class="small text-muted fw-normal">{{ $item->company_name }}</div>@endif
                            </td>
                            <td class="small">
                                <div><i class="bi bi-envelope me-1 text-muted"></i>{{ $item->email }}</div>
                                <div><i class="bi bi-telephone me-1 text-muted"></i>{{ $item->phone }}</div>
                            </td>
                            <td class="small text-muted">{{ $item->service_interested ?: '—' }}</td>
                            <td>
                                <span class="badge {{ $item->is_read ? 'bg-secondary' : 'bg-primary' }}">
                                    {{ $item->is_read ? 'Read' : 'New' }}
                                </span>
                            </td>
                            <td>
                                <span class="badge {{ $item->isReplied() ? 'bg-success' : 'bg-warning text-dark' }}">
                                    {{ ucfirst($item->reply_status) }}
                                </span>
                            </td>
                            <td class="small text-muted">{{ $item->created_at->format('d M Y, h:i A') }}</td>
                            <td class="text-end">
                                @if($onTrash)
                                    <form method="POST" action="{{ route('admin.contacts.restore', $item->id) }}" class="d-inline">
                                        @csrf
                                        <button class="btn btn-sm btn-outline-success" title="Restore"><i class="bi bi-arrow-counterclockwise"></i></button>
                                    </form>
                                    <form method="POST" action="{{ route('admin.contacts.force-delete', $item->id) }}" class="d-inline force-delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger" title="Delete permanently"><i class="bi bi-x-octagon"></i></button>
                                    </form>
                                @else
                                    <a href="{{ route('admin.contacts.show', $item->id) }}" class="btn btn-sm btn-outline-primary" title="View">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <form method="POST" action="{{ route('admin.contacts.destroy', $item->id) }}" class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-outline-danger" title="Move to trash"><i class="bi bi-trash"></i></button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="text-center text-muted py-5">
                                <i class="bi bi-inbox display-6 d-block mb-2"></i>
                                {{ $onTrash ? 'Trash is empty.' : 'No enquiries found.' }}
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
