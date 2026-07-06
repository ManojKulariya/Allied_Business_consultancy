{{-- Testimonials — Swiper slider from the Testimonials module --}}
@php
    $testimonials = \App\Models\Testimonial::query()
        ->active()
        ->ordered()
        ->limit((int) $section->dataValue('limit', 9))
        ->get();
@endphp

@if($testimonials->isNotEmpty())
    <section class="section-pad" id="section-testimonials">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                @if($section->subtitle)<span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>@endif
                <h2 class="section-title">{{ $section->title }}</h2>
            </div>

            <div class="swiper testimonials-swiper pb-5" data-aos="fade-up">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                        <div class="swiper-slide h-auto">
                            <div class="testimonial-card">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <span class="quote-mark">&ldquo;</span>
                                    <span class="rating-stars">
                                        @for($i = 1; $i <= 5; $i++)
                                            <i class="bi {{ $i <= $testimonial->rating ? 'bi-star-fill' : 'bi-star' }}"></i>
                                        @endfor
                                    </span>
                                </div>
                                <p class="mb-4">{{ Str::limit($testimonial->content, 220) }}</p>
                                <div class="d-flex align-items-center gap-3">
                                    <img src="{{ uploaded_asset($testimonial->image, 'https://ui-avatars.com/api/?background=0B3C5D&color=fff&name='.urlencode($testimonial->name)) }}"
                                         alt="{{ $testimonial->name }}" class="rounded-circle" width="52" height="52"
                                         style="object-fit: cover;" loading="lazy">
                                    <div class="flex-grow-1">
                                        <strong class="d-block" style="color: var(--theme-heading);">{{ $testimonial->name }}</strong>
                                        <small>{{ $testimonial->designation }}{{ $testimonial->company ? ' · '.$testimonial->company : '' }}</small>
                                    </div>
                                    @if($testimonial->video_url)
                                        <a href="{{ $testimonial->video_url }}" target="_blank" rel="noopener"
                                           class="btn btn-sm btn-outline-primary rounded-circle" title="Watch video review"
                                           style="width: 38px; height: 38px;">
                                            <i class="bi bi-play-fill"></i>
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endif
