<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="{{ theme_mode() === 'auto' ? 'light' : theme_mode() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- Dynamic SEO (per page / per model / route defaults / site defaults) --}}
    <x-seo :model="$seoModel ?? null" :title="$seoTitle ?? null" :description="$seoDescription ?? null" :no-index="$seoNoIndex ?? null" />

    {{-- Sitewide structured data: Organization + WebSite --}}
    @php
        $organizationSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => setting('site_name', config('app.name')),
            'url' => url('/'),
            'logo' => setting('site_logo') ? uploaded_asset(setting('site_logo')) : null,
            'telephone' => setting('contact_phone'),
            'email' => setting('contact_email'),
            'address' => business_address_schema(),
            'sameAs' => social_links()->pluck('url')->values()->all(),
        ];

        $websiteSchema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => setting('site_name', config('app.name')),
            'url' => url('/'),
        ];
    @endphp
    {!! json_ld($organizationSchema) !!}
    {!! json_ld($websiteSchema) !!}

    @if(setting('site_favicon'))
        <link rel="icon" href="{{ uploaded_asset(setting('site_favicon')) }}">
    @endif

    {{-- Theme: Google Fonts + dynamic CSS variables --}}
    <x-theme-styles />

    {{-- Performance: warm up the CDN origin serving Bootstrap/Icons/AOS/Swiper/jQuery --}}
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    {{-- Vendor CSS — Bootstrap and Bootstrap Icons stay render-blocking: icon glyphs are primary visual
         content on this theme (icon-badges throughout every section), not decoration, so deferring them
         measurably hurt LCP on icon-heavy pages when tested. AOS/Swiper genuinely are animation-only. --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" rel="stylesheet">
    </noscript>

    {{-- Site CSS — frontend.css stays blocking for the same layout-stability reason as Bootstrap above --}}
    <link href="{{ asset('frontend/css/frontend.css') }}" rel="stylesheet">
    @if(setting('chat_enabled', '1'))
        <link rel="preload" href="{{ asset('frontend/css/chatbot.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link href="{{ asset('frontend/css/chatbot.css') }}" rel="stylesheet"></noscript>
    @endif

    {{-- Analytics: GA4 + Microsoft Clarity (respects enable toggle, IP ignore list, cookie consent) --}}
    @include('frontend.includes.analytics-scripts')

    {{-- Google Tag Manager --}}
    @if(setting('google_tag_manager_id'))
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','{{ setting('google_tag_manager_id') }}');</script>
    @endif

    {{-- Facebook Pixel --}}
    @if(setting('facebook_pixel_id'))
        <script>
            !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,document,'script','https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '{{ setting('facebook_pixel_id') }}');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id={{ setting('facebook_pixel_id') }}&ev=PageView&noscript=1" alt=""></noscript>
    @endif

    @if(setting('head_scripts')){!! setting('head_scripts') !!}@endif

    @stack('styles')
</head>
<body>

{{-- Google Tag Manager (noscript) --}}
@if(setting('google_tag_manager_id'))
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id={{ setting('google_tag_manager_id') }}"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
@endif

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

{{-- AI Chat Assistant --}}
@include('frontend.includes.chatbot')

{{-- Vendor JS (defer: non-blocking fetch, execution order preserved, DOM already parsed by the time they run) --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

{{-- Site JS --}}
<script src="{{ asset('frontend/js/frontend.js') }}" defer></script>

@if(setting('body_scripts')){!! setting('body_scripts') !!}@endif

@stack('scripts')
</body>
</html>
