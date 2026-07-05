{{--
    Renders a section's CTA button pair (if configured).
    Usage: <x-frontend.cta-buttons :section="$section" />
--}}
@props(['section', 'align' => 'center'])

@if($section->cta_text || $section->cta_text_2)
    <div class="d-flex flex-wrap gap-2 justify-content-{{ $align }} {{ $attributes->get('class') }}">
        @if($section->cta_text)
            <a href="{{ url($section->cta_url ?: '#') }}" class="btn btn-primary btn-lg px-4">
                {{ $section->cta_text }}
            </a>
        @endif
        @if($section->cta_text_2)
            <a href="{{ url($section->cta_url_2 ?: '#') }}" class="btn btn-outline-light btn-lg px-4">
                {{ $section->cta_text_2 }}
            </a>
        @endif
    </div>
@endif
