{{-- Call to action banner — heading, description, button & phone from Homepage Builder --}}
<section class="section-pad py-5" id="section-cta">
    <div class="container">
        <div class="cta-section p-5" data-aos="zoom-in">
            @if($section->background_image)
                <div class="cta-bg" style="background-image: url('{{ uploaded_asset($section->background_image) }}');"></div>
            @endif
            <div class="row align-items-center position-relative g-4">
                <div class="col-lg-8">
                    <h2 class="text-white mb-2">{{ $section->title }}</h2>
                    @if($section->subtitle)<p class="text-white-50 mb-0 fs-5">{{ $section->subtitle }}</p>@endif
                    @if($section->content)<div class="text-white-50 mb-0">{!! $section->content !!}</div>@endif
                </div>
                <div class="col-lg-4 text-lg-end">
                    @if($section->cta_text)
                        <a href="{{ url($section->cta_url ?: '#') }}" class="btn btn-accent btn-lg px-4 mb-3">
                            {{ $section->cta_text }} <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    @endif
                    @if($section->dataValue('phone'))
                        <div>
                            <span class="text-white-50 small d-block">Or call us directly</span>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', $section->dataValue('phone')) }}" class="cta-phone">
                                <i class="bi bi-telephone-fill me-1"></i>{{ $section->dataValue('phone') }}
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
