@extends('frontend.layouts.app')

@section('content')

    {{-- ============ 1. Hero Banner ============ --}}
    <section class="service-hero py-5">
        <div class="container py-4">
            <x-breadcrumb :items="['Contact Us' => null]" />

            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <span class="hero-eyebrow mb-3"><i class="bi bi-headset me-1 text-accent"></i> We're Here to Help</span>
                    <h1 class="mt-3 mb-3">{{ setting('contact_hero_heading', "Let's Start Your Business Journey Together") }}</h1>
                    <p class="lead mb-4">{{ setting('contact_hero_description') }}</p>

                    <div class="d-flex flex-wrap gap-3">
                        <a href="{{ setting('contact_hero_cta_link', 'tel:+917300070618') }}" class="btn btn-accent btn-lg px-4">
                            <i class="bi bi-telephone-fill me-2"></i>{{ setting('contact_hero_cta_text', 'Call Now') }}
                        </a>
                        <a href="#contact-form" class="btn btn-outline-light btn-lg px-4">
                            Send a Message <i class="bi bi-arrow-down ms-1"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left" data-aos-delay="150">
                    <div class="hero-illustration">
                        <div class="ill-panel">
                            @foreach([
                                ['bi-geo-alt', 'Jaipur, Rajasthan'],
                                ['bi-telephone', setting('contact_phone', '+91 7300070618')],
                                ['bi-envelope', setting('contact_email', 'alliedbusinessconsultancy@gmail.com')],
                                ['bi-clock', setting('working_hours', 'Mon - Sat: 9:00 AM - 6:00 PM')],
                            ] as [$illIcon, $illText])
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

    {{-- ============ 2. Contact Information Cards ============ --}}
    <section class="section-pad" id="section-info-cards">
        <div class="container">
            <div class="row g-4">
                @foreach([
                    ['icon' => 'bi-telephone', 'title' => 'Call Us', 'value' => setting('contact_phone'), 'href' => 'tel:'.preg_replace('/[^0-9+]/', '', (string) setting('contact_phone'))],
                    ['icon' => 'bi-envelope', 'title' => 'Email Us', 'value' => setting('contact_email'), 'href' => 'mailto:'.setting('contact_email')],
                    ['icon' => 'bi-geo-alt', 'title' => 'Visit Our Office', 'value' => setting('contact_address'), 'href' => 'https://maps.google.com/?q='.urlencode((string) setting('contact_address'))],
                    ['icon' => 'bi-clock', 'title' => 'Business Hours', 'value' => setting('working_hours'), 'href' => null],
                ] as $i => $card)
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="{{ $i * 80 }}">
                        <div class="premium-card p-4 text-center h-100">
                            <span class="icon-badge mb-3 mx-auto"><i class="bi {{ $card['icon'] }}"></i></span>
                            <h6 class="mb-2">{{ $card['title'] }}</h6>
                            @if($card['href'])
                                <a href="{{ $card['href'] }}" class="small text-decoration-none" style="color: var(--theme-text); white-space: pre-line;" @if(str_starts_with($card['href'], 'https://maps')) target="_blank" rel="noopener" @endif>
                                    {{ $card['value'] }}
                                </a>
                            @else
                                <p class="small mb-0" style="white-space: pre-line;">{{ $card['value'] }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ============ 3. Contact Form + 4. Google Map ============ --}}
    <section class="section-pad pt-0" id="contact-form">
        <div class="container">
            <div class="row g-4 g-lg-5">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="premium-card p-4 p-md-5">
                        <span class="section-eyebrow mb-2">Get In Touch</span>
                        <h2 class="section-title" style="font-size: clamp(1.4rem, 2.6vw, 2rem);">Send Us a Message</h2>

                        @if(session('contact_success'))
                            <div class="alert alert-success d-flex align-items-center gap-2" role="alert">
                                <i class="bi bi-check-circle-fill fs-5"></i>
                                <div>{{ session('contact_success') }}</div>
                            </div>
                        @endif
                        @if($errors->contact->any())
                            <div class="alert alert-danger d-flex align-items-center gap-2" role="alert">
                                <i class="bi bi-exclamation-triangle-fill fs-5"></i>
                                <div>Please fix the errors below and try again.</div>
                            </div>
                        @endif

                        <form method="POST" action="{{ safe_route('frontend.contact.store') }}" class="premium-form">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Full Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name" class="form-control @error('name', 'contact') is-invalid @enderror" value="{{ old('name') }}" required>
                                    @error('name', 'contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Phone Number <span class="text-danger">*</span></label>
                                    <input type="tel" name="phone" class="form-control @error('phone', 'contact') is-invalid @enderror" value="{{ old('phone') }}" required>
                                    @error('phone', 'contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Email Address <span class="text-danger">*</span></label>
                                    <input type="email" name="email" class="form-control @error('email', 'contact') is-invalid @enderror" value="{{ old('email') }}" required>
                                    @error('email', 'contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label small fw-semibold">Company Name <span class="text-muted fw-normal">(Optional)</span></label>
                                    <input type="text" name="company_name" class="form-control @error('company_name', 'contact') is-invalid @enderror" value="{{ old('company_name') }}">
                                    @error('company_name', 'contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Service Interested In</label>
                                    <select name="service_interested" class="form-select @error('service_interested', 'contact') is-invalid @enderror">
                                        <option value="">Select a service…</option>
                                        @foreach($services as $service)
                                            <option value="{{ $service->title }}" @selected(old('service_interested') === $service->title)>{{ $service->title }}</option>
                                        @endforeach
                                        <option value="Other" @selected(old('service_interested') === 'Other')>Other / Not Sure Yet</option>
                                    </select>
                                    @error('service_interested', 'contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <label class="form-label small fw-semibold">Message <span class="text-danger">*</span></label>
                                    <textarea name="message" rows="4" class="form-control @error('message', 'contact') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                    @error('message', 'contact')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input type="checkbox" name="privacy" value="1" class="form-check-input @error('privacy', 'contact') is-invalid @enderror" id="privacyCheck" @checked(old('privacy'))>
                                        <label class="form-check-label small" for="privacyCheck">
                                            I agree to the <a href="{{ url('/privacy-policy') }}" target="_blank">Privacy Policy</a>.
                                        </label>
                                        @error('privacy', 'contact')<div class="invalid-feedback d-block">{{ $message }}</div>@enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary btn-lg px-4">
                                        Send Message <i class="bi bi-send ms-1"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade-left">
                    @if(setting('contact_map_embed'))
                        <div class="ratio rounded-16 overflow-hidden shadow-sm h-100" style="min-height: 420px;">
                            {!! setting('contact_map_embed') !!}
                        </div>
                    @else
                        <div class="premium-card d-flex align-items-center justify-content-center h-100" style="min-height: 420px;">
                            <span class="small">Add a Google Map embed in Settings → Contact Info</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- ============ 5. Why Choose Allied Business Consultancy ============ --}}
    @if($whyChooseItems->isNotEmpty())
        <section class="section-pad" id="section-why-choose-us" style="background: #fff;">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="section-eyebrow mb-2">The Allied Advantage</span>
                    <h2 class="section-title">Why Choose Allied Business Consultancy</h2>
                </div>

                <div class="row g-4">
                    @foreach($whyChooseItems as $item)
                        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="{{ ($loop->index % 3) * 80 }}">
                            <div class="premium-card p-4 text-center h-100"
                                 @if($item->background_color) style="background: {{ $item->background_color }};" @endif>
                                @if($item->image)
                                    <img src="{{ uploaded_asset($item->image) }}" alt="{{ $item->title }}"
                                         class="rounded-3 mb-3 w-100" style="aspect-ratio: 16/10; object-fit: cover;" loading="lazy">
                                @else
                                    <span class="icon-badge mb-3 mx-auto"><i class="bi {{ $item->icon ?: 'bi-patch-check' }}"></i></span>
                                @endif
                                <h6 class="mb-2">{{ $item->title }}</h6>
                                <p class="small mb-0">{{ $item->description }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- ============ 6. Business Consultation CTA ============ --}}
    <section class="section-pad py-5" id="section-cta">
        <div class="container">
            <div class="cta-section p-5" data-aos="zoom-in">
                <div class="row align-items-center position-relative g-4">
                    <div class="col-lg-7">
                        <h2 class="text-white mb-2">{{ setting('contact_cta_heading', 'Need Expert Business Advice?') }}</h2>
                        <p class="text-white-50 mb-0 fs-5">{{ setting('contact_cta_description') }}</p>
                    </div>
                    <div class="col-lg-5 text-lg-end d-flex flex-wrap justify-content-lg-end gap-3">
                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', (string) setting('contact_phone')) }}" class="btn btn-outline-light btn-lg px-4">
                            <i class="bi bi-telephone-fill me-2"></i>Call Now
                        </a>
                        <a href="{{ url(setting('contact_cta_button_link', '/contact-us')) }}" class="btn btn-accent btn-lg px-4">
                            {{ setting('contact_cta_button_text', 'Get Free Consultation') }} <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ============ 7. FAQ Section ============ --}}
    @if($faqs->isNotEmpty())
        @php $groupedFaqs = $faqs->groupBy(fn ($faq) => $faq->category ?: 'General'); @endphp
        <section class="section-pad" id="section-faq" style="background: #fff;">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <span class="section-eyebrow mb-2">Need Help?</span>
                    <h2 class="section-title">Frequently Asked Questions</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <ul class="nav nav-pills justify-content-center gap-2 mb-4 flex-wrap" role="tablist" data-aos="fade-up">
                            @foreach($groupedFaqs as $category => $items)
                                <li class="nav-item">
                                    <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                            data-bs-toggle="pill" data-bs-target="#contact-faq-tab-{{ Str::slug($category) }}">
                                        {{ $category }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content" data-aos="fade-up">
                            @foreach($groupedFaqs as $category => $items)
                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="contact-faq-tab-{{ Str::slug($category) }}">
                                    <div class="accordion faq-accordion" id="contactFaqAccordion-{{ Str::slug($category) }}">
                                        @foreach($items as $faq)
                                            <div class="accordion-item">
                                                <h3 class="accordion-header">
                                                    <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#contact-faq-{{ $faq->id }}">
                                                        {{ $faq->question }}
                                                    </button>
                                                </h3>
                                                <div id="contact-faq-{{ $faq->id }}"
                                                     class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                                     data-bs-parent="#contactFaqAccordion-{{ Str::slug($category) }}">
                                                    <div class="accordion-body small">{!! $faq->answer !!}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- ============ 8. Newsletter ============ --}}
    @if($newsletterSection)
        @include('frontend.sections.newsletter', ['section' => $newsletterSection])
    @endif

    {{-- ============ 9. Final CTA ============ --}}
    <section class="section-pad pt-0 pb-5">
        <div class="container">
            <div class="text-center py-4" data-aos="fade-up">
                <h3 class="mb-2">Still Have Questions?</h3>
                <p class="mb-4">Our advisory team is one call away — no obligations, just clear answers.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="{{ safe_route('frontend.services.index') }}" class="btn btn-outline-primary px-4">
                        Explore Our Services
                    </a>
                    <a href="tel:{{ preg_replace('/[^0-9+]/', '', (string) setting('contact_phone')) }}" class="btn btn-primary px-4">
                        <i class="bi bi-telephone-fill me-2"></i>{{ setting('contact_phone') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Local Business Schema (JSON-LD) --}}
    <script type="application/ld+json">
    {
        "@@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": @json(setting('site_name', config('app.name'))),
        "image": @json(setting('site_logo') ? uploaded_asset(setting('site_logo')) : null),
        "telephone": @json(setting('contact_phone')),
        "email": @json(setting('contact_email')),
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "M-02, Mezzanine Floor, Shree Amar Heights, DCM, Ajmer Road, Nirman Nagar",
            "addressLocality": "Jaipur",
            "addressRegion": "Rajasthan",
            "postalCode": "302019",
            "addressCountry": "IN"
        },
        "url": @json(route('frontend.contact')),
        "openingHours": @json(setting('working_hours'))
    }
    </script>
@endsection
