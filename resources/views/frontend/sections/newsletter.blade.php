{{-- Newsletter signup — posts to the Newsletter module --}}
<section class="py-5" id="section-newsletter">
    <div class="container">
        <div class="newsletter-panel p-4 p-md-5" data-aos="fade-up">
            <div class="row align-items-center g-4">
                <div class="col-lg-6">
                    <span class="icon-badge mb-3"><i class="bi bi-envelope-heart"></i></span>
                    <h3 class="mb-2">{{ $section->title ?: setting('footer_newsletter_title', 'Subscribe to Our Newsletter') }}</h3>
                    <p class="mb-0">{{ $section->subtitle ?: setting('footer_newsletter_text') }}</p>
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="{{ safe_route('frontend.newsletter.subscribe') }}">
                        @csrf
                        <div class="input-group input-group-lg">
                            <span class="input-group-text bg-white"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                   placeholder="Enter your email address" aria-label="Email address" required value="{{ old('email') }}">
                            <button class="btn btn-primary px-4" type="submit">
                                Subscribe <i class="bi bi-send ms-1"></i>
                            </button>
                        </div>
                        @error('email')
                            <div class="text-danger small mt-2">{{ $message }}</div>
                        @enderror
                        <small class="d-block mt-2" style="color: var(--theme-text);">
                            <i class="bi bi-shield-check me-1"></i> We respect your privacy. Unsubscribe anytime.
                        </small>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
