{{-- Testimonials carousel --}}
@php
    $testimonials = \App\Models\Testimonial::query()
        ->active()
        ->ordered()
        ->limit((int) $section->dataValue('limit', 8))
        ->get();
@endphp

@if($testimonials->isNotEmpty())
    <x-frontend.section-wrapper :section="$section" class="bg-light">
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($testimonials->chunk(2) as $chunk)
                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                        <div class="row g-4 justify-content-center">
                            @foreach($chunk as $testimonial)
                                <div class="col-md-6 col-lg-5">
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body p-4">
                                            <div class="text-warning mb-2">
                                                @for($i = 1; $i <= 5; $i++)
                                                    <i class="bi {{ $i <= $testimonial->rating ? 'bi-star-fill' : 'bi-star' }}"></i>
                                                @endfor
                                            </div>
                                            <p class="card-text fst-italic">"{{ Str::limit($testimonial->content, 180) }}"</p>
                                            <div class="d-flex align-items-center gap-2 mt-3">
                                                <img src="{{ uploaded_asset($testimonial->image, 'https://ui-avatars.com/api/?name='.urlencode($testimonial->name)) }}"
                                                     class="rounded-circle" width="44" height="44" style="object-fit: cover;" alt="{{ $testimonial->name }}">
                                                <div>
                                                    <div class="fw-semibold small">{{ $testimonial->name }}</div>
                                                    <div class="text-muted" style="font-size: .78rem;">
                                                        {{ $testimonial->designation }}{{ $testimonial->company ? ', '.$testimonial->company : '' }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-sm btn-outline-primary me-1" data-bs-target="#testimonialCarousel" data-bs-slide="prev"><i class="bi bi-chevron-left"></i></button>
                <button class="btn btn-sm btn-outline-primary" data-bs-target="#testimonialCarousel" data-bs-slide="next"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
    </x-frontend.section-wrapper>
@endif
