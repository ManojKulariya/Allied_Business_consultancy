<header class="admin-navbar navbar navbar-expand bg-white border-bottom px-4 py-2 sticky-top">
    {{-- Sidebar toggle --}}
    <button class="btn btn-link text-dark p-0 me-3" id="sidebarToggle" aria-label="Toggle sidebar">
        <i class="bi bi-list fs-4"></i>
    </button>

    {{-- Quick link to website --}}
    <a href="{{ url('/') }}" target="_blank" class="btn btn-sm btn-outline-secondary d-none d-md-inline-flex align-items-center">
        <i class="bi bi-box-arrow-up-right me-1"></i> View Website
    </a>

    <ul class="navbar-nav ms-auto align-items-center">
        {{-- Notifications (database notification center) --}}
        @php
            $unreadNotifications = auth()->user()->unreadNotifications()->limit(6)->get();
            $unreadCount = auth()->user()->unreadNotifications()->count();
        @endphp
        <li class="nav-item dropdown me-2">
            <a class="nav-link position-relative" href="#" data-bs-toggle="dropdown" aria-label="Notifications">
                <i class="bi bi-bell fs-5"></i>
                @if($unreadCount > 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ $unreadCount > 99 ? '99+' : $unreadCount }}
                    </span>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-sm notification-dropdown p-0">
                <div class="d-flex justify-content-between align-items-center px-3 py-2 border-bottom">
                    <h6 class="mb-0 small fw-bold">Notifications</h6>
                    @if($unreadCount > 0)
                        <form method="POST" action="{{ route('admin.notifications.read-all') }}">
                            @csrf
                            <button type="submit" class="btn btn-link btn-sm p-0 small text-decoration-none">Mark all read</button>
                        </form>
                    @endif
                </div>
                @forelse($unreadNotifications as $notification)
                    @php $data = $notification->data; @endphp
                    <form method="POST" action="{{ route('admin.notifications.read', $notification->id) }}" class="border-bottom">
                        @csrf
                        <button type="submit" class="dropdown-item d-flex align-items-start gap-2 py-2 text-wrap">
                            <i class="bi {{ $data['icon'] ?? 'bi-bell' }} text-{{ $data['color'] ?? 'secondary' }} mt-1"></i>
                            <span>
                                <span class="small fw-semibold d-block">{{ $data['title'] ?? 'Notification' }}</span>
                                <span class="small text-muted d-block">{{ Str::limit($data['message'] ?? '', 70) }}</span>
                                <span class="text-muted" style="font-size: .72rem;">{{ $notification->created_at->diffForHumans() }}</span>
                            </span>
                        </button>
                    </form>
                @empty
                    <span class="dropdown-item-text small text-muted py-3 d-block text-center">No new notifications</span>
                @endforelse
                <a href="{{ route('admin.notifications.index') }}" class="dropdown-item text-center small py-2 text-primary">
                    View all notifications
                </a>
            </div>
        </li>

        {{-- Profile menu --}}
        <li class="nav-item dropdown">
            <a class="nav-link d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                <img src="{{ auth()->user()->avatar_url }}" alt="{{ auth()->user()->name }}"
                     class="rounded-circle me-2" width="34" height="34" style="object-fit: cover;">
                <span class="d-none d-md-inline fw-semibold">{{ auth()->user()->name }}</span>
                <i class="bi bi-chevron-down small ms-1"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-sm">
                <div class="dropdown-header">
                    <div class="fw-semibold">{{ auth()->user()->name }}</div>
                    <div class="small text-muted">{{ auth()->user()->email }}</div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('admin.profile.edit') }}">
                    <i class="bi bi-person me-2"></i> My Profile
                </a>
                <a class="dropdown-item" href="{{ route('admin.profile.edit') }}#change-password">
                    <i class="bi bi-key me-2"></i> Change Password
                </a>
                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger">
                        <i class="bi bi-box-arrow-right me-2"></i> Logout
                    </button>
                </form>
            </div>
        </li>
    </ul>
</header>
