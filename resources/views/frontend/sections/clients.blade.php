{{-- Trusted clients — Swiper logo slider from the Clients module --}}
@php $clients = \App\Models\Client::query()->active()->ordered()->get(); @endphp

@if($clients->isNotEmpty())
    <section class="py-5 border-bottom" id="section-clients" style="background: #fff; border-color: var(--theme-border) !important;">
        <div class="container">
            @if($section->title)
                <p class="text-center text-uppercase small fw-semibold mb-4" style="letter-spacing: .12em; color: var(--theme-text);">
                    {{ $section->title }}
                </p>
            @endif

            <div class="swiper clients-swiper" data-aos="fade-up">
                <div class="swiper-wrapper align-items-center">
                    @foreach($clients as $client)
                        <div class="swiper-slide text-center">
                            @php
                                $logo = $client->logo
                                    ? '<img src="'.uploaded_asset($client->logo).'" alt="'.e($client->name).'" class="client-logo" loading="lazy">'
                                    : '<span class="client-logo d-inline-flex align-items-center gap-2 fw-bold fs-5" style="color: var(--theme-primary);"><i class="bi bi-building"></i>'.e($client->name).'</span>';
                            @endphp
                            @if($client->website)
                                <a href="{{ $client->website }}" target="_blank" rel="noopener nofollow"
                                   class="text-decoration-none" aria-label="{{ $client->name }}">{!! $logo !!}</a>
                            @else
                                {!! $logo !!}
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
