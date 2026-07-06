{{-- Premium footer — every block driven by Settings, Menus, Services and Social Links --}}
<footer class="site-footer pt-5">
    <div class="container">
        <div class="row g-4 pb-4">
            {{-- About --}}
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

                {{-- Social links --}}
                <div class="d-flex gap-2 mt-3">
                    @foreach(social_links() as $social)
                        <a href="{{ $social->url }}" target="_blank" rel="noopener nofollow"
                           class="social-btn d-inline-flex align-items-center justify-content-center rounded-circle"
                           aria-label="{{ ucfirst($social->platform) }}">
                            <i class="bi {{ $social->icon ?: 'bi-globe' }}"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Quick links (Menus module, location: footer) --}}
            <div class="col-lg-2 col-md-6">
                <h6 class="footer-heading">Quick Links</h6>
                <ul class="list-unstyled footer-links">
                    @foreach(menu_tree('footer')?->items ?? [] as $link)
                        <li><a href="{{ $link->resolved_url }}"><i class="bi bi-chevron-right small me-1"></i>{{ $link->label }}</a></li>
                    @endforeach
                </ul>
            </div>

            {{-- Services --}}
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading">Our Services</h6>
                <ul class="list-unstyled footer-links">
                    @foreach(\App\Models\Service::query()->active()->ordered()->limit(6)->get(['id', 'title', 'slug']) as $footerService)
                        <li>
                            <a href="{{ safe_route('frontend.services.show', $footerService) }}">
                                <i class="bi bi-chevron-right small me-1"></i>{{ $footerService->title }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact + newsletter --}}
            <div class="col-lg-3 col-md-6">
                <h6 class="footer-heading">Get In Touch</h6>
                <ul class="list-unstyled footer-links small">
                    @if(setting('contact_address'))
                        <li class="d-flex gap-2 mb-2"><i class="bi bi-geo-alt"></i> {{ setting('contact_address') }}</li>
                    @endif
                    @if(setting('contact_phone'))
                        <li class="d-flex gap-2 mb-2"><i class="bi bi-telephone"></i>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', setting('contact_phone')) }}">{{ setting('contact_phone') }}</a>
                        </li>
                    @endif
                    @if(setting('contact_email'))
                        <li class="d-flex gap-2 mb-2"><i class="bi bi-envelope"></i>
                            <a href="mailto:{{ setting('contact_email') }}">{{ setting('contact_email') }}</a>
                        </li>
                    @endif
                    @if(setting('working_hours'))
                        <li class="d-flex gap-2"><i class="bi bi-clock"></i> {{ setting('working_hours') }}</li>
                    @endif
                </ul>

                {{-- Newsletter mini form --}}
                <form method="POST" action="{{ safe_route('frontend.newsletter.subscribe') }}" class="newsletter-form mt-3">
                    @csrf
                    <div class="input-group input-group-sm">
                        <input type="email" name="email" class="form-control" placeholder="Your email address" required>
                        <button class="btn btn-accent" type="submit" aria-label="Subscribe">
                            <i class="bi bi-send"></i>
                        </button>
                    </div>
                    @error('email')
                        <div class="text-warning small mt-1">{{ $message }}</div>
                    @enderror
                </form>
            </div>
        </div>

        <div class="footer-bottom border-top py-3 d-flex flex-wrap justify-content-between align-items-center gap-2">
            <span class="small footer-text">
                {{ str_replace('{year}', date('Y'), setting('footer_copyright', '© '.date('Y').' '.setting('site_name'))) }}
            </span>
            <div class="d-flex gap-3 small">
                @foreach(\App\Models\Page::query()->active()->where('show_in_footer', true)->ordered()->get(['id', 'title', 'slug']) as $footerPage)
                    <a href="{{ safe_route('frontend.page', $footerPage) }}" class="footer-text text-decoration-none">{{ $footerPage->title }}</a>
                @endforeach
            </div>
        </div>
    </div>
</footer>

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
