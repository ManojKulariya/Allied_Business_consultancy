{{-- Full-width call-to-action banner --}}
<x-frontend.section-wrapper :section="$section" :heading="false">
    <div class="text-center py-3">
        <h2 class="fw-bold mb-2">{{ $section->title }}</h2>
        @if($section->subtitle)<p class="lead opacity-75 mb-4">{{ $section->subtitle }}</p>@endif
        <x-frontend.cta-buttons :section="$section" />
    </div>
</x-frontend.section-wrapper>
