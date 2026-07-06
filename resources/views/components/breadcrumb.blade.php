<nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        @foreach($crumbs as $crumb)
            @if(!$loop->last && $crumb['url'])
                <li class="breadcrumb-item"><a href="{{ $crumb['url'] }}">{{ $crumb['label'] }}</a></li>
            @else
                <li class="breadcrumb-item active" aria-current="page">{{ $crumb['label'] }}</li>
            @endif
        @endforeach
    </ol>
</nav>

<script type="application/ld+json">
{
    {{-- "@@" escapes Blade's @context directive --}}
    "@@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
        @foreach($crumbs as $crumb)
        {
            "@type": "ListItem",
            "position": {{ $loop->iteration }},
            "name": @json($crumb['label'])@if($crumb['url']),
            "item": @json($crumb['url'])
            @endif

        }@if(!$loop->last),@endif
        @endforeach
    ]
}
</script>
