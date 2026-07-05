{{-- Client logo strip --}}
@php
    $clients = \App\Models\Client::query()
        ->active()
        ->ordered()
        ->limit((int) $section->dataValue('limit', 12))
        ->get();
@endphp

@if($clients->isNotEmpty())
    <x-frontend.section-wrapper :section="$section">
        <div class="row g-4 align-items-center justify-content-center">
            @foreach($clients as $client)
                <div class="col-4 col-md-3 col-lg-2 text-center">
                    @if($client->website)
                        <a href="{{ $client->website }}" target="_blank" rel="noopener nofollow">
                            <img src="{{ uploaded_asset($client->logo) }}" alt="{{ $client->name }}"
                                 class="img-fluid opacity-75" style="max-height: 56px; filter: grayscale(1);"
                                 onmouseover="this.style.filter='none'" onmouseout="this.style.filter='grayscale(1)'">
                        </a>
                    @else
                        <img src="{{ uploaded_asset($client->logo) }}" alt="{{ $client->name }}"
                             class="img-fluid opacity-75" style="max-height: 56px; filter: grayscale(1);">
                    @endif
                </div>
            @endforeach
        </div>
    </x-frontend.section-wrapper>
@endif
