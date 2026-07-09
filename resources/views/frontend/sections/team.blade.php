{{-- Team members — from the Teams module with social overlays --}}
@php
    $members = \App\Models\Team::query()
        ->active()
        ->ordered()
        ->limit((int) $section->dataValue('limit', 4))
        ->get();
@endphp

@if($members->isNotEmpty())
    <section class="section-pad" id="section-team" style="background: #fff;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                @if($section->subtitle)<span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>@endif
                <h2 class="section-title">{{ $section->title }}</h2>
            </div>

            <div class="row g-4">
                @foreach($members as $member)
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 4) * 100 }}">
                        <div class="team-card">
                            <div class="team-photo-wrap mb-3">
                                <img src="{{ uploaded_asset($member->image, 'https://ui-avatars.com/api/?size=400&background=E2E8F0&color=0B3C5D&name='.urlencode($member->name)) }}"
                                     alt="{{ $member->name }}" loading="lazy" width="300" height="340">
                                @if($member->social_links)
                                    <div class="team-socials">
                                        @foreach(['linkedin' => 'bi-linkedin', 'twitter' => 'bi-twitter-x', 'facebook' => 'bi-facebook', 'instagram' => 'bi-instagram'] as $platform => $icon)
                                            @if(!empty($member->social_links[$platform]))
                                                <a href="{{ $member->social_links[$platform] }}" target="_blank" rel="noopener" aria-label="{{ ucfirst($platform) }}">
                                                    <i class="bi {{ $icon }}"></i>
                                                </a>
                                            @endif
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <h3 class="h6 mb-0">{{ $member->name }}</h3>
                            <small style="color: var(--theme-secondary);">{{ $member->designation }}</small>
                            @if($member->bio)
                                <p class="small mt-2 mb-0">{{ Str::limit($member->bio, 80) }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Person schema for each displayed team member --}}
    @php
        $teamPersonSchemas = $members->map(fn ($member) => [
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => $member->name,
            'jobTitle' => $member->designation,
            'image' => $member->image ? uploaded_asset($member->image) : null,
            'worksFor' => ['@type' => 'Organization', 'name' => setting('site_name', config('app.name'))],
            'sameAs' => array_values(array_filter($member->social_links ?? [])),
        ]);
    @endphp
    @foreach($teamPersonSchemas as $personSchema)
        {!! json_ld($personSchema) !!}
    @endforeach
@endif
