<title>{{ $seo['title'] }}</title>
<meta name="description" content="{{ $seo['description'] }}">
@if($seo['keywords'])
    <meta name="keywords" content="{{ $seo['keywords'] }}">
@endif
<meta name="robots" content="{{ $seo['no_index'] ? 'noindex, nofollow' : 'index, follow' }}">
<meta name="author" content="{{ $seo['author'] }}">
<meta name="theme-color" content="{{ $seo['theme_color'] }}">
@if($seo['google_site_verification'])
    <meta name="google-site-verification" content="{{ $seo['google_site_verification'] }}">
@endif
<link rel="canonical" href="{{ $seo['canonical'] }}">

{{-- Open Graph --}}
<meta property="og:type" content="{{ $seo['og_type'] }}">
<meta property="og:site_name" content="{{ setting('site_name', config('app.name')) }}">
<meta property="og:title" content="{{ $seo['title'] }}">
<meta property="og:description" content="{{ $seo['description'] }}">
<meta property="og:url" content="{{ $seo['canonical'] }}">
<meta property="og:locale" content="{{ $seo['og_locale'] }}">
@if($seo['image'])
    <meta property="og:image" content="{{ uploaded_asset($seo['image']) }}">
@endif

{{-- Twitter Card --}}
<meta name="twitter:card" content="{{ $seo['twitter_card'] }}">
@if($seo['twitter_site'])
    <meta name="twitter:site" content="{{ $seo['twitter_site'] }}">
@endif
<meta name="twitter:title" content="{{ $seo['title'] }}">
<meta name="twitter:description" content="{{ $seo['description'] }}">
@if($seo['image'])
    <meta name="twitter:image" content="{{ uploaded_asset($seo['image']) }}">
@endif

{{-- JSON-LD Schema --}}
@if($seo['schema'])
    <script type="application/ld+json">{!! $seo['schema'] !!}</script>
@endif
