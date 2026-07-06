{{-- Sticky dynamic header: logo, menu (Menus module), CTA.
     The item routed to frontend.services.index renders as a full-width
     mega menu fed by services_menu() (Service Categories + Services,
     cached, auto-refreshed on any admin change). --}}
@php $headerMenu = menu_tree('header'); @endphp

<header class="site-header {{ setting('header_sticky', '1') == '1' ? 'sticky-top' : '' }}" id="siteHeader">
    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            {{-- Logo --}}
            <a href="{{ route('frontend.home') }}" class="navbar-brand d-flex align-items-center gap-2">
                @if(setting('site_logo'))
                    <img src="{{ uploaded_asset(setting('site_logo')) }}" alt="{{ setting('site_name') }}" height="46">
                @else
                    <span class="brand-mark d-inline-flex align-items-center justify-content-center rounded-3">
                        <i class="bi bi-buildings"></i>
                    </span>
                    <span class="fw-bold fs-5 brand-text">{{ setting('site_name', 'Allied Business') }}</span>
                @endif
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileNav"
                    aria-label="Toggle navigation">
                <i class="bi bi-list fs-2"></i>
            </button>

            {{-- Desktop menu --}}
            <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex">
                <ul class="navbar-nav align-items-lg-center gap-lg-1">
                    @foreach($headerMenu?->items ?? [] as $menuItem)
                        @if($menuItem->route_name === 'frontend.services.index')
                            {{-- ===== Services mega menu ===== --}}
                            <li class="nav-item dropdown mega-dropdown position-static">
                                <a class="nav-link dropdown-toggle" href="{{ $menuItem->resolved_url }}"
                                   data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button">
                                    {{ $menuItem->label }}
                                </a>
                                <div class="dropdown-menu mega-menu border-0 shadow-lg mt-0 w-100">
                                    <div class="container py-4">
                                        <div class="row g-4">
                                            @foreach(services_menu() as $category)
                                                <div class="col-6 col-xl-3 mega-category">
                                                    <a href="{{ safe_route('frontend.services.category', $category) }}"
                                                       class="d-flex align-items-center gap-2 mega-category-title text-decoration-none mb-2">
                                                        <span class="mega-icon d-inline-flex align-items-center justify-content-center rounded-2">
                                                            <i class="bi {{ $category->icon ?: 'bi-folder2' }}"></i>
                                                        </span>
                                                        <span>{{ $category->name }}</span>
                                                    </a>
                                                    <ul class="list-unstyled mega-services mb-0">
                                                        @foreach($category->activeServices->take(4) as $service)
                                                            <li>
                                                                <a href="{{ safe_route('frontend.services.show', $service) }}">
                                                                    {{ $service->title }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                        @if($category->activeServices->count() > 4)
                                                            <li>
                                                                <a href="{{ safe_route('frontend.services.category', $category) }}" class="mega-more">
                                                                    +{{ $category->activeServices->count() - 4 }} more
                                                                </a>
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="mega-footer d-flex flex-wrap justify-content-between align-items-center gap-3 mt-4 pt-3">
                                            <span class="small">
                                                <i class="bi bi-stars me-1"></i>
                                                Not sure what you need? Talk to an expert — it's free.
                                            </span>
                                            <div class="d-flex gap-2">
                                                @if(setting('contact_phone'))
                                                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', setting('contact_phone')) }}"
                                                       class="btn btn-sm btn-outline-light">
                                                        <i class="bi bi-telephone me-1"></i>{{ setting('contact_phone') }}
                                                    </a>
                                                @endif
                                                <a href="{{ safe_route('frontend.services.index') }}" class="btn btn-sm btn-accent">
                                                    View All Services <i class="bi bi-arrow-right ms-1"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @elseif($menuItem->children->isNotEmpty())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                                    {{ $menuItem->label }}
                                </a>
                                <ul class="dropdown-menu shadow-sm border-0 mt-2">
                                    @foreach($menuItem->children as $child)
                                        <li>
                                            <a class="dropdown-item py-2" href="{{ $child->resolved_url }}" target="{{ $child->target }}">
                                                @if($child->icon)<i class="bi {{ $child->icon }} me-2"></i>@endif
                                                {{ $child->label }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link {{ $menuItem->resolved_url === url()->current() ? 'active' : '' }}"
                                   href="{{ $menuItem->resolved_url }}" target="{{ $menuItem->target }}">
                                    {{ $menuItem->label }}
                                </a>
                            </li>
                        @endif
                    @endforeach

                    @if(setting('header_cta_text'))
                        <li class="nav-item ms-lg-3">
                            <a href="{{ url(setting('header_cta_url', '/contact-us')) }}" class="btn btn-accent px-4">
                                {{ setting('header_cta_text') }}
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>

{{-- Mobile offcanvas menu --}}
<div class="offcanvas offcanvas-end" tabindex="-1" id="mobileNav">
    <div class="offcanvas-header border-bottom">
        <span class="fw-bold">{{ setting('site_name', 'Menu') }}</span>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="nav flex-column gap-1">
            @foreach($headerMenu?->items ?? [] as $menuItem)
                @if($menuItem->route_name === 'frontend.services.index')
                    {{-- Services: category accordion --}}
                    <li class="nav-item">
                        <a class="nav-link px-0 text-dark fw-medium d-flex justify-content-between align-items-center"
                           data-bs-toggle="collapse" href="#mobileServices" role="button">
                            {{ $menuItem->label }} <i class="bi bi-chevron-down small"></i>
                        </a>
                        <div class="collapse" id="mobileServices">
                            <div class="accordion accordion-flush mobile-services-accordion" id="mobileServicesAccordion">
                                @foreach(services_menu() as $category)
                                    <div class="accordion-item">
                                        <h3 class="accordion-header">
                                            <button class="accordion-button collapsed py-2 small fw-semibold" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#mob-cat-{{ $category->id }}">
                                                <i class="bi {{ $category->icon ?: 'bi-folder2' }} me-2 text-primary"></i>
                                                {{ $category->name }}
                                            </button>
                                        </h3>
                                        <div id="mob-cat-{{ $category->id }}" class="accordion-collapse collapse"
                                             data-bs-parent="#mobileServicesAccordion">
                                            <div class="accordion-body py-1 ps-4">
                                                @foreach($category->activeServices as $service)
                                                    <a href="{{ safe_route('frontend.services.show', $service) }}"
                                                       class="d-block py-1 small text-muted text-decoration-none">
                                                        {{ $service->title }}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link px-0 text-dark fw-medium" href="{{ $menuItem->resolved_url }}">{{ $menuItem->label }}</a>
                        @foreach($menuItem->children as $child)
                            <a class="nav-link px-3 py-1 text-muted small" href="{{ $child->resolved_url }}">— {{ $child->label }}</a>
                        @endforeach
                    </li>
                @endif
            @endforeach
        </ul>
        @if(setting('header_cta_text'))
            <a href="{{ url(setting('header_cta_url', '/contact-us')) }}" class="btn btn-accent w-100 mt-3">
                {{ setting('header_cta_text') }}
            </a>
        @endif
    </div>
</div>
