{{-- Contact strip with details + Google Map --}}
<x-frontend.section-wrapper :section="$section">
    <div class="row g-4">
        <div class="col-lg-5">
            <ul class="list-unstyled d-grid gap-3 mb-4">
                @if(setting('contact_address'))
                    <li class="d-flex gap-3">
                        <i class="bi bi-geo-alt fs-4 text-primary"></i>
                        <div>
                            <div class="fw-semibold">Address</div>
                            <div class="text-muted small">{{ setting('contact_address') }}</div>
                        </div>
                    </li>
                @endif
                @if(setting('contact_phone'))
                    <li class="d-flex gap-3">
                        <i class="bi bi-telephone fs-4 text-primary"></i>
                        <div>
                            <div class="fw-semibold">Phone</div>
                            <a href="tel:{{ preg_replace('/[^0-9+]/', '', setting('contact_phone')) }}" class="text-muted small text-decoration-none">
                                {{ setting('contact_phone') }}
                            </a>
                        </div>
                    </li>
                @endif
                @if(setting('contact_email'))
                    <li class="d-flex gap-3">
                        <i class="bi bi-envelope fs-4 text-primary"></i>
                        <div>
                            <div class="fw-semibold">Email</div>
                            <a href="mailto:{{ setting('contact_email') }}" class="text-muted small text-decoration-none">
                                {{ setting('contact_email') }}
                            </a>
                        </div>
                    </li>
                @endif
                @if(setting('working_hours'))
                    <li class="d-flex gap-3">
                        <i class="bi bi-clock fs-4 text-primary"></i>
                        <div>
                            <div class="fw-semibold">Working Hours</div>
                            <div class="text-muted small">{{ setting('working_hours') }}</div>
                        </div>
                    </li>
                @endif
            </ul>
            <a href="{{ safe_route('frontend.contact') }}" class="btn btn-primary">
                <i class="bi bi-chat-dots me-1"></i> Send Us a Message
            </a>
        </div>
        <div class="col-lg-7">
            @if(setting('contact_map_embed'))
                <div class="ratio ratio-16x9 rounded overflow-hidden shadow-sm">
                    {!! setting('contact_map_embed') !!}
                </div>
            @else
                <div class="bg-light rounded d-flex align-items-center justify-content-center h-100" style="min-height: 280px;">
                    <span class="text-muted small">Add a Google Map embed in Settings → Contact Info</span>
                </div>
            @endif
        </div>
    </div>
</x-frontend.section-wrapper>
