{{--
    Shared wrapper for homepage sections: handles background image/color,
    optional heading block, and consistent spacing.
    Usage:
        <x-frontend.section-wrapper :section="$section">
            ...section body...
        </x-frontend.section-wrapper>
--}}
@props(['section', 'container' => true, 'heading' => true])

@php
    $styles = [];
    if ($section->background_image) {
        $styles[] = "background-image: linear-gradient(rgba(15, 23, 42, .55), rgba(15, 23, 42, .55)), url('".uploaded_asset($section->background_image)."')";
        $styles[] = 'background-size: cover';
        $styles[] = 'background-position: center';
    } elseif ($section->background_color) {
        $styles[] = "background-color: {$section->background_color}";
    }
    $isDark = $section->background_image || ($section->background_color && $section->background_color !== '#ffffff');
@endphp

<section id="section-{{ $section->section_key }}"
         {{ $attributes->merge(['class' => 'py-5 '.($isDark ? 'text-white' : '')]) }}
         @if($styles) style="{{ implode('; ', $styles) }}" @endif>
    <div class="{{ $container ? 'container' : '' }}">
        @if($heading && ($section->title || $section->subtitle))
            <div class="text-center mb-5">
                @if($section->title)
                    <h2 class="fw-bold mb-2">{{ $section->title }}</h2>
                @endif
                @if($section->subtitle)
                    <p class="{{ $isDark ? 'text-white-50' : 'text-muted' }} mb-0">{{ $section->subtitle }}</p>
                @endif
            </div>
        @endif

        {{ $slot }}
    </div>
</section>
