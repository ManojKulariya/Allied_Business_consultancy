<title>{{ $seo['title'] }}</title>
<meta name="description" content="{{ $seo['description'] }}">
@if($seo['keywords'])
    <meta name="keywords" content="{{ $seo['keywords'] }}">
@endif
@if($seo['no_index'])
    <meta name="robots" content="noindex, nofollow">
@endif
<link rel="canonical" href="{{ $seo['canonical'] }}">

{{-- Open Graph --}}
<meta property="og:type" content="{{ $seo['og_type'] }}">
<meta property="og:site_name" content="{{ setting('site_name', config('app.name')) }}">
<meta property="og:title" content="{{ $seo['title'] }}">
<meta property="og:description" content="{{ $seo['description'] }}">
<meta property="og:url" content="{{ $seo['canonical'] }}">
@if($seo['image'])
    <meta property="og:image" content="{{ uploaded_asset($seo['image']) }}">
@endif

{{-- Twitter Card --}}
<meta name="twitter:card" content="{{ $seo['twitter_card'] }}">
<meta name="twitter:title" content="{{ $seo['title'] }}">
<meta name="twitter:description" content="{{ $seo['description'] }}">
@if($seo['image'])
    <meta name="twitter:image" content="{{ uploaded_asset($seo['image']) }}">
@endif

{{-- JSON-LD Schema --}}
@if($seo['schema'])
    <script type="application/ld+json">{!! $seo['schema'] !!}</script>
@endif
