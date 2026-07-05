{{-- Why choose us — content-driven feature block --}}
<x-frontend.section-wrapper :section="$section">
    @if($section->content)
        <div class="row justify-content-center">
            <div class="col-lg-9 text-center text-muted">{!! $section->content !!}</div>
        </div>
    @endif
    <x-frontend.cta-buttons :section="$section" class="mt-4" />
</x-frontend.section-wrapper>
