{{-- Premium footer — every block driven by Settings, Menus, Service Categories, Pages and Social Links --}}
<footer class="site-footer pt-5">
    <div class="container">
        <div class="row g-4 pb-4">
            {{-- Column 1: Company Information --}}
            <div class="col-lg-4 col-md-6">
                <a href="{{ route('frontend.home') }}" class="d-inline-flex align-items-center gap-2 text-decoration-none mb-3">
                    @if(setting('site_logo_light') || setting('site_logo'))
                        <img src="{{ uploaded_asset(setting('site_logo_light') ?: setting('site_logo')) }}"
                             alt="{{ setting('site_name') }}" height="44">
                    @else
                        <span class="brand-mark d-inline-flex align-items-center justify-content-center rounded-3">
                            <i class="bi bi-buildings"></i>
                        </span>
                        <span class="fw-bold fs-5 text-white">{{ setting('site_name') }}</span>
                    @endif
                </a>
                <p class="footer-text small">{{ setting('footer_about') }}</p>

                <ul class="list-unstyled footer-links small mb-0">
                    @if(setting('contact_address'))
                        <li class="d-flex gap-2 mb-2"><i class="bi bi-geo-alt"></i> <span style="white-space: pre-line;">{{ setting('contact_address') }}</span></li>
                    @endif
                    @if(setting('contact_phone'))
                        <li class="d-flex gap-2 mb-2"><i class="bi bi-telephone"></i>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', setting('contact_phone')) }}">{{ setting('contact_phone') }}</a>
                        </li>
                    @endif
                    @if(setting('contact_email'))
                        <li class="d-flex gap-2"><i class="bi bi-envelope"></i>
                            <a href="mailto:{{ setting('contact_email') }}">{{ setting('contact_email') }}</a>
                        </li>
                    @endif
                </ul>

                {{-- Social links — only rendered when at least one is configured --}}
                @if(social_links()->isNotEmpty())
                    <div class="d-flex gap-2 mt-3">
                        @foreach(social_links() as $social)
                            <a href="{{ $social->url }}" target="_blank" rel="noopener nofollow"
                               class="social-btn d-inline-flex align-items-center justify-content-center rounded-circle"
                               aria-label="{{ ucfirst($social->platform) }}">
                                <i class="bi {{ $social->icon ?: 'bi-globe' }}"></i>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Column 2: Quick Links (Menus module, location: footer) --}}
            <div class="col-lg-2 col-md-6">
                <h3 class="h6 footer-heading">Quick Links</h3>
                <ul class="list-unstyled footer-links">
                    @foreach(menu_tree('footer')?->items ?? [] as $link)
                        <li><a href="{{ $link->resolved_url }}"><i class="bi bi-chevron-right small me-1"></i>{{ $link->label }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Column 3: Popular Services (curated category subset) --}}
            <div class="col-lg-3 col-md-6">
                <h3 class="h6 footer-heading">Popular Services</h3>
                <ul class="list-unstyled footer-links">
                    @php
                        $popularSlugs = [
                            'business-registration', 'gst-services', 'income-tax-services',
                            'trademark-legal-services', 'accounting-bookkeeping', 'roc-mca-compliance',
                        ];
                        $popularCategories = \App\Models\ServiceCategory::query()->active()
                            ->whereIn('slug', $popularSlugs)->get()->sortBy(fn ($c) => array_search($c->slug, $popularSlugs));
                    @endphp
                    @foreach($popularCategories as $category)
                        <li>
                            <a href="{{ safe_route('frontend.services.category', $category) }}">
                                <i class="bi bi-chevron-right small me-1"></i>{{ $category->name }}
                            </a>
                        </li>
                    @endforeach
                    <li class="mt-2">
                        <a href="{{ safe_route('frontend.services.index') }}" class="fw-semibold">
                            <i class="bi bi-arrow-right-circle small me-1"></i>View All Services
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Column 4: Legal (Pages module, show_in_footer) --}}
            <div class="col-lg-3 col-md-6">
                <h3 class="h6 footer-heading">Legal</h3>
                <ul class="list-unstyled footer-links">
                    @foreach(\App\Models\Page::query()->active()->where('show_in_footer', true)->ordered()->get(['id', 'title', 'slug']) as $legalPage)
                        <li>
                            <a href="{{ safe_route('frontend.page', $legalPage) }}">
                                <i class="bi bi-chevron-right small me-1"></i>{{ $legalPage->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="footer-bottom border-top py-3 d-flex flex-wrap justify-content-between align-items-center gap-2">
            <span class="small footer-text">
                {{ str_replace('{year}', date('Y'), setting('footer_copyright', '© '.date('Y').' '.setting('site_name'))) }}
            </span>
            <span class="small footer-text">
                Designed &amp; Developed by {{ setting('site_name') }}
            </span>
        </div>
    </div>
</footer>

{{-- Newsletter success toast — shared by every newsletter form sitewide
     (homepage section, Contact page section), not just the footer. --}}
@if(session('newsletter_success'))
    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const el = document.createElement('div');
                el.className = 'newsletter-toast shadow';
                el.innerHTML = '<i class="bi bi-check-circle me-2"></i>' + @json(session('newsletter_success'));
                document.body.appendChild(el);
                setTimeout(() => el.classList.add('show'), 100);
                setTimeout(() => el.remove(), 4500);
            });
        </script>
    @endpush
@endif
