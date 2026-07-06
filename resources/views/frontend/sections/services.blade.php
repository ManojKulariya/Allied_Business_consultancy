{{-- Services grid — cards from the Services module --}}
@php
    $services = \App\Models\Service::query()
        ->active()
        ->ordered()
        ->limit((int) $section->dataValue('limit', 6))
        ->get();
@endphp

@if($services->isNotEmpty())
    <section class="section-pad" id="section-services" style="background: #fff;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                @if($section->subtitle)<span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>@endif
                <h2 class="section-title">{{ $section->title }}</h2>
            </div>

            <div class="row g-4">
                @foreach($services as $service)
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 3) * 100 }}">
                        <div class="premium-card p-4 position-relative">
                            @if($service->is_featured)
                                <span class="badge position-absolute top-0 end-0 mt-3 me-3"
                                      style="background: var(--theme-accent); color: #1a1a1a;">Featured</span>
                            @endif

                            @if($service->image)
                                <img src="{{ uploaded_asset($service->image) }}" alt="{{ $service->title }}"
                                     class="rounded-3 mb-3 w-100" style="aspect-ratio: 16/9; object-fit: cover;" loading="lazy">
                            @else
                                <span class="icon-badge mb-3"><i class="bi {{ $service->icon ?: 'bi-briefcase' }}"></i></span>
                            @endif

                            <h5 class="mb-2">{{ $service->title }}</h5>
                            <p class="small mb-3">{{ Str::limit($service->excerpt, 120) }}</p>
                            <a href="{{ safe_route('frontend.services.show', $service) }}" class="card-link">
                                Learn More <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            @if($section->cta_text)
                <div class="text-center mt-5" data-aos="fade-up">
                    <a href="{{ url($section->cta_url ?: '/services') }}" class="btn btn-primary px-4">
                        {{ $section->cta_text }} <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            @endif
        </div>
    </section>
@endif
