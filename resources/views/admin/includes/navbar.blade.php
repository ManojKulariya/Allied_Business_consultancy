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
        {{-- Notifications --}}
        @php
            $unreadContacts = \App\Models\Contact::query()->unread()->count();
            $pendingApplications = \App\Models\JobApplication::query()->where('application_status', 'pending')->count();
            $notificationCount = $unreadContacts + $pendingApplications;
        @endphp
        <li class="nav-item dropdown me-2">
            <a class="nav-link position-relative" href="#" data-bs-toggle="dropdown" aria-label="Notifications">
                <i class="bi bi-bell fs-5"></i>
                @if($notificationCount > 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ $notificationCount > 99 ? '99+' : $notificationCount }}
                    </span>
                @endif
            </a>
            <div class="dropdown-menu dropdown-menu-end shadow-sm notification-dropdown">
                <h6 class="dropdown-header">Notifications</h6>
                @if($unreadContacts > 0)
                    <a class="dropdown-item d-flex align-items-center" href="{{ safe_route('admin.contacts.index') }}">
                        <i class="bi bi-envelope-exclamation text-danger me-2"></i>
                        <div>
                            <div class="small fw-semibold">{{ $unreadContacts }} unread message(s)</div>
                            <div class="small text-muted">Contact form submissions</div>
                        </div>
                    </a>
                @endif
                @if($pendingApplications > 0)
                    <a class="dropdown-item d-flex align-items-center" href="{{ safe_route('admin.job-applications.index') }}">
                        <i class="bi bi-file-person text-primary me-2"></i>
                        <div>
                            <div class="small fw-semibold">{{ $pendingApplications }} pending application(s)</div>
                            <div class="small text-muted">Job applications awaiting review</div>
                        </div>
                    </a>
                @endif
                @if($notificationCount === 0)
                    <span class="dropdown-item-text small text-muted">No new notifications</span>
                @endif
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
