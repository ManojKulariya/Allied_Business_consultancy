{{-- Hero banner — every field managed in Homepage Builder → Hero
     (title, highlight, small heading, description, buttons, images,
      floating cards, experience badge, stats, optional video) --}}
@php
    $bgDesktop = $section->background_image ? uploaded_asset($section->background_image) : null;
    $bgMobile = $section->dataValue('bg_image_mobile') ? uploaded_asset($section->dataValue('bg_image_mobile')) : null;
    $rightImage = $section->dataValue('right_image');
    $highlight = $section->dataValue('highlight_text');
    $title = $section->title ?? '';
    // Wrap the highlight phrase (if present in the title) in an accent span
    $titleHtml = $highlight && str_contains($title, $highlight)
        ? str_replace($highlight, '<span class="highlight">'.e($highlight).'</span>', e($title))
        : e($title);
@endphp

<section class="hero-section" id="section-hero">
    @if($bgDesktop)
        <div class="hero-bg {{ $bgMobile ? 'd-none d-md-block' : '' }}" style="background-image: url('{{ $bgDesktop }}');"></div>
    @endif
    @if($bgMobile)
        <div class="hero-bg d-md-none" style="background-image: url('{{ $bgMobile }}');"></div>
    @endif

    <div class="container position-relative">
        <div class="row align-items-center hero-min py-5 g-5">
            <div class="col-lg-6" data-aos="fade-right">
                @if($section->dataValue('small_heading'))
                    <span class="hero-eyebrow mb-3">
                        <i class="bi bi-award me-1 text-accent"></i> {{ $section->dataValue('small_heading') }}
                    </span>
                @endif

                <h1 class="hero-title mt-3 mb-3">{!! $titleHtml !!}</h1>

                @if($section->content)
                    <div class="hero-desc mb-4">{!! $section->content !!}</div>
                @elseif($section->subtitle)
                    <p class="hero-desc mb-4">{{ $section->subtitle }}</p>
                @endif

                <div class="d-flex flex-wrap gap-3 mb-4">
                    @if($section->cta_text)
                        <a href="{{ url($section->cta_url ?: '#') }}" class="btn btn-accent btn-lg px-4">
                            {{ $section->cta_text }} <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    @endif
                    @if($section->cta_text_2)
                        <a href="{{ url($section->cta_url_2 ?: '#') }}" class="btn btn-outline-light btn-lg px-4">
                            {{ $section->cta_text_2 }}
                        </a>
                    @endif
                    @if($section->dataValue('video_url'))
                        <a href="{{ $section->dataValue('video_url') }}" target="_blank" rel="noopener"
                           class="btn btn-link text-white text-decoration-none d-inline-flex align-items-center gap-2">
                            <span class="d-inline-flex align-items-center justify-content-center rounded-circle border border-2 border-white"
                                  style="width: 46px; height: 46px;"><i class="bi bi-play-fill fs-5"></i></span>
                            Watch Video
                        </a>
                    @endif
                </div>

                {{-- Hero statistics --}}
                @php
                    $heroStats = collect(range(1, 3))
                        ->map(fn ($i) => ['value' => $section->dataValue("stat_{$i}_value"), 'label' => $section->dataValue("stat_{$i}_label")])
                        ->filter(fn ($stat) => $stat['value']);
                @endphp
                @if($heroStats->isNotEmpty())
                    <div class="hero-stats d-flex flex-wrap gap-4 pt-3 border-top border-white border-opacity-10">
                        @foreach($heroStats as $stat)
                            <div>
                                <div class="h3 fw-bold">{{ $stat['value'] }}</div>
                                <small>{{ $stat['label'] }}</small>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>

            {{-- Right visual: image + floating cards + experience badge --}}
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="150">
                <div class="hero-media px-lg-4">
                    @if($rightImage)
                        <img src="{{ uploaded_asset($rightImage) }}" alt="{{ strip_tags($title) }}" class="img-fluid main w-100">
                    @else
                        <div class="rounded-16 d-flex align-items-center justify-content-center"
                             style="aspect-ratio: 4/3.4; background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.12);">
                            <i class="bi bi-buildings" style="font-size: 6rem; opacity: .3;"></i>
                        </div>
                    @endif

                    @if($section->dataValue('card_1_title'))
                        <div class="floating-card pos-1">
                            <span class="fc-icon"><i class="bi {{ $section->dataValue('card_1_icon', 'bi-graph-up-arrow') }}"></i></span>
                            <span>
                                <strong class="d-block small">{{ $section->dataValue('card_1_title') }}</strong>
                                <span class="text-muted small">{{ $section->dataValue('card_1_text') }}</span>
                            </span>
                        </div>
                    @endif

                    @if($section->dataValue('card_2_title'))
                        <div class="floating-card pos-2">
                            <span class="fc-icon"><i class="bi {{ $section->dataValue('card_2_icon', 'bi-people') }}"></i></span>
                            <span>
                                <strong class="d-block small">{{ $section->dataValue('card_2_title') }}</strong>
                                <span class="text-muted small">{{ $section->dataValue('card_2_text') }}</span>
                            </span>
                        </div>
                    @endif

                    @if($section->dataValue('badge_value'))
                        <div class="experience-badge">
                            <span class="num">{{ $section->dataValue('badge_value') }}</span>
                            <span class="small">{{ $section->dataValue('badge_label', 'Years of Excellence') }}</span>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
