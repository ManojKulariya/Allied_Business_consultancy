{{-- Global theme: Google Fonts + dynamic CSS variables from Theme Settings --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="{{ theme_google_fonts_url() }}" rel="stylesheet">

<style>
    :root { {!! theme_css_vars() !!} }

    body {
        font-family: var(--theme-font-body);
        font-size: var(--theme-font-size);
    }

    h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
        font-family: var(--theme-font-heading);
    }

    .btn {
        border-radius: var(--theme-btn-radius);
    }

    .btn-primary {
        --bs-btn-bg: var(--theme-primary);
        --bs-btn-border-color: var(--theme-primary);
        --bs-btn-hover-bg: color-mix(in srgb, var(--theme-primary) 85%, black);
        --bs-btn-hover-border-color: color-mix(in srgb, var(--theme-primary) 85%, black);
        --bs-btn-active-bg: color-mix(in srgb, var(--theme-primary) 80%, black);
    }

    .btn-outline-primary {
        --bs-btn-color: var(--theme-primary);
        --bs-btn-border-color: var(--theme-primary);
        --bs-btn-hover-bg: var(--theme-primary);
        --bs-btn-hover-border-color: var(--theme-primary);
    }

    .text-primary { color: var(--theme-primary) !important; }
    .bg-primary { background-color: var(--theme-primary) !important; }
    .text-accent { color: var(--theme-accent) !important; }
    .bg-accent { background-color: var(--theme-accent) !important; }

    .card, .form-control, .form-select, .modal-content {
        border-radius: var(--theme-radius);
    }

    a { color: var(--theme-primary); }
</style>

@if(setting('custom_css'))
    <style>{!! setting('custom_css') !!}</style>
@endif
