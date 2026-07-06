{{-- Top announcement bar — fully managed in Settings → Announcement Bar --}}
@if(setting('announcement_enabled') == '1' && setting('announcement_text'))
    <div class="announcement-bar py-1 px-3 text-center"
         style="background: {{ setting('announcement_bg_color', '#0B3C5D') }}; color: {{ setting('announcement_text_color', '#FFFFFF') }};">
        <span>{{ setting('announcement_text') }}</span>
        @if(setting('announcement_button_text'))
            <a href="{{ url(setting('announcement_button_url', '#')) }}"
               class="fw-semibold ms-2 text-decoration-underline"
               style="color: {{ setting('announcement_text_color', '#FFFFFF') }};">
                {{ setting('announcement_button_text') }} <i class="bi bi-arrow-right small"></i>
            </a>
        @endif
    </div>
@endif
