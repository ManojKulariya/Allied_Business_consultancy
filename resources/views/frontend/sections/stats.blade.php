{{-- Business statistics — animated counters from the Counters module --}}
@php $counters = \App\Models\Counter::query()->active()->ordered()->get(); @endphp

@if($counters->isNotEmpty())
    <section class="stats-section section-pad" id="section-stats"
             @if($section->background_image)
                 style="background-image: linear-gradient(rgba(11,60,93,.9), rgba(11,60,93,.9)), url('{{ uploaded_asset($section->background_image) }}'); background-size: cover; background-position: center;"
             @elseif($section->background_color)
                 style="background: {{ $section->background_color }};"
             @endif>
        <div class="container">
            @if($section->title)
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="section-title text-white">{{ $section->title }}</h2>
                    @if($section->subtitle)<p class="text-white-50">{{ $section->subtitle }}</p>@endif
                </div>
            @endif

            <div class="row g-4 text-center">
                @foreach($counters as $counter)
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 4) * 100 }}">
                        @if($counter->icon)
                            <div class="stat-icon-lg mb-2"><i class="bi {{ $counter->icon }}"></i></div>
                        @endif
                        <div class="stat-value">
                            @if($counter->prefix)<span class="affix">{{ $counter->prefix }}</span>@endif<span class="counter-value" data-value="{{ $counter->value }}" data-duration="{{ $counter->duration }}">0</span>@if($counter->suffix)<span class="affix">{{ $counter->suffix }}</span>@endif
                        </div>
                        <div class="text-white-50 text-uppercase small" style="letter-spacing: .08em;">{{ $counter->title }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
