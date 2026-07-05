{{-- About preview --}}
<x-frontend.section-wrapper :section="$section" :heading="false">
    <div class="row align-items-center g-4">
        <div class="col-lg-6">
            @if($section->background_image)
                <img src="{{ uploaded_asset($section->background_image) }}" alt="{{ $section->title }}"
                     class="img-fluid rounded shadow">
            @else
                <div class="bg-light rounded d-flex align-items-center justify-content-center" style="min-height: 320px;">
                    <i class="bi bi-buildings display-1 text-primary opacity-50"></i>
                </div>
            @endif
        </div>
        <div class="col-lg-6">
            @if($section->subtitle)<p class="text-primary text-uppercase small fw-semibold mb-1">{{ $section->subtitle }}</p>@endif
            <h2 class="fw-bold mb-3">{{ $section->title }}</h2>
            <div class="text-muted mb-4">{!! $section->content !!}</div>
            <x-frontend.cta-buttons :section="$section" align="start" />
        </div>
    </div>
</x-frontend.section-wrapper>
