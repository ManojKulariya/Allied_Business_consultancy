{{-- Services grid --}}
@php
    $services = \App\Models\Service::query()
        ->active()
        ->when($section->dataValue('show_featured_only') === '1', fn ($q) => $q->featured())
        ->ordered()
        ->limit((int) $section->dataValue('limit', 6))
        ->get();
@endphp

<x-frontend.section-wrapper :section="$section" class="bg-light">
    <div class="row g-4">
        @forelse($services as $service)
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 shadow-sm text-center p-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi {{ $service->icon ?: 'bi-briefcase' }} display-6 text-primary"></i>
                        </div>
                        <h5 class="card-title">{{ $service->title }}</h5>
                        <p class="card-text text-muted small">{{ Str::limit($service->excerpt, 110) }}</p>
                        <a href="{{ safe_route('frontend.services.show', $service) }}" class="stretched-link small text-decoration-none">
                            Learn More <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center text-muted">Services coming soon.</div>
        @endforelse
    </div>
    <x-frontend.cta-buttons :section="$section" class="mt-4" />
</x-frontend.section-wrapper>
