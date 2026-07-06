{{-- Featured services strip — automatic from Services marked "Featured" --}}
@php
    $featured = \App\Models\Service::query()
        ->active()
        ->featured()
        ->ordered()
        ->limit((int) $section->dataValue('limit', 4))
        ->get();
@endphp

@if($featured->isNotEmpty())
    <section class="section-pad" id="section-featured-services" style="background: var(--theme-primary);">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-end gap-3 mb-5" data-aos="fade-up">
                <div>
                    @if($section->subtitle)
                        <span class="section-eyebrow mb-2" style="color: var(--theme-accent);">{{ $section->subtitle }}</span>
                    @endif
                    <h2 class="section-title text-white mb-0">{{ $section->title }}</h2>
                </div>
                <a href="{{ safe_route('frontend.services.index') }}" class="btn btn-outline-light">
                    View All Services <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>

            <div class="row g-4">
                @foreach($featured as $service)
                    <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ $loop->index * 100 }}">
                        <a href="{{ safe_route('frontend.services.show', $service) }}"
                           class="premium-card p-4 d-block text-decoration-none h-100">
                            <span class="icon-badge mb-3"><i class="bi {{ $service->icon ?: 'bi-star' }}"></i></span>
                            <h6 class="mb-2">{{ $service->title }}</h6>
                            <p class="small mb-0" style="color: var(--theme-text);">{{ Str::limit($service->excerpt, 90) }}</p>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
