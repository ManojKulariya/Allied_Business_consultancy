<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="{{ theme_mode() === 'auto' ? 'light' : theme_mode() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Dynamic SEO (per page / per model / route defaults / site defaults) --}}
    <x-seo :model="$seoModel ?? null" :title="$seoTitle ?? null" :description="$seoDescription ?? null" />

    @if(setting('site_favicon'))
        <link rel="icon" href="{{ uploaded_asset(setting('site_favicon')) }}">
    @endif

    {{-- Theme: Google Fonts + dynamic CSS variables --}}
    <x-theme-styles />

    {{-- Vendor CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">

    {{-- Site CSS --}}
    <link href="{{ asset('frontend/css/frontend.css') }}" rel="stylesheet">

    {{-- Analytics --}}
    @if(setting('google_analytics_id'))
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('google_analytics_id') }}"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() { dataLayer.push(arguments); }
            gtag('js', new Date());
            gtag('config', @json(setting('google_analytics_id')));
        </script>
    @endif
    @if(setting('head_scripts')){!! setting('head_scripts') !!}@endif

    @stack('styles')
</head>
<body>

{{-- Top announcement bar --}}
@include('frontend.includes.announcement')

{{-- Header / navigation --}}
@include('frontend.includes.header')

<main>
    @yield('content')
</main>

{{-- Footer --}}
@include('frontend.includes.footer')

{{-- Back to top --}}
<button id="backToTop" class="btn btn-primary rounded-circle shadow" aria-label="Back to top">
    <i class="bi bi-arrow-up"></i>
</button>

{{-- Vendor JS --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

{{-- Site JS --}}
<script src="{{ asset('frontend/js/frontend.js') }}"></script>

@if(setting('body_scripts')){!! setting('body_scripts') !!}@endif

@stack('scripts')
</body>
</html>
