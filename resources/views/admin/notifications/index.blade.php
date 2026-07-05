@extends('admin.layouts.app')

@section('title', 'Notifications')

@section('breadcrumbs')
    <li class="breadcrumb-item active">Notifications</li>
@endsection

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h4 mb-0">Notification Center</h1>
        @if($notifications->total() > 0)
            <form method="POST" action="{{ route('admin.notifications.read-all') }}">
                @csrf
                <button type="submit" class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-check2-all me-1"></i> Mark All Read
                </button>
            </form>
        @endif
    </div>

    <div class="card">
        <div class="list-group list-group-flush">
            @forelse($notifications as $notification)
                @php $data = $notification->data; @endphp
                <div class="list-group-item d-flex align-items-start gap-3 py-3 {{ $notification->read_at ? '' : 'bg-primary bg-opacity-10' }}">
                    <div class="stat-icon bg-{{ $data['color'] ?? 'secondary' }} bg-opacity-10 text-{{ $data['color'] ?? 'secondary' }}"
                         style="width: 42px; height: 42px; font-size: 1.1rem;">
                        <i class="bi {{ $data['icon'] ?? 'bi-bell' }}"></i>
                    </div>
                    <div class="flex-grow-1">
                        <div class="fw-semibold small">
                            {{ $data['title'] ?? 'Notification' }}
                            @unless($notification->read_at)
                                <span class="badge bg-primary ms-1">New</span>
                            @endunless
                        </div>
                        <div class="small text-muted">{{ $data['message'] ?? '' }}</div>
                        <div class="small text-muted">{{ $notification->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="d-flex gap-1">
                        <form method="POST" action="{{ route('admin.notifications.read', $notification->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-sm btn-outline-primary" title="Open">
                                <i class="bi bi-box-arrow-up-right"></i>
                            </button>
                        </form>
                        <form method="POST" action="{{ route('admin.notifications.destroy', $notification->id) }}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Delete">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="list-group-item text-center text-muted py-5">
                    <i class="bi bi-bell-slash display-4 d-block mb-2"></i>
                    You're all caught up — no notifications.
                </div>
            @endforelse
        </div>
    </div>

    <div class="mt-3">
        {{ $notifications->links() }}
    </div>
@endsection
