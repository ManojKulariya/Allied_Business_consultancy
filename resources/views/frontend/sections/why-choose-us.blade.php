{{-- Why choose us — dynamic cards from the Why Choose Us module --}}
@php $items = \App\Models\WhyChooseItem::query()->active()->ordered()->get(); @endphp

@if($items->isNotEmpty())
    <section class="section-pad" id="section-why-choose-us">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                @if($section->subtitle)<span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>@endif
                <h2 class="section-title">{{ $section->title }}</h2>
                @if($section->content)<div class="mx-auto" style="max-width: 640px;">{!! $section->content !!}</div>@endif
            </div>

            <div class="row g-4">
                @foreach($items as $item)
                    <div class="col-md-6 col-lg-3" data-aos="zoom-in" data-aos-delay="{{ ($loop->index % 4) * 80 }}">
                        <div class="premium-card p-4 text-center"
                             @if($item->background_color) style="background: {{ $item->background_color }};" @endif>
                            @if($item->image)
                                <img src="{{ uploaded_asset($item->image) }}" alt="{{ $item->title }}"
                                     class="rounded-3 mb-3 w-100" style="aspect-ratio: 16/10; object-fit: cover;" loading="lazy">
                            @else
                                <span class="icon-badge mb-3 mx-auto"><i class="bi {{ $item->icon ?: 'bi-patch-check' }}"></i></span>
                            @endif
                            <h6 class="mb-2">{{ $item->title }}</h6>
                            <p class="small mb-0">{{ $item->description }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
