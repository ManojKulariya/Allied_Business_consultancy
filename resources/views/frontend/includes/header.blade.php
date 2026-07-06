{{-- Sticky dynamic header: logo, menu (Menus module), CTA — mega-menu ready via nested items --}}
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
                    @php $headerMenu = menu_tree('header'); @endphp
                    @foreach($headerMenu?->items ?? [] as $menuItem)
                        @if($menuItem->children->isNotEmpty())
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
            @foreach(menu_tree('header')?->items ?? [] as $menuItem)
                <li class="nav-item">
                    <a class="nav-link px-0 text-dark fw-medium" href="{{ $menuItem->resolved_url }}">{{ $menuItem->label }}</a>
                    @foreach($menuItem->children as $child)
                        <a class="nav-link px-3 py-1 text-muted small" href="{{ $child->resolved_url }}">— {{ $child->label }}</a>
                    @endforeach
                </li>
            @endforeach
        </ul>
        @if(setting('header_cta_text'))
            <a href="{{ url(setting('header_cta_url', '/contact-us')) }}" class="btn btn-accent w-100 mt-3">
                {{ setting('header_cta_text') }}
            </a>
        @endif
    </div>
</div>
