{{-- Contact information strip + Google Map — data from Settings → Contact Info --}}
<section class="section-pad" id="section-contact">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            @if($section->subtitle)<span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>@endif
            <h2 class="section-title">{{ $section->title }}</h2>
        </div>

        <div class="row g-4">
            <div class="col-lg-5" data-aos="fade-right">
                <div class="d-grid gap-3">
                    @foreach([
                        ['icon' => 'bi-geo-alt', 'label' => 'Our Address', 'value' => setting('contact_address'), 'href' => null],
                        ['icon' => 'bi-telephone', 'label' => 'Phone', 'value' => setting('contact_phone'), 'href' => 'tel:'.preg_replace('/[^0-9+]/', '', (string) setting('contact_phone'))],
                        ['icon' => 'bi-envelope', 'label' => 'Email', 'value' => setting('contact_email'), 'href' => 'mailto:'.setting('contact_email')],
                        ['icon' => 'bi-clock', 'label' => 'Office Hours', 'value' => setting('working_hours'), 'href' => null],
                    ] as $info)
                        @if($info['value'])
                            <div class="premium-card p-3 d-flex align-items-center gap-3">
                                <span class="icon-badge" style="width: 52px; height: 52px; font-size: 1.3rem;">
                                    <i class="bi {{ $info['icon'] }}"></i>
                                </span>
                                <div>
                                    <small class="text-uppercase" style="letter-spacing: .08em;">{{ $info['label'] }}</small>
                                    <div class="fw-semibold" style="color: var(--theme-heading);">
                                        @if($info['href'])
                                            <a href="{{ $info['href'] }}" class="text-decoration-none" style="color: inherit;">{{ $info['value'] }}</a>
                                        @else
                                            {{ $info['value'] }}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach

                    @if($section->cta_text)
                        <a href="{{ url($section->cta_url ?: '/contact-us') }}" class="btn btn-primary mt-2">
                            {{ $section->cta_text }} <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    @endif
                </div>
            </div>

            <div class="col-lg-7" data-aos="fade-left">
                @if(setting('contact_map_embed'))
                    <div class="ratio h-100 rounded-16 overflow-hidden shadow-sm" style="min-height: 360px;">
                        {!! setting('contact_map_embed') !!}
                    </div>
                @else
                    <div class="premium-card d-flex align-items-center justify-content-center h-100" style="min-height: 360px;">
                        <span class="small">Add a Google Map embed in Settings → Contact Info</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>
