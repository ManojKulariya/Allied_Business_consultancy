<aside class="admin-sidebar" id="adminSidebar">
    <div class="sidebar-brand">
        <a href="{{ route('admin.dashboard') }}" class="d-flex align-items-center text-decoration-none">
            @if(setting('site_logo_light'))
                <img src="{{ uploaded_asset(setting('site_logo_light')) }}" alt="{{ setting('site_name') }}" height="36">
            @else
                <i class="bi bi-buildings fs-4 me-2 text-white"></i>
                <span class="fw-bold text-white">{{ setting('site_name', 'Allied Business') }}</span>
            @endif
        </a>
    </div>

    <nav class="sidebar-nav">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="{{ route('admin.dashboard') }}" class="nav-link {{ active_menu('admin.dashboard') }}">
                    <i class="bi bi-speedometer2"></i> <span>Dashboard</span>
                </a>
            </li>

            {{-- Content --}}
            <li class="sidebar-heading">Content</li>

            @can('pages.view')
                <li class="nav-item">
                    <a href="{{ safe_route('admin.pages.index') }}" class="nav-link {{ active_menu('admin.pages.*') }}">
                        <i class="bi bi-file-earmark-text"></i> <span>Pages</span>
                    </a>
                </li>
            @endcan

            @can('blogs.view')
                <li class="nav-item">
                    <a href="#collapseBlog" data-bs-toggle="collapse" class="nav-link {{ active_menu('admin.blogs.*', '') ?: 'collapsed' }}">
                        <i class="bi bi-newspaper"></i> <span>Blog</span> <i class="bi bi-chevron-down ms-auto small"></i>
                    </a>
                    <div class="collapse {{ active_menu(['admin.blogs.*', 'admin.blog-categories.*'], 'show') }}" id="collapseBlog">
                        <ul class="nav flex-column sidebar-submenu">
                            <li><a href="{{ safe_route('admin.blogs.index') }}" class="nav-link">All Posts</a></li>
                            <li><a href="{{ safe_route('admin.blog-categories.index') }}" class="nav-link">Categories</a></li>
                        </ul>
                    </div>
                </li>
            @endcan

            @can('services.view')
                <li class="nav-item">
                    <a href="#collapseServices" data-bs-toggle="collapse" class="nav-link collapsed">
                        <i class="bi bi-briefcase"></i> <span>Services</span> <i class="bi bi-chevron-down ms-auto small"></i>
                    </a>
                    <div class="collapse" id="collapseServices">
                        <ul class="nav flex-column sidebar-submenu">
                            <li><a href="{{ safe_route('admin.services.index') }}" class="nav-link">All Services</a></li>
                            <li><a href="{{ safe_route('admin.service-categories.index') }}" class="nav-link">Categories</a></li>
                        </ul>
                    </div>
                </li>
            @endcan

            @can('galleries.view')
                <li class="nav-item">
                    <a href="#collapseGallery" data-bs-toggle="collapse" class="nav-link collapsed">
                        <i class="bi bi-images"></i> <span>Gallery</span> <i class="bi bi-chevron-down ms-auto small"></i>
                    </a>
                    <div class="collapse" id="collapseGallery">
                        <ul class="nav flex-column sidebar-submenu">
                            <li><a href="{{ safe_route('admin.galleries.index') }}" class="nav-link">All Items</a></li>
                            <li><a href="{{ safe_route('admin.gallery-categories.index') }}" class="nav-link">Categories</a></li>
                        </ul>
                    </div>
                </li>
            @endcan

            @can('testimonials.view')
                <li class="nav-item"><a href="{{ safe_route('admin.testimonials.index') }}" class="nav-link"><i class="bi bi-chat-quote"></i> <span>Testimonials</span></a></li>
            @endcan
            @can('teams.view')
                <li class="nav-item"><a href="{{ safe_route('admin.teams.index') }}" class="nav-link"><i class="bi bi-person-badge"></i> <span>Team</span></a></li>
            @endcan
            @can('clients.view')
                <li class="nav-item"><a href="{{ safe_route('admin.clients.index') }}" class="nav-link"><i class="bi bi-building"></i> <span>Clients</span></a></li>
            @endcan
            @can('partners.view')
                <li class="nav-item"><a href="{{ safe_route('admin.partners.index') }}" class="nav-link"><i class="bi bi-people"></i> <span>Partners</span></a></li>
            @endcan
            @can('faqs.view')
                <li class="nav-item"><a href="{{ safe_route('admin.faqs.index') }}" class="nav-link"><i class="bi bi-question-circle"></i> <span>FAQs</span></a></li>
            @endcan

            {{-- HR --}}
            <li class="sidebar-heading">Recruitment</li>
            @can('careers.view')
                <li class="nav-item"><a href="{{ safe_route('admin.careers.index') }}" class="nav-link"><i class="bi bi-person-workspace"></i> <span>Job Openings</span></a></li>
                <li class="nav-item"><a href="{{ safe_route('admin.job-applications.index') }}" class="nav-link"><i class="bi bi-file-person"></i> <span>Applications</span></a></li>
            @endcan

            {{-- Marketing --}}
            <li class="sidebar-heading">Marketing</li>
            @can('sliders.view')
                <li class="nav-item"><a href="{{ safe_route('admin.sliders.index') }}" class="nav-link"><i class="bi bi-collection-play"></i> <span>Sliders</span></a></li>
            @endcan
            @can('banners.view')
                <li class="nav-item"><a href="{{ safe_route('admin.banners.index') }}" class="nav-link"><i class="bi bi-badge-ad"></i> <span>Banners</span></a></li>
            @endcan
            @can('contacts.view')
                <li class="nav-item"><a href="{{ safe_route('admin.contacts.index') }}" class="nav-link"><i class="bi bi-envelope"></i> <span>Contact Messages</span></a></li>
            @endcan
            @can('newsletters.view')
                <li class="nav-item"><a href="{{ safe_route('admin.newsletters.index') }}" class="nav-link"><i class="bi bi-envelope-heart"></i> <span>Subscribers</span></a></li>
            @endcan

            {{-- System --}}
            <li class="sidebar-heading">System</li>
            @can('menus.view')
                <li class="nav-item"><a href="{{ safe_route('admin.menus.index') }}" class="nav-link"><i class="bi bi-list-nested"></i> <span>Menus</span></a></li>
            @endcan
            @can('users.view')
                <li class="nav-item"><a href="{{ safe_route('admin.users.index') }}" class="nav-link"><i class="bi bi-people-fill"></i> <span>Users</span></a></li>
            @endcan
            @can('roles.manage')
                <li class="nav-item"><a href="{{ safe_route('admin.roles.index') }}" class="nav-link"><i class="bi bi-shield-lock"></i> <span>Roles & Permissions</span></a></li>
            @endcan
            @can('settings.edit')
                <li class="nav-item"><a href="{{ safe_route('admin.settings.edit') }}" class="nav-link"><i class="bi bi-gear"></i> <span>Settings</span></a></li>
                <li class="nav-item"><a href="{{ safe_route('admin.seo-settings.index') }}" class="nav-link"><i class="bi bi-search"></i> <span>SEO Settings</span></a></li>
            @endcan
            @can('activity-logs.view')
                <li class="nav-item"><a href="{{ safe_route('admin.activity-logs.index') }}" class="nav-link"><i class="bi bi-clock-history"></i> <span>Activity Logs</span></a></li>
            @endcan
        </ul>
    </nav>
</aside>
<div class="sidebar-backdrop" id="sidebarBackdrop"></div>
