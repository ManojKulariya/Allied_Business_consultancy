{{-- Shared static service-page template. Each page provides a $page array:
     title, crumb, category[label,slug], eyebrow_icon, seo_title, seo_description,
     intro, chips[[icon,label]], illustration[[icon,text]], overview_heading?,
     overview[[icon,title,text]], benefits_title, benefits[[icon,title,text]],
     eligibility_title?, eligibility[[icon,title,text]], callout?,
     documents[[icon,title,sub]], process_note?, process[[icon,title,text]],
     why_title?, why?[[icon,title,text]], faqs[[q,a]], cta[heading,sub]
     (underscore prefix keeps this file out of the /services/{slug} route). --}}
@php
    View::share('seoTitle', $page['seo_title'].' — '.setting('site_name', 'Allied Business Consultancy'));
    View::share('seoDescription', $page['seo_description']);

    $whyItems = $page['why'] ?? [
        ['bi-mortarboard', 'Experienced Professionals', 'Chartered Accountants & Company Secretaries handle your filing.'],
        ['bi-tags', 'Transparent Pricing', 'One fixed fee agreed upfront — no hidden charges, ever.'],
        ['bi-lightning', 'Fast Processing', 'Same-day document processing and proactive follow-ups.'],
        ['bi-headset', 'Expert Support', 'A dedicated expert answers your questions at every step.'],
        ['bi-arrow-repeat', 'End-to-End Assistance', 'From application to post-registration compliance calendar.'],
    ];
@endphp

{{-- ============ Hero ============ --}}
<section class="service-hero py-5">
    <div class="container py-4">
        <nav aria-label="breadcrumb" data-aos="fade-down">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ safe_route('frontend.services.index') }}">Services</a></li>
                <li class="breadcrumb-item"><a href="{{ safe_route('frontend.services.category', $page['category']['slug']) }}">{{ $page['category']['label'] }}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $page['crumb'] }}</li>
            </ol>
        </nav>

        <div class="row align-items-center g-4 g-lg-5">
            <div class="col-lg-7" data-aos="fade-right">
                <span class="hero-eyebrow mb-3"><i class="bi {{ $page['eyebrow_icon'] }} me-1 text-accent"></i> {{ $page['category']['label'] }}</span>
                <h1 class="mt-3 mb-3">{{ $page['title'] }}</h1>
                <p class="lead mb-4">{{ $page['intro'] }}</p>

                <div class="d-flex flex-wrap gap-3 mb-4">
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', setting('contact_phone', '+917300070618')) }}" class="btn btn-accent btn-lg px-4">
                        <i class="bi bi-headset me-2"></i>Talk to an Expert
                    </a>
                    <a href="{{ url('/contact-us') }}" class="btn btn-outline-light btn-lg px-4">
                        Get Started <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>

                <div class="d-flex flex-wrap gap-2">
                    @foreach($page['chips'] as [$chipIcon, $chipLabel])
                        <span class="trust-chip"><i class="bi {{ $chipIcon }}"></i> {{ $chipLabel }}</span>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
                {{-- Corporate illustration composition (lightweight, no image download) --}}
                <div class="hero-illustration">
                    <div class="ill-panel">
                        @foreach($page['illustration'] as [$illIcon, $illText])
                            <div class="ill-row">
                                <span class="ill-icon"><i class="bi {{ $illIcon }}"></i></span>
                                <span class="small fw-semibold">{{ $illText }}</span>
                                @if($loop->last)
                                    <i class="bi bi-stars ill-check" style="color: var(--theme-accent);"></i>
                                @else
                                    <i class="bi bi-check-circle-fill ill-check"></i>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ Quick Overview ============ --}}
<section class="section-pad" id="overview">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-eyebrow mb-2">Quick Overview</span>
            <h2 class="section-title">{{ $page['overview_heading'] ?? 'Understand It in 30 Seconds' }}</h2>
        </div>

        <div class="row g-4">
            @foreach($page['overview'] as $i => [$ovIcon, $ovTitle, $ovText])
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="premium-card p-4">
                        <span class="icon-badge mb-3"><i class="bi {{ $ovIcon }}"></i></span>
                        <h5 class="mb-2">{{ $ovTitle }}</h5>
                        <p class="small mb-0">{{ $ovText }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ Key Benefits ============ --}}
<section class="section-pad" style="background: #fff;" id="benefits">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-eyebrow mb-2">{{ $page['benefits_eyebrow'] ?? 'Key Benefits' }}</span>
            <h2 class="section-title">{{ $page['benefits_title'] }}</h2>
        </div>

        <div class="row g-4">
            @foreach($page['benefits'] as $i => [$bIcon, $bTitle, $bText])
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 100 }}">
                    <div class="premium-card p-4 text-center">
                        <span class="icon-badge mb-3 mx-auto"><i class="bi {{ $bIcon }}"></i></span>
                        <h6 class="mb-2">{{ $bTitle }}</h6>
                        <p class="small mb-0">{{ $bText }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ Eligibility + Documents ============ --}}
<section class="section-pad" id="requirements">
    <div class="container">
        <div class="row g-4 g-lg-5 align-items-start">
            {{-- Eligibility --}}
            <div class="col-lg-5" data-aos="fade-right">
                <span class="section-eyebrow mb-2">{{ $page['eligibility_eyebrow'] ?? 'Eligibility' }}</span>
                <h2 class="section-title mb-4">{{ $page['eligibility_title'] ?? 'Who Can Register?' }}</h2>

                @foreach($page['eligibility'] as [$eIcon, $eTitle, $eText])
                    <div class="feature-tile mb-3">
                        <span class="icon-badge" style="width: 46px; height: 46px; min-width: 46px; font-size: 1.2rem;">
                            <i class="bi {{ $eIcon }}"></i>
                        </span>
                        <div>
                            <h6 class="mb-1 small fw-bold">{{ $eTitle }}</h6>
                            <p class="small mb-0 text-muted">{{ $eText }}</p>
                        </div>
                    </div>
                @endforeach

                @if(!empty($page['callout']))
                    <div class="alert d-flex align-items-center gap-2 border-0 mt-3 mb-0"
                         style="background: color-mix(in srgb, var(--theme-accent) 12%, #fff); color: var(--theme-heading);">
                        <i class="bi bi-lightbulb-fill" style="color: var(--theme-accent);"></i>
                        <span class="small fw-medium">{{ $page['callout'] }}</span>
                    </div>
                @endif
            </div>

            {{-- Documents --}}
            <div class="col-lg-7" data-aos="fade-left">
                <span class="section-eyebrow mb-2">Documents Required</span>
                <h2 class="section-title mb-4">Keep These Ready</h2>

                <div class="row g-3">
                    @foreach($page['documents'] as $i => [$dIcon, $dTitle, $dSub])
                        <div class="col-sm-6" data-aos="zoom-in" data-aos-delay="{{ ($i % 4) * 60 }}">
                            <div class="doc-card">
                                <i class="bi {{ $dIcon }}"></i>
                                <div>
                                    <div class="fw-semibold small" style="color: var(--theme-heading);">{{ $dTitle }}</div>
                                    <div class="text-muted" style="font-size: .78rem;">{{ $dSub }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ Registration Process ============ --}}
<section class="section-pad" style="background: #fff;" id="process">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-eyebrow mb-2">How It Works</span>
            <h2 class="section-title">{{ $page['process_title'] ?? 'Registration in '.count($page['process']).' Simple Steps' }}</h2>
            @if(!empty($page['process_note']))
                <p class="text-muted">{{ $page['process_note'] }}</p>
            @endif
        </div>

        <div class="row g-4 g-lg-5 justify-content-center position-relative process-line">
            @foreach($page['process'] as $i => [$pIcon, $pTitle, $pText])
                <div class="col-6 col-md-4 col-lg" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                    <div class="process-step">
                        <span class="process-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                        <div class="step-icon"><i class="bi {{ $pIcon }}"></i></div>
                        <h6>{{ $pTitle }}</h6>
                        <p class="small mb-0 text-muted">{{ $pText }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ============ Why Allied + FAQ ============ --}}
<section class="section-pad" id="why-allied">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <span class="section-eyebrow mb-2">Why Allied Business</span>
            <h2 class="section-title">{{ $page['why_title'] ?? 'Registration, Minus the Headache' }}</h2>
        </div>

        <div class="row g-4 g-lg-5 align-items-start">
            {{-- Why choose us + mini CTA --}}
            <div class="col-lg-5" data-aos="fade-right">
                @foreach($whyItems as [$wIcon, $wTitle, $wText])
                    <div class="feature-tile mb-3">
                        <span class="icon-badge" style="width: 46px; height: 46px; min-width: 46px; font-size: 1.2rem;">
                            <i class="bi {{ $wIcon }}"></i>
                        </span>
                        <div>
                            <h6 class="mb-1 small fw-bold">{{ $wTitle }}</h6>
                            <p class="small mb-0 text-muted">{{ $wText }}</p>
                        </div>
                    </div>
                @endforeach

                <div class="service-cta-card p-4 p-lg-5 mt-4">
                    <div class="accent-line mb-3"></div>
                    <h5 class="text-white mb-2">Get a Free Consultation</h5>
                    <p class="small mb-4" style="color: rgba(255,255,255,.72);">
                        Speak to a registration expert — free, no obligations.
                    </p>
                    <div class="d-grid gap-2">
                        <a href="{{ url('/contact-us') }}" class="btn btn-accent">Request a Callback</a>
                        @if(setting('contact_phone'))
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', setting('contact_phone')) }}"
                               class="btn btn-outline-light">
                                <i class="bi bi-telephone me-1"></i>{{ setting('contact_phone') }}
                            </a>
                        @endif
                    </div>
                </div>
            </div>

            {{-- FAQ --}}
            <div class="col-lg-7" data-aos="fade-left">
                <h3 class="h5 mb-3 d-flex align-items-center gap-2">
                    <i class="bi bi-question-circle" style="color: var(--theme-accent);"></i>
                    Frequently Asked Questions
                </h3>
                <div class="accordion faq-accordion" id="serviceFaq">
                    @foreach($page['faqs'] as $i => [$q, $a])
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button {{ $i === 0 ? '' : 'collapsed' }}" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#svc-faq-{{ $i }}">
                                    {{ $q }}
                                </button>
                            </h3>
                            <div id="svc-faq-{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                 data-bs-parent="#serviceFaq">
                                <div class="accordion-body small">{{ $a }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ============ Final CTA ============ --}}
<section class="pb-5">
    <div class="container">
        <div class="cta-section p-5 text-center" data-aos="zoom-in">
            <div class="position-relative">
                <h2 class="text-white mb-2">{{ $page['cta']['heading'] }}</h2>
                <p class="text-white-50 fs-5 mb-4">
                    {{ $page['cta']['sub'] ?? 'Join 250+ businesses that started their journey with Allied Business Consultancy.' }}
                </p>
                <div class="d-flex flex-wrap gap-3 justify-content-center">
                    <a href="{{ url('/contact-us') }}" class="btn btn-accent btn-lg px-4">
                        Get Free Consultation <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                    <a href="{{ url('/contact-us') }}" class="btn btn-outline-light btn-lg px-4">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ structured data for search engines (first three questions).
     Built with json_encode in a raw PHP block so the schema.org context
     key never appears literally in the template (directive collision). --}}
@php
    $faqSchemaJson = json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => collect($page['faqs'])->take(3)->map(fn ($faq) => [
            '@type' => 'Question',
            'name' => $faq[0],
            'acceptedAnswer' => ['@type' => 'Answer', 'text' => $faq[1]],
        ])->values()->all(),
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
@endphp
<script type="application/ld+json">{!! $faqSchemaJson !!}</script>
