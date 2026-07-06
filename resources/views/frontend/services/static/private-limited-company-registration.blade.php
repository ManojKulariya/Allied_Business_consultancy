{{-- Static service page (pre-CMS): Private Limited Company Registration.
     URL: /services/private-limited-company-registration — same URL the
     dynamic services module will use later. --}}
@extends('frontend.layouts.app')

@php
    View::share('seoTitle', 'Private Limited Company Registration — '.setting('site_name', 'Allied Business Consultancy'));
    View::share('seoDescription', 'Register your Private Limited Company online in 7–10 working days. End-to-end MCA filing, name approval, DSC, PAN & TAN — transparent fixed pricing with expert CA support.');
@endphp

@section('content')

    {{-- ============ Hero ============ --}}
    <section class="service-hero py-5">
        <div class="container py-4">
            <nav aria-label="breadcrumb" data-aos="fade-down">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ safe_route('frontend.services.index') }}">Services</a></li>
                    <li class="breadcrumb-item"><a href="{{ safe_route('frontend.services.category', 'business-registration') }}">Business Registration</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Private Limited Company</li>
                </ol>
            </nav>

            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <span class="hero-eyebrow mb-3"><i class="bi bi-building-add me-1 text-accent"></i> Business Registration</span>
                    <h1 class="mt-3 mb-3">Private Limited Company Registration</h1>
                    <p class="lead mb-4">
                        Start your company the right way. We handle everything — name approval, digital
                        signatures, MCA filing, PAN &amp; TAN — so you get your Certificate of Incorporation
                        without the paperwork stress.
                    </p>

                    <div class="d-flex flex-wrap gap-3 mb-4">
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', setting('contact_phone', '+910000000000')) }}" class="btn btn-accent btn-lg px-4">
                            <i class="bi bi-headset me-2"></i>Talk to an Expert
                        </a>
                        <a href="{{ url('/contact-us') }}" class="btn btn-outline-light btn-lg px-4">
                            Get Started <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <div class="d-flex flex-wrap gap-2">
                        <span class="trust-chip"><i class="bi bi-patch-check-fill"></i> MCA Compliant Filing</span>
                        <span class="trust-chip"><i class="bi bi-clock-history"></i> 7–10 Working Days</span>
                        <span class="trust-chip"><i class="bi bi-tags-fill"></i> Fixed Transparent Pricing</span>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
                    {{-- Corporate illustration composition (lightweight, no image download) --}}
                    <div class="hero-illustration">
                        <div class="ill-panel">
                            <div class="ill-row">
                                <span class="ill-icon"><i class="bi bi-search"></i></span>
                                <span class="small fw-semibold">Company Name Approved</span>
                                <i class="bi bi-check-circle-fill ill-check"></i>
                            </div>
                            <div class="ill-row">
                                <span class="ill-icon"><i class="bi bi-file-earmark-text"></i></span>
                                <span class="small fw-semibold">SPICe+ Form Filed with MCA</span>
                                <i class="bi bi-check-circle-fill ill-check"></i>
                            </div>
                            <div class="ill-row">
                                <span class="ill-icon"><i class="bi bi-award"></i></span>
                                <span class="small fw-semibold">Certificate of Incorporation</span>
                                <i class="bi bi-check-circle-fill ill-check"></i>
                            </div>
                            <div class="ill-row">
                                <span class="ill-icon"><i class="bi bi-rocket-takeoff"></i></span>
                                <span class="small fw-semibold">Your Company Is Live!</span>
                                <i class="bi bi-stars ill-check" style="color: var(--theme-accent);"></i>
                            </div>
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
                <h2 class="section-title">Understand It in 30 Seconds</h2>
            </div>

            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="premium-card p-4">
                        <span class="icon-badge mb-3"><i class="bi bi-question-circle"></i></span>
                        <h5 class="mb-2">What is a Private Limited Company?</h5>
                        <p class="small mb-0">
                            A company registered under the Companies Act, 2013 that exists as a separate
                            legal person. Ownership is held through shares, and the personal assets of
                            shareholders stay protected from business liabilities.
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="premium-card p-4">
                        <span class="icon-badge mb-3"><i class="bi bi-people"></i></span>
                        <h5 class="mb-2">Who should register one?</h5>
                        <p class="small mb-0">
                            Startups planning to raise investment, growing businesses ready to formalise,
                            and founders who want a credible structure that banks, investors and large
                            clients trust. Just two people are enough to begin.
                        </p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="premium-card p-4">
                        <span class="icon-badge mb-3"><i class="bi bi-graph-up-arrow"></i></span>
                        <h5 class="mb-2">Why choose this structure?</h5>
                        <p class="small mb-0">
                            It balances protection and growth: limited liability for owners, easy transfer
                            of shares, straightforward fundraising, and a professional image — the default
                            choice for serious, scalable businesses.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ Key Benefits ============ --}}
    <section class="section-pad" style="background: #fff;" id="benefits">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="section-eyebrow mb-2">Key Benefits</span>
                <h2 class="section-title">Why Founders Choose a Private Limited Company</h2>
            </div>

            <div class="row g-4">
                @foreach([
                    ['bi-shield-check', 'Limited Liability', 'Your personal assets are protected — liability is limited to the capital you invest.'],
                    ['bi-building-check', 'Separate Legal Entity', 'The company can own property, sign contracts and operate in its own name.'],
                    ['bi-cash-coin', 'Easy Fund Raising', 'The preferred structure of angel investors, VCs and banks for equity and debt funding.'],
                    ['bi-award', 'Brand Credibility', '"Pvt. Ltd." after your name builds instant trust with clients, vendors and talent.'],
                    ['bi-arrow-repeat', 'Perpetual Succession', 'The company continues to exist regardless of changes in ownership or management.'],
                    ['bi-arrow-left-right', 'Easy Ownership Transfer', 'Shares can be transferred without disturbing day-to-day business operations.'],
                ] as $i => [$icon, $title, $text])
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($i % 3) * 100 }}">
                        <div class="premium-card p-4 text-center">
                            <span class="icon-badge mb-3 mx-auto"><i class="bi {{ $icon }}"></i></span>
                            <h6 class="mb-2">{{ $title }}</h6>
                            <p class="small mb-0">{{ $text }}</p>
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
                    <span class="section-eyebrow mb-2">Eligibility</span>
                    <h2 class="section-title mb-4">Who Can Register?</h2>

                    @foreach([
                        ['bi-person-badge', 'Minimum 2 Directors', 'At least one director must be a resident of India. Directors need a DIN, which we obtain during filing.'],
                        ['bi-people', 'Minimum 2 Shareholders', 'Directors and shareholders can be the same people — two founders are enough.'],
                        ['bi-fonts', 'A Unique Company Name', 'The proposed name must not match an existing company, LLP or registered trademark.'],
                        ['bi-geo-alt', 'A Registered Office in India', 'Residential or commercial — you only need valid address proof, not owned premises.'],
                    ] as $item)
                        <div class="feature-tile mb-3">
                            <span class="icon-badge" style="width: 46px; height: 46px; min-width: 46px; font-size: 1.2rem;">
                                <i class="bi {{ $item[0] }}"></i>
                            </span>
                            <div>
                                <h6 class="mb-1 small fw-bold">{{ $item[1] }}</h6>
                                <p class="small mb-0 text-muted">{{ $item[2] }}</p>
                            </div>
                        </div>
                    @endforeach

                    <div class="alert d-flex align-items-center gap-2 border-0 mt-3 mb-0"
                         style="background: color-mix(in srgb, var(--theme-accent) 12%, #fff); color: var(--theme-heading);">
                        <i class="bi bi-lightbulb-fill" style="color: var(--theme-accent);"></i>
                        <span class="small fw-medium">No minimum capital required — you can start with any amount.</span>
                    </div>
                </div>

                {{-- Documents --}}
                <div class="col-lg-7" data-aos="fade-left">
                    <span class="section-eyebrow mb-2">Documents Required</span>
                    <h2 class="section-title mb-4">Keep These Ready</h2>

                    <div class="row g-3">
                        @foreach([
                            ['bi-credit-card-2-front', 'PAN Card', 'of all directors & shareholders'],
                            ['bi-person-vcard', 'Aadhaar Card', 'of all directors & shareholders'],
                            ['bi-file-earmark-person', 'Identity Proof', 'passport, voter ID or driving licence'],
                            ['bi-file-earmark-text', 'Address Proof', 'recent bank statement or utility bill'],
                            ['bi-image', 'Passport-Size Photos', 'of all directors'],
                            ['bi-house-door', 'Office Address Proof', 'rent agreement or ownership document'],
                            ['bi-lightning-charge', 'Office Utility Bill', 'electricity / water bill (≤ 2 months old)'],
                            ['bi-file-earmark-check', 'Owner NOC', 'if the office premises are rented'],
                        ] as $i => [$icon, $title, $sub])
                            <div class="col-sm-6" data-aos="zoom-in" data-aos-delay="{{ ($i % 4) * 60 }}">
                                <div class="doc-card">
                                    <i class="bi {{ $icon }}"></i>
                                    <div>
                                        <div class="fw-semibold small" style="color: var(--theme-heading);">{{ $title }}</div>
                                        <div class="text-muted" style="font-size: .78rem;">{{ $sub }}</div>
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
                <h2 class="section-title">Registration in 5 Simple Steps</h2>
                <p class="text-muted">Typical timeline: 7–10 working days, subject to MCA approvals</p>
            </div>

            <div class="row g-4 g-lg-5 justify-content-center position-relative process-line">
                @foreach([
                    ['bi-chat-dots', 'Free Consultation', 'We understand your business and confirm the right structure for you.'],
                    ['bi-folder-check', 'Documents & DSC', 'We collect your documents and issue digital signatures for all directors.'],
                    ['bi-search-heart', 'Name Approval', 'Your company name is reserved with MCA through SPICe+ Part A.'],
                    ['bi-file-earmark-arrow-up', 'Incorporation Filing', 'SPICe+ Part B with MOA & AOA is drafted and filed with the ROC.'],
                    ['bi-patch-check', 'Certificate Issued', 'You receive the COI with CIN, plus company PAN and TAN — ready to operate.'],
                ] as $i => [$icon, $title, $text])
                    <div class="col-6 col-md-4 col-lg" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
                        <div class="process-step">
                            <span class="process-num">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                            <div class="step-icon"><i class="bi {{ $icon }}"></i></div>
                            <h6>{{ $title }}</h6>
                            <p class="small mb-0 text-muted">{{ $text }}</p>
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
                <h2 class="section-title">Registration, Minus the Headache</h2>
            </div>

            <div class="row g-4 g-lg-5 align-items-start">
                {{-- Why choose us + mini CTA --}}
                <div class="col-lg-5" data-aos="fade-right">
                    @foreach([
                        ['bi-mortarboard', 'Experienced Professionals', 'Chartered Accountants & Company Secretaries handle your filing.'],
                        ['bi-tags', 'Transparent Pricing', 'One fixed fee agreed upfront — no hidden charges, ever.'],
                        ['bi-lightning', 'Fast Processing', 'Same-day document processing and proactive MCA follow-ups.'],
                        ['bi-headset', 'Expert Support', 'A dedicated expert answers your questions at every step.'],
                        ['bi-arrow-repeat', 'End-to-End Assistance', 'From name search to post-incorporation compliance calendar.'],
                    ] as $item)
                        <div class="feature-tile mb-3">
                            <span class="icon-badge" style="width: 46px; height: 46px; min-width: 46px; font-size: 1.2rem;">
                                <i class="bi {{ $item[0] }}"></i>
                            </span>
                            <div>
                                <h6 class="mb-1 small fw-bold">{{ $item[1] }}</h6>
                                <p class="small mb-0 text-muted">{{ $item[2] }}</p>
                            </div>
                        </div>
                    @endforeach

                    <div class="service-cta-card p-4 p-lg-5 mt-4">
                        <div class="accent-line mb-3"></div>
                        <h5 class="text-white mb-2">Get a Free Consultation</h5>
                        <p class="small mb-4" style="color: rgba(255,255,255,.72);">
                            Speak to a company registration expert — free, no obligations.
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
                    <div class="accordion faq-accordion" id="plcFaq">
                        @foreach([
                            ['How long does private limited company registration take?', 'Typically 7–10 working days from the day we receive your complete documents, depending on MCA name approval and processing times.'],
                            ['Is there a minimum capital requirement?', 'No. The Companies Act does not prescribe any minimum paid-up capital — you can start your company with any amount you choose.'],
                            ['Can the same two people be both directors and shareholders?', 'Yes. Two founders acting as both directors and shareholders is the most common setup for new companies.'],
                            ['Can NRIs or foreign nationals become directors?', 'Yes, provided at least one director on the board is a resident of India. Foreign shareholding is also permitted, subject to FDI rules for your sector.'],
                            ['What do I receive after incorporation?', 'The Certificate of Incorporation with your CIN, company PAN and TAN, MOA & AOA, DINs for directors and their digital signature certificates.'],
                            ['What compliances apply after registration?', 'Key ones include opening a company bank account, appointing an auditor within 30 days, annual ROC filings and income tax returns. We provide a full compliance calendar and can manage it for you.'],
                            ['Can I convert my company to another structure later?', 'Yes. A private limited company can later be converted into a public limited company or an LLP by following the prescribed MCA procedures.'],
                            ['Can a salaried person become a director?', 'Generally yes — the Companies Act does not restrict it. Do check your employment agreement for any clause requiring employer consent.'],
                        ] as $i => [$q, $a])
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button {{ $i === 0 ? '' : 'collapsed' }}" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#plc-faq-{{ $i }}">
                                        {{ $q }}
                                    </button>
                                </h3>
                                <div id="plc-faq-{{ $i }}" class="accordion-collapse collapse {{ $i === 0 ? 'show' : '' }}"
                                     data-bs-parent="#plcFaq">
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
                    <h2 class="text-white mb-2">Ready to Register Your Private Limited Company?</h2>
                    <p class="text-white-50 fs-5 mb-4">
                        Join 250+ businesses that started their journey with Allied Business Consultancy.
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

    {{-- FAQ structured data for search engines --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {"@type": "Question", "name": "How long does private limited company registration take?", "acceptedAnswer": {"@type": "Answer", "text": "Typically 7–10 working days from receipt of complete documents, depending on MCA processing times."}},
            {"@type": "Question", "name": "Is there a minimum capital requirement?", "acceptedAnswer": {"@type": "Answer", "text": "No — the Companies Act does not prescribe any minimum paid-up capital."}},
            {"@type": "Question", "name": "What do I receive after incorporation?", "acceptedAnswer": {"@type": "Answer", "text": "Certificate of Incorporation with CIN, company PAN and TAN, MOA & AOA, DINs and digital signatures for directors."}}
        ]
    }
    </script>
@endsection
