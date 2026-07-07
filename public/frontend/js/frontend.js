/* =========================================================
   Allied Business Consultancy — Frontend JS
   AOS scroll animations, Swiper sliders, animated counters,
   sticky header state, back-to-top.
   ========================================================= */
(function ($) {
    'use strict';

    /* ---------- AOS scroll animations ---------- */
    if (typeof AOS !== 'undefined') {
        AOS.init({
            duration: 700,
            easing: 'ease-out-cubic',
            once: true,
            offset: 60,
        });
    }

    /* ---------- Sticky header shadow ---------- */
    const header = document.getElementById('siteHeader');
    const onScroll = function () {
        if (header) header.classList.toggle('scrolled', window.scrollY > 10);
        backToTop.classList.toggle('visible', window.scrollY > 500);
    };

    /* ---------- Back to top ---------- */
    const backToTop = document.getElementById('backToTop');
    backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    /* ---------- Swiper: client logos ---------- */
    if (document.querySelector('.clients-swiper') && typeof Swiper !== 'undefined') {
        new Swiper('.clients-swiper', {
            loop: true,
            autoplay: { delay: 2200, disableOnInteraction: false },
            spaceBetween: 40,
            slidesPerView: 2,
            breakpoints: {
                576: { slidesPerView: 3 },
                768: { slidesPerView: 4 },
                1200: { slidesPerView: 6 },
            },
        });
    }

    /* ---------- Swiper: testimonials ---------- */
    if (document.querySelector('.testimonials-swiper') && typeof Swiper !== 'undefined') {
        new Swiper('.testimonials-swiper', {
            loop: true,
            autoplay: { delay: 5000 },
            spaceBetween: 24,
            slidesPerView: 1,
            pagination: { el: '.testimonials-swiper .swiper-pagination', clickable: true },
            breakpoints: {
                768: { slidesPerView: 2 },
                1200: { slidesPerView: 3 },
            },
        });
    }

    /* ---------- Swiper: hero (when multiple sliders exist) ---------- */
    if (document.querySelector('.hero-swiper') && typeof Swiper !== 'undefined') {
        new Swiper('.hero-swiper', {
            loop: true,
            effect: 'fade',
            fadeEffect: { crossFade: true },
            autoplay: { delay: 6000 },
            pagination: { el: '.hero-swiper .swiper-pagination', clickable: true },
        });
    }

    /* ---------- Animated counters (IntersectionObserver) ---------- */
    const counters = document.querySelectorAll('.counter-value');

    if (counters.length && 'IntersectionObserver' in window) {
        const animate = function (el) {
            const target = parseInt(el.dataset.value, 10) || 0;
            const duration = parseInt(el.dataset.duration, 10) || 2000;
            const start = performance.now();

            const tick = function (now) {
                const progress = Math.min((now - start) / duration, 1);
                const eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
                el.textContent = Math.round(target * eased).toLocaleString();
                if (progress < 1) requestAnimationFrame(tick);
            };

            requestAnimationFrame(tick);
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    animate(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });

        counters.forEach((el) => observer.observe(el));
    }

    /* ---------- Blog: table of contents (built from post H2/H3s) ---------- */
    const postContent = document.querySelector('#postContent');
    const tocCard = document.querySelector('#tocCard');
    const tocList = document.querySelector('#tocList');

    if (postContent && tocCard && tocList) {
        const headings = postContent.querySelectorAll('h2, h3');

        if (headings.length >= 3) {
            headings.forEach(function (heading, index) {
                if (!heading.id) heading.id = 'toc-' + index + '-' + heading.textContent.trim()
                    .toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '').slice(0, 50);

                const li = document.createElement('li');
                if (heading.tagName === 'H3') li.className = 'toc-h3';

                const a = document.createElement('a');
                a.href = '#' + heading.id;
                a.textContent = heading.textContent;
                li.appendChild(a);
                tocList.appendChild(li);
            });

            tocCard.classList.remove('d-none');
        }
    }

    /* ---------- Blog: copy link share button ---------- */
    $(document).on('click', '#copyLinkBtn', function () {
        const url = $(this).data('url');
        const $btn = $(this);

        navigator.clipboard.writeText(url).then(function () {
            const original = $btn.html();
            $btn.html('<i class="bi bi-check-lg"></i>');
            setTimeout(() => $btn.html(original), 1500);
        });
    });
})(jQuery);
