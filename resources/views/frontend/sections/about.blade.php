{{-- About — heading, description, image, mission, vision, features,
     experience & signature all from Homepage Builder → About --}}
<section class="section-pad" id="section-about">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="position-relative">
                    @if($section->background_image)
                        <img src="{{ uploaded_asset($section->background_image) }}" alt="{{ $section->title }}"
                             class="img-fluid rounded-16 shadow" loading="lazy">
                    @else
                        <div class="rounded-16 bg-soft d-flex align-items-center justify-content-center" style="min-height: 420px;">
                            <i class="bi bi-buildings display-1" style="color: var(--theme-secondary); opacity: .35;"></i>
                        </div>
                    @endif

                    @if($section->dataValue('experience_value'))
                        <div class="experience-badge" style="bottom: 24px; left: -16px;">
                            <span class="num">{{ $section->dataValue('experience_value') }}</span>
                            <span class="small">{{ $section->dataValue('experience_label', 'Years Experience') }}</span>
                        </div>
                    @endif
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="100">
                @if($section->subtitle)
                    <span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>
                @endif
                <h2 class="section-title">{{ $section->title }}</h2>

                <div class="mb-4">{!! $section->content !!}</div>

                {{-- Mission / Vision cards --}}
                @if($section->dataValue('mission') || $section->dataValue('vision'))
                    <div class="row g-3 mb-4">
                        @if($section->dataValue('mission'))
                            <div class="col-md-6">
                                <div class="premium-card p-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-bullseye fs-4" style="color: var(--theme-secondary);"></i>
                                        <strong style="color: var(--theme-heading);">Our Mission</strong>
                                    </div>
                                    <p class="small mb-0">{{ $section->dataValue('mission') }}</p>
                                </div>
                            </div>
                        @endif
                        @if($section->dataValue('vision'))
                            <div class="col-md-6">
                                <div class="premium-card p-3 h-100">
                                    <div class="d-flex align-items-center gap-2 mb-2">
                                        <i class="bi bi-eye fs-4" style="color: var(--theme-accent);"></i>
                                        <strong style="color: var(--theme-heading);">Our Vision</strong>
                                    </div>
                                    <p class="small mb-0">{{ $section->dataValue('vision') }}</p>
                                </div>
                            </div>
                        @endif
                    </div>
                @endif

                {{-- Feature checklist (comma separated in admin) --}}
                @if($section->dataValue('features'))
                    <ul class="list-unstyled row g-2 mb-4">
                        @foreach(array_filter(array_map('trim', explode(',', $section->dataValue('features')))) as $feature)
                            <li class="col-sm-6 d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill" style="color: var(--theme-accent);"></i>
                                <span class="small fw-medium" style="color: var(--theme-heading);">{{ $feature }}</span>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <div class="d-flex flex-wrap align-items-center gap-4">
                    @if($section->cta_text)
                        <a href="{{ url($section->cta_url ?: '#') }}" class="btn btn-primary px-4">
                            {{ $section->cta_text }} <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    @endif
                    @if($section->dataValue('signature_name'))
                        <div class="d-flex align-items-center gap-3">
                            @if($section->dataValue('signature_image'))
                                <img src="{{ uploaded_asset($section->dataValue('signature_image')) }}" alt="Signature" height="46" loading="lazy">
                            @endif
                            <div>
                                <strong class="d-block" style="color: var(--theme-heading);">{{ $section->dataValue('signature_name') }}</strong>
                                <small>{{ $section->dataValue('signature_title') }}</small>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
