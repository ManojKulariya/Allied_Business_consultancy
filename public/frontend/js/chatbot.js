(function () {
    'use strict';

    var root = document.getElementById('abcChatbot');
    if (!root) return;

    var panel = document.getElementById('abcChatbotPanel');
    var toggleBtn = document.getElementById('abcChatbotToggle');
    var closeBtn = document.getElementById('abcChatbotClose');
    var badge = document.getElementById('abcChatbotBadge');
    var messagesEl = document.getElementById('abcChatbotMessages');
    var quickRepliesEl = document.getElementById('abcChatbotQuickReplies');
    var formEl = document.getElementById('abcChatbotForm');
    var inputEl = document.getElementById('abcChatbotInput');
    var sendBtn = document.getElementById('abcChatbotSend');
    var leadForm = document.getElementById('abcChatbotLeadForm');
    var leadSubmitBtn = document.getElementById('abcLeadSubmit');
    var leadCancelBtn = document.getElementById('abcLeadCancel');

    var botName = root.dataset.botName || 'Assistant';
    var messageUrl = root.dataset.messageUrl;
    var leadUrl = root.dataset.leadUrl;
    var leadEnabled = root.dataset.leadEnabled === '1';
    var csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';

    var STORAGE_KEY = 'abc_chat_history';
    var OPENED_KEY = 'abc_chat_opened';
    var history = [];
    var isSending = false;

    function escapeHtml(text) {
        var div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function linkify(html) {
        return html.replace(/(https?:\/\/[^\s<]+)/g, '<a href="$1" target="_blank" rel="noopener">$1</a>');
    }

    function timeNow() {
        return new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });
    }

    function scrollToBottom() {
        messagesEl.scrollTop = messagesEl.scrollHeight;
    }

    function appendMessage(role, text, opts) {
        opts = opts || {};
        var wrap = document.createElement('div');
        wrap.className = 'abc-msg ' + (role === 'user' ? 'abc-msg-user' : 'abc-msg-bot');

        var avatar = document.createElement('div');
        avatar.className = 'abc-msg-avatar';
        avatar.innerHTML = role === 'user' ? '<i class="bi bi-person-fill"></i>' : '<i class="bi bi-robot"></i>';

        var col = document.createElement('div');

        var bubble = document.createElement('div');
        bubble.className = 'abc-msg-bubble';
        bubble.innerHTML = linkify(escapeHtml(text));

        var time = document.createElement('div');
        time.className = 'abc-msg-time';
        time.textContent = timeNow();

        col.appendChild(bubble);
        col.appendChild(time);
        wrap.appendChild(avatar);
        wrap.appendChild(col);
        messagesEl.appendChild(wrap);

        if (opts.offerLeadForm && leadEnabled) {
            var cta = document.createElement('button');
            cta.type = 'button';
            cta.className = 'abc-lead-cta';
            cta.innerHTML = '<i class="bi bi-headset"></i> Talk to an Expert';
            cta.addEventListener('click', showLeadForm);
            col.appendChild(cta);
        }

        scrollToBottom();

        if (role !== 'user') {
            history.push({ role: 'model', text: text });
        } else {
            history.push({ role: 'user', text: text });
        }
        history = history.slice(-20);
        persistHistory();
    }

    function showTyping() {
        var wrap = document.createElement('div');
        wrap.className = 'abc-msg abc-msg-bot';
        wrap.id = 'abcTypingIndicator';
        wrap.innerHTML = '<div class="abc-msg-avatar"><i class="bi bi-robot"></i></div>' +
            '<div class="abc-msg-bubble abc-typing"><span></span><span></span><span></span></div>';
        messagesEl.appendChild(wrap);
        scrollToBottom();
    }

    function hideTyping() {
        var el = document.getElementById('abcTypingIndicator');
        if (el) el.remove();
    }

    function persistHistory() {
        try {
            sessionStorage.setItem(STORAGE_KEY, JSON.stringify(history));
        } catch (e) { /* storage unavailable — non-fatal */ }
    }

    function restoreHistory() {
        try {
            var saved = sessionStorage.getItem(STORAGE_KEY);
            if (!saved) return false;
            var parsed = JSON.parse(saved);
            if (!Array.isArray(parsed) || !parsed.length) return false;

            parsed.forEach(function (turn) {
                var wrap = document.createElement('div');
                wrap.className = 'abc-msg ' + (turn.role === 'user' ? 'abc-msg-user' : 'abc-msg-bot');
                wrap.innerHTML = '<div class="abc-msg-avatar">' +
                    (turn.role === 'user' ? '<i class="bi bi-person-fill"></i>' : '<i class="bi bi-robot"></i>') +
                    '</div><div><div class="abc-msg-bubble">' + linkify(escapeHtml(turn.text)) + '</div></div>';
                messagesEl.appendChild(wrap);
            });

            history = parsed;
            scrollToBottom();

            return true;
        } catch (e) {
            return false;
        }
    }

    function sendMessage(text) {
        text = (text || '').trim();
        if (!text || isSending) return;

        appendMessage('user', text);
        inputEl.value = '';
        isSending = true;
        sendBtn.disabled = true;
        showTyping();

        fetch(messageUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
            },
            body: JSON.stringify({ message: text, history: history.slice(0, -1) }),
        })
            .then(function (res) { return res.json(); })
            .then(function (data) {
                hideTyping();
                appendMessage('bot', data.reply || "I'm sorry, something went wrong. Please try again.", {
                    offerLeadForm: !!data.offer_lead_form,
                });
            })
            .catch(function () {
                hideTyping();
                appendMessage('bot', "I'm having trouble connecting right now. Please call us or use the contact form.");
            })
            .finally(function () {
                isSending = false;
                sendBtn.disabled = false;
            });
    }

    function showLeadForm() {
        leadForm.classList.remove('d-none');
        quickRepliesEl.classList.add('d-none');
        formEl.classList.add('d-none');
        document.getElementById('abcLeadName').focus();
    }

    function hideLeadForm() {
        leadForm.classList.add('d-none');
        quickRepliesEl.classList.remove('d-none');
        formEl.classList.remove('d-none');
    }

    function submitLead() {
        var name = document.getElementById('abcLeadName').value.trim();
        var phone = document.getElementById('abcLeadPhone').value.trim();
        var email = document.getElementById('abcLeadEmail').value.trim();
        var service = document.getElementById('abcLeadService').value;
        var message = document.getElementById('abcLeadMessage').value.trim();

        if (!name || !phone || !email || !message) {
            appendMessage('bot', 'Please fill in your name, phone, email and message so our team can reach you.');
            return;
        }

        leadSubmitBtn.disabled = true;

        fetch(leadUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
            },
            body: JSON.stringify({ name: name, phone: phone, email: email, service_interested: service, message: message }),
        })
            .then(function (res) { return res.json(); })
            .then(function (data) {
                hideLeadForm();
                appendMessage('bot', data.message || 'Thank you! Our team will contact you shortly.');
                ['abcLeadName', 'abcLeadPhone', 'abcLeadEmail', 'abcLeadMessage'].forEach(function (id) {
                    document.getElementById(id).value = '';
                });
                document.getElementById('abcLeadService').value = '';
            })
            .catch(function () {
                appendMessage('bot', "We couldn't submit that just now — please call us directly or use the contact form.");
            })
            .finally(function () {
                leadSubmitBtn.disabled = false;
            });
    }

    function openPanel() {
        panel.classList.remove('d-none');
        badge.classList.add('d-none');
        sessionStorage.setItem(OPENED_KEY, '1');

        if (!messagesEl.children.length) {
            var restored = restoreHistory();
            if (!restored) {
                var welcome = root.dataset.welcome || ("Hi! I'm " + botName + ". How can I help you today?");
                appendMessage('bot', welcome);
            }
        }

        inputEl.focus();
    }

    function closePanel() {
        panel.classList.add('d-none');
    }

    toggleBtn.addEventListener('click', function () {
        if (panel.classList.contains('d-none')) {
            openPanel();
        } else {
            closePanel();
        }
    });

    closeBtn.addEventListener('click', closePanel);

    formEl.addEventListener('submit', function (e) {
        e.preventDefault();
        sendMessage(inputEl.value);
    });

    quickRepliesEl.addEventListener('click', function (e) {
        var btn = e.target.closest('.abc-quick-btn');
        if (!btn) return;

        var question = btn.dataset.question;

        if (/talk to expert|book consultation|contact us/i.test(question) && leadEnabled) {
            if (!messagesEl.children.length) openPanel();
            appendMessage('user', question);
            showLeadForm();
            return;
        }

        sendMessage(question);
    });

    leadSubmitBtn.addEventListener('click', submitLead);
    leadCancelBtn.addEventListener('click', hideLeadForm);

    // Proactive nudge: show the unread badge a few seconds after page load
    // if the visitor hasn't opened the chat yet this session.
    if (!sessionStorage.getItem(OPENED_KEY)) {
        setTimeout(function () {
            if (panel.classList.contains('d-none')) {
                badge.classList.remove('d-none');
            }
        }, 4000);
    }
})();
