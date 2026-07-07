{{-- AI Chat Assistant — floating widget, lazy-interacting (the heavy AI
     call only happens once a visitor actually sends a message). --}}
@if(setting('chat_enabled', '1') && \Illuminate\Support\Facades\Route::has('frontend.chatbot.message'))
    @php
        $chatServices = \Illuminate\Support\Facades\Cache::remember('chatbot.service-options', 3600, function () {
            return \App\Models\Service::query()->active()->orderBy('title')->pluck('title');
        });
        $quickReplies = collect(preg_split('/\r\n|\r|\n/', (string) setting('chat_suggested_questions')))
            ->map(fn ($q) => trim($q))->filter()->values();
    @endphp

    <div class="abc-chatbot" id="abcChatbot"
         data-bot-name="{{ setting('chat_bot_name', 'Allied Assistant') }}"
         data-welcome="{{ setting('chat_welcome_message') }}"
         data-lead-enabled="{{ setting('chat_lead_form_enabled', '1') }}"
         data-message-url="{{ route('frontend.chatbot.message') }}"
         data-lead-url="{{ route('frontend.chatbot.lead') }}">

        <button type="button" class="abc-chatbot-toggle" id="abcChatbotToggle" aria-label="Open chat assistant">
            <i class="bi bi-chat-dots-fill"></i>
            <span class="abc-chatbot-badge d-none" id="abcChatbotBadge">1</span>
        </button>

        <div class="abc-chatbot-panel d-none" id="abcChatbotPanel" role="dialog" aria-label="Chat assistant">
            <div class="abc-chatbot-header">
                <div class="d-flex align-items-center gap-2">
                    <span class="abc-chatbot-avatar">
                        @if(setting('chat_bot_avatar'))
                            <img src="{{ uploaded_asset(setting('chat_bot_avatar')) }}" alt="">
                        @else
                            <i class="bi bi-robot"></i>
                        @endif
                    </span>
                    <div>
                        <div class="fw-semibold small">{{ setting('chat_bot_name', 'Allied Assistant') }}</div>
                        <div class="small opacity-75"><span class="abc-online-dot"></span>Online</div>
                    </div>
                </div>
                <button type="button" class="abc-chatbot-close" id="abcChatbotClose" aria-label="Close chat">
                    <i class="bi bi-x-lg"></i>
                </button>
            </div>

            <div class="abc-chatbot-messages" id="abcChatbotMessages"></div>

            <div class="abc-chatbot-quick-replies" id="abcChatbotQuickReplies">
                @foreach($quickReplies as $reply)
                    <button type="button" class="abc-quick-btn" data-question="{{ $reply }}">{{ $reply }}</button>
                @endforeach
            </div>

            <div class="abc-chatbot-lead-form d-none" id="abcChatbotLeadForm">
                <p class="small fw-semibold mb-2"><i class="bi bi-person-lines-fill me-1"></i>Talk to an Expert</p>
                <div class="mb-2">
                    <label class="form-label mb-1">Full Name</label>
                    <input type="text" class="form-control form-control-sm" id="abcLeadName" required>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1">Phone Number</label>
                    <input type="tel" class="form-control form-control-sm" id="abcLeadPhone" required>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1">Email Address</label>
                    <input type="email" class="form-control form-control-sm" id="abcLeadEmail" required>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1">Interested Service</label>
                    <select class="form-select form-select-sm" id="abcLeadService">
                        <option value="">Select a service…</option>
                        @foreach($chatServices as $title)
                            <option value="{{ $title }}">{{ $title }}</option>
                        @endforeach
                        <option value="Other">Other / Not Sure Yet</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label class="form-label mb-1">Message</label>
                    <textarea class="form-control form-control-sm" id="abcLeadMessage" rows="2" required></textarea>
                </div>
                <div class="d-flex gap-2">
                    <button type="button" class="btn btn-primary btn-sm flex-grow-1" id="abcLeadSubmit">
                        <i class="bi bi-send me-1"></i>Submit
                    </button>
                    <button type="button" class="btn btn-outline-secondary btn-sm" id="abcLeadCancel">Cancel</button>
                </div>
            </div>

            <form class="abc-chatbot-input-row" id="abcChatbotForm">
                <input type="text" id="abcChatbotInput" placeholder="Type your question…" autocomplete="off" maxlength="1000">
                <button type="submit" class="abc-chatbot-send" id="abcChatbotSend" aria-label="Send message">
                    <i class="bi bi-send-fill"></i>
                </button>
            </form>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('frontend/js/chatbot.js') }}" defer></script>
    @endpush
@endif
