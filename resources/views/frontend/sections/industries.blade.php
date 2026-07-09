{{-- Industries we serve — cards from the Industries module --}}
@php $industries = \App\Models\Industry::query()->active()->ordered()->get(); @endphp

@if($industries->isNotEmpty())
    <section class="section-pad" id="section-industries" style="background: #fff;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                @if($section->subtitle)<span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>@endif
                <h2 class="section-title">{{ $section->title }}</h2>
            </div>

            <div class="row g-4">
                @foreach($industries as $industry)
                    <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="{{ ($loop->index % 4) * 80 }}">
                        <div class="premium-card p-4 text-center">
                            @if($industry->image)
                                <img src="{{ uploaded_asset($industry->image) }}" alt="{{ $industry->name }}"
                                     class="rounded-circle mb-3" width="84" height="84" style="object-fit: cover;" loading="lazy">
                            @else
                                <span class="icon-badge mb-3 mx-auto"><i class="bi {{ $industry->icon ?: 'bi-diagram-3' }}"></i></span>
                            @endif
                            <h3 class="h6 mb-1">{{ $industry->name }}</h3>
                            @if($industry->description)
                                <p class="small mb-0">{{ Str::limit($industry->description, 70) }}</p>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
