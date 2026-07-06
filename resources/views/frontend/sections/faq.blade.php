{{-- FAQ — category tabs + accordion from the FAQs module --}}
@php
    $faqs = \App\Models\Faq::query()->active()->ordered()->get();
    $grouped = $faqs->groupBy(fn ($faq) => $faq->category ?: 'General');
@endphp

@if($faqs->isNotEmpty())
    <section class="section-pad" id="section-faq" style="background: #fff;">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                @if($section->subtitle)<span class="section-eyebrow mb-2">{{ $section->subtitle }}</span>@endif
                <h2 class="section-title">{{ $section->title }}</h2>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-9">
                    @if($grouped->count() > 1)
                        <ul class="nav nav-pills justify-content-center gap-2 mb-4" role="tablist" data-aos="fade-up">
                            @foreach($grouped as $category => $items)
                                <li class="nav-item">
                                    <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                            data-bs-toggle="pill" data-bs-target="#faq-tab-{{ Str::slug($category) }}">
                                        {{ $category }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <div class="tab-content" data-aos="fade-up">
                        @foreach($grouped as $category => $items)
                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="faq-tab-{{ Str::slug($category) }}">
                                <div class="accordion faq-accordion" id="faqAccordion-{{ Str::slug($category) }}">
                                    @foreach($items as $faq)
                                        <div class="accordion-item">
                                            <h3 class="accordion-header">
                                                <button class="accordion-button {{ $loop->first ? '' : 'collapsed' }}" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#faq-{{ $faq->id }}">
                                                    {{ $faq->question }}
                                                </button>
                                            </h3>
                                            <div id="faq-{{ $faq->id }}"
                                                 class="accordion-collapse collapse {{ $loop->first ? 'show' : '' }}"
                                                 data-bs-parent="#faqAccordion-{{ Str::slug($category) }}">
                                                <div class="accordion-body small">{!! $faq->answer !!}</div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
