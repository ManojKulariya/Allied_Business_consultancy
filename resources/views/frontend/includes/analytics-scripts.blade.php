{{-- GA4 + Microsoft Clarity tracking scripts.
     Measurement ID prefers the new Analytics Settings field, falling back
     to the legacy "scripts" setting so nothing breaks for sites that
     already configured it there. --}}
@php
    $gaId = setting('ga4_measurement_id') ?: setting('google_analytics_id');
    $clarityId = setting('clarity_project_id');
    $trackingEnabled = setting('analytics_enabled', '1') && ($gaId || $clarityId);

    $ignoredIps = collect(preg_split('/\r\n|\r|\n/', (string) setting('analytics_ip_ignore')))
        ->map(fn ($ip) => trim($ip))->filter();
    $isIgnored = $ignoredIps->contains(request()->ip());

    $consentRequired = (bool) setting('analytics_cookie_consent');
@endphp

@if($trackingEnabled && ! $isIgnored)
    <script>
        (function () {
            var gaId = @json($gaId);
            var clarityId = @json($clarityId);

            window.loadAnalyticsScripts = function () {
                if (window.__analyticsLoaded) return;
                window.__analyticsLoaded = true;

                if (gaId) {
                    var gaScript = document.createElement('script');
                    gaScript.async = true;
                    gaScript.src = 'https://www.googletagmanager.com/gtag/js?id=' + gaId;
                    document.head.appendChild(gaScript);

                    window.dataLayer = window.dataLayer || [];
                    window.gtag = function () { window.dataLayer.push(arguments); };
                    window.gtag('js', new Date());
                    window.gtag('config', gaId);
                }

                if (clarityId) {
                    (function (c, l, a, r, i, t, y) {
                        c[a] = c[a] || function () { (c[a].q = c[a].q || []).push(arguments); };
                        t = l.createElement(r); t.async = 1; t.src = 'https://www.clarity.ms/tag/' + i;
                        y = l.getElementsByTagName(r)[0]; y.parentNode.insertBefore(t, y);
                    })(window, document, 'clarity', 'script', clarityId);
                }
            };

            @if($consentRequired)
                var consent = localStorage.getItem('abc_cookie_consent');
                if (consent === 'accepted') {
                    window.loadAnalyticsScripts();
                } else if (consent !== 'declined') {
                    document.addEventListener('DOMContentLoaded', function () {
                        var banner = document.createElement('div');
                        banner.id = 'cookieConsentBanner';
                        banner.style.cssText = 'position:fixed;bottom:0;left:0;right:0;z-index:2000;background:#0B3C5D;color:#fff;padding:1rem;display:flex;flex-wrap:wrap;gap:.75rem;align-items:center;justify-content:space-between;box-shadow:0 -4px 16px rgba(0,0,0,.15);';
                        banner.innerHTML = '<span style="font-size:.9rem;max-width:640px;">We use cookies to analyse site traffic and improve your experience. By clicking Accept, you agree to our use of analytics cookies.</span>' +
                            '<span style="display:flex;gap:.5rem;flex-shrink:0;">' +
                            '<button type="button" id="cookieDecline" style="background:transparent;color:#fff;border:1px solid rgba(255,255,255,.5);border-radius:6px;padding:.4rem 1rem;font-size:.85rem;">Decline</button>' +
                            '<button type="button" id="cookieAccept" style="background:#D4AF37;color:#0B3C5D;border:none;border-radius:6px;padding:.4rem 1rem;font-weight:600;font-size:.85rem;">Accept</button>' +
                            '</span>';
                        document.body.appendChild(banner);

                        document.getElementById('cookieAccept').addEventListener('click', function () {
                            localStorage.setItem('abc_cookie_consent', 'accepted');
                            window.loadAnalyticsScripts();
                            banner.remove();
                        });
                        document.getElementById('cookieDecline').addEventListener('click', function () {
                            localStorage.setItem('abc_cookie_consent', 'declined');
                            banner.remove();
                        });
                    });
                }
            @else
                window.loadAnalyticsScripts();
            @endif
        })();
    </script>
@endif
