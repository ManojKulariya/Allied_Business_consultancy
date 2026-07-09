{{-- Our process — timeline from the Process Steps module --}}
@php $steps = \App\Models\ProcessStep::query()->active()->ordered()->get(); @endphp

@if($steps->isNotEmpty())
    <section class="section-pad" id="section-process">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                @if($section->subtitle)<span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>@endif
                <h2 class="section-title">{{ $section->title }}</h2>
            </div>

            <div class="row g-4 g-lg-5 position-relative process-line">
                @foreach($steps as $step)
                    <div class="col-md-6 col-lg-{{ 12 / min(max($steps->count(), 1), 4) }}"
                         data-aos="fade-up" data-aos-delay="{{ ($loop->index % 4) * 120 }}">
                        <div class="process-step">
                            <span class="process-num">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                            @if($step->icon)
                                <div class="mt-3 fs-3" style="color: var(--theme-secondary);"><i class="bi {{ $step->icon }}"></i></div>
                            @endif
                            <h3 class="h6 mt-2 mb-2">{{ $step->title }}</h3>
                            <p class="small mb-0">{{ $step->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
