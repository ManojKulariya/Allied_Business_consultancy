{{-- Hero: full-width banner with sliders (falls back to section content) --}}
@php $sliders = \App\Models\Slider::query()->active()->ordered()->get(); @endphp

@if($sliders->isNotEmpty())
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach($sliders as $slider)
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $loop->index }}"
                        class="{{ $loop->first ? 'active' : '' }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach($sliders as $slider)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}"
                     style="background-image: linear-gradient(rgba(15,23,42,.55), rgba(15,23,42,.55)), url('{{ uploaded_asset($slider->image) }}'); background-size: cover; background-position: center; min-height: 70vh;">
                    <div class="container d-flex align-items-center" style="min-height: 70vh;">
                        <div class="text-white col-lg-7 {{ ['left' => '', 'center' => 'mx-auto text-center', 'right' => 'ms-auto text-end'][$slider->text_position] ?? '' }}">
                            @if($slider->subtitle)<p class="text-uppercase small letter-spacing mb-2">{{ $slider->subtitle }}</p>@endif
                            <h1 class="display-4 fw-bold mb-3">{{ $slider->title }}</h1>
                            @if($slider->description)<p class="lead text-white-50 mb-4">{{ $slider->description }}</p>@endif
                            <div class="d-flex flex-wrap gap-2 {{ $slider->text_position === 'center' ? 'justify-content-center' : '' }}">
                                @if($slider->button_text)
                                    <a href="{{ url($slider->button_url ?: '#') }}" class="btn btn-primary btn-lg px-4">{{ $slider->button_text }}</a>
                                @endif
                                @if($slider->button_text_2)
                                    <a href="{{ url($slider->button_url_2 ?: '#') }}" class="btn btn-outline-light btn-lg px-4">{{ $slider->button_text_2 }}</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
@else
    {{-- Static hero from the section itself --}}
    <x-frontend.section-wrapper :section="$section" :heading="false" class="py-0">
        <div class="d-flex align-items-center text-center" style="min-height: 60vh;">
            <div class="mx-auto col-lg-8">
                <h1 class="display-4 fw-bold mb-3 {{ $section->background_image || $section->background_color ? '' : 'text-dark' }}">{{ $section->title }}</h1>
                @if($section->subtitle)<p class="lead mb-4">{{ $section->subtitle }}</p>@endif
                <x-frontend.cta-buttons :section="$section" />
            </div>
        </div>
    </x-frontend.section-wrapper>
@endif
