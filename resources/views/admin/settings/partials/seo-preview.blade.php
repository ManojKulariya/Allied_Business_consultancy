{{-- Lightweight SEO live preview: character counters + Google-style SERP
     snippet. Delegated per-form so it works for every meta_title/
     meta_description pair on the page (the SEO Settings page renders up
     to 10 forms at once, one per accordion row). --}}
@once
    <style>
        .seo-char-count { font-size: .75rem; }
        .seo-char-count.is-near { color: var(--bs-warning) !important; }
        .seo-char-count.is-over { color: var(--bs-danger) !important; }
        .seo-serp-preview {
            border: 1px solid var(--bs-border-color, #dee2e6); border-radius: .5rem;
            padding: .75rem 1rem; margin-top: .75rem; background: #fff; font-family: arial, sans-serif;
        }
        .seo-serp-preview .serp-url { color: #202124; font-size: .8rem; }
        .seo-serp-preview .serp-title { color: #1a0dab; font-size: 1.05rem; line-height: 1.3; margin: 2px 0; }
        .seo-serp-preview .serp-desc { color: #4d5156; font-size: .82rem; line-height: 1.4; }
    </style>
@endonce

<script>
document.addEventListener('DOMContentLoaded', function () {
    function attachCounter(field, limit) {
        if (!field || field.dataset.seoCounterAttached) return;
        field.dataset.seoCounterAttached = '1';

        const counter = document.createElement('div');
        counter.className = 'seo-char-count text-muted mt-1';
        field.insertAdjacentElement('afterend', counter);

        const update = function () {
            const len = field.value.length;
            counter.textContent = len + ' / ' + limit + ' characters';
            counter.classList.toggle('is-near', len > limit * 0.9 && len <= limit);
            counter.classList.toggle('is-over', len > limit);
        };
        field.addEventListener('input', update);
        update();
    }

    function attachPreview(form) {
        const titleField = form.querySelector('[name="meta_title"]');
        const descField = form.querySelector('[name="meta_description"]');
        if (!titleField || form.dataset.seoPreviewAttached) return;
        form.dataset.seoPreviewAttached = '1';

        attachCounter(titleField, 60);
        if (descField) attachCounter(descField, 160);

        const column = titleField.closest('[class*="col-"]') || titleField.parentElement;
        const preview = document.createElement('div');
        preview.className = 'seo-serp-preview';
        preview.innerHTML = '<div class="serp-url">' + window.location.origin + '/&hellip;</div>'
            + '<div class="serp-title"></div><div class="serp-desc"></div>';
        column.insertAdjacentElement('afterend', preview);

        const titleEl = preview.querySelector('.serp-title');
        const descEl = preview.querySelector('.serp-desc');
        const render = function () {
            titleEl.textContent = titleField.value || 'Page title preview';
            descEl.textContent = (descField ? descField.value : '') || 'Meta description preview will appear here as you type.';
        };
        titleField.addEventListener('input', render);
        if (descField) descField.addEventListener('input', render);
        render();
    }

    document.querySelectorAll('form').forEach(function (form) {
        if (form.querySelector('[name="meta_title"]')) attachPreview(form);
    });
});
</script>
