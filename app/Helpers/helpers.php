<?php

use App\Models\Menu;
use App\Models\Setting;
use App\Models\SocialLink;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

if (! function_exists('setting')) {
    /**
     * Get a setting value by key (cached). Usage: setting('site_name', 'Default')
     */
    function setting(string $key, mixed $default = null): mixed
    {
        $settings = Cache::rememberForever('settings.all', function () {
            return Setting::query()->pluck('value', 'key')->all();
        });

        return $settings[$key] ?? $default;
    }
}

if (! function_exists('settings_group')) {
    /**
     * Get all settings for a group as key => value. Usage: settings_group('footer')
     */
    function settings_group(string $group): array
    {
        return Cache::rememberForever("settings.group.{$group}", function () use ($group) {
            return Setting::query()->where('group', $group)->pluck('value', 'key')->all();
        });
    }
}

if (! function_exists('clear_settings_cache')) {
    /**
     * Flush all cached settings (called from Setting observer).
     */
    function clear_settings_cache(): void
    {
        Cache::forget('settings.all');

        foreach (Setting::query()->distinct()->pluck('group') as $group) {
            Cache::forget("settings.group.{$group}");
        }
    }
}

if (! function_exists('menu_tree')) {
    /**
     * Get a cached menu tree by location (header, footer, ...).
     */
    function menu_tree(string $location): ?Menu
    {
        return Cache::rememberForever("menu.{$location}", function () use ($location) {
            return Menu::query()
                ->active()
                ->where('location', $location)
                ->with(['items' => fn ($q) => $q->active()->whereNull('parent_id')->orderBy('sort_order'),
                    'items.children' => fn ($q) => $q->active()->orderBy('sort_order')])
                ->first();
        });
    }
}

if (! function_exists('services_menu')) {
    /**
     * Active service categories with their active services for the
     * navigation mega menu (cached; invalidated by ServicesMenuObserver).
     */
    function services_menu(): \Illuminate\Support\Collection
    {
        return Cache::rememberForever('services.menu', function () {
            return \App\Models\ServiceCategory::query()
                ->active()
                ->ordered()
                ->with(['activeServices:id,service_category_id,title,slug,sort_order'])
                ->get(['id', 'name', 'slug', 'icon', 'sort_order']);
        });
    }
}

if (! function_exists('service_url')) {
    /**
     * URL for a service in navigation. Priority:
     * dynamic detail route (future phase) > static page view > '#'.
     * Static pages live at resources/views/frontend/services/static/{slug}.blade.php
     */
    function service_url(\App\Models\Service $service): string
    {
        if (\Illuminate\Support\Facades\Route::has('frontend.services.show')) {
            return route('frontend.services.show', $service);
        }

        if (view()->exists("frontend.services.static.{$service->slug}")) {
            return route('frontend.services.static', $service->slug);
        }

        return '#';
    }
}

if (! function_exists('social_links')) {
    /**
     * Get all active social links (cached).
     */
    function social_links(): \Illuminate\Support\Collection
    {
        return Cache::rememberForever('social_links.active', function () {
            return SocialLink::query()->active()->orderBy('sort_order')->get();
        });
    }
}

if (! function_exists('uploaded_asset')) {
    /**
     * Resolve a stored file path to a public URL, with placeholder fallback.
     */
    function uploaded_asset(?string $path, string $placeholder = 'frontend/img/placeholder.svg'): string
    {
        if ($path && Storage::disk('public')->exists($path)) {
            return Storage::disk('public')->url($path);
        }

        return str_starts_with($placeholder, 'http') ? $placeholder : asset($placeholder);
    }
}

if (! function_exists('active_menu')) {
    /**
     * Return CSS class when the current route matches the given pattern(s).
     */
    function active_menu(string|array $patterns, string $class = 'active'): string
    {
        return request()->routeIs($patterns) ? $class : '';
    }
}

if (! function_exists('safe_route')) {
    /**
     * Resolve a route URL, or '#' when the route isn't registered yet
     * (module routes appear as their controllers are built).
     */
    function safe_route(string $name, mixed $parameters = []): string
    {
        return \Illuminate\Support\Facades\Route::has($name)
            ? route($name, $parameters)
            : '#';
    }
}

if (! function_exists('theme_css_vars')) {
    /**
     * Build the global CSS custom properties from theme settings.
     * Rendered into <head> by <x-theme-styles /> on the frontend.
     */
    function theme_css_vars(): string
    {
        $theme = settings_group('theme');

        $radius = $theme['theme_border_radius'] ?? '0.5rem';
        $btnRadius = match ($theme['theme_btn_style'] ?? 'rounded') {
            'pill' => '50rem',
            'square' => '0',
            default => $radius,
        };

        $vars = [
            '--theme-primary' => $theme['theme_primary_color'] ?? '#0B3C5D',
            '--theme-secondary' => $theme['theme_secondary_color'] ?? '#1F6FEB',
            '--theme-accent' => $theme['theme_accent_color'] ?? '#D4AF37',
            '--theme-bg' => $theme['theme_bg_color'] ?? '#F8FAFC',
            '--theme-heading' => $theme['theme_heading_color'] ?? '#1E293B',
            '--theme-text' => $theme['theme_text_color'] ?? '#64748B',
            '--theme-border' => $theme['theme_border_color'] ?? '#E2E8F0',
            '--theme-font-heading' => "'".($theme['theme_font_heading'] ?? 'Poppins')."', sans-serif",
            '--theme-font-body' => "'".($theme['theme_font_body'] ?? 'Inter')."', sans-serif",
            '--theme-font-size' => $theme['theme_font_size_base'] ?? '1rem',
            '--theme-radius' => $radius,
            '--theme-btn-radius' => $btnRadius,
            // Bootstrap 5.3 variable bridge
            '--bs-primary' => $theme['theme_primary_color'] ?? '#0B3C5D',
            '--bs-secondary' => $theme['theme_secondary_color'] ?? '#1F6FEB',
            '--bs-body-font-family' => "'".($theme['theme_font_body'] ?? 'Inter')."', sans-serif",
            '--bs-body-bg' => $theme['theme_bg_color'] ?? '#F8FAFC',
            '--bs-body-color' => $theme['theme_text_color'] ?? '#64748B',
            '--bs-heading-color' => $theme['theme_heading_color'] ?? '#1E293B',
            '--bs-border-color' => $theme['theme_border_color'] ?? '#E2E8F0',
            '--bs-border-radius' => $radius,
            '--bs-link-color' => $theme['theme_secondary_color'] ?? '#1F6FEB',
        ];

        return collect($vars)
            ->map(fn ($value, $key) => "{$key}: {$value};")
            ->implode(' ');
    }
}

if (! function_exists('theme_mode')) {
    /**
     * Bootstrap color mode for the <html data-bs-theme> attribute.
     */
    function theme_mode(): string
    {
        return in_array(setting('theme_mode'), ['light', 'dark', 'auto'], true)
            ? setting('theme_mode')
            : 'light';
    }
}

if (! function_exists('theme_google_fonts_url')) {
    /**
     * Google Fonts stylesheet URL for the configured heading/body fonts.
     */
    function theme_google_fonts_url(): string
    {
        $fonts = array_unique(array_filter([
            setting('theme_font_heading', 'Poppins'),
            setting('theme_font_body', 'Inter'),
        ]));

        $families = collect($fonts)
            ->map(fn (string $font) => 'family='.str_replace(' ', '+', $font).':wght@400;500;600;700')
            ->implode('&');

        return "https://fonts.googleapis.com/css2?{$families}&display=swap";
    }
}

if (! function_exists('canonical_url')) {
    /**
     * Current URL stripped of tracking query params (utm_*, gclid, fbclid)
     * so campaign links never produce duplicate canonical targets.
     */
    function canonical_url(): string
    {
        $query = collect(request()->query())
            ->reject(fn ($value, string $key) => $key === 'utm_source' || $key === 'utm_medium'
                || $key === 'utm_campaign' || $key === 'utm_term' || $key === 'utm_content'
                || $key === 'gclid' || $key === 'fbclid')
            ->all();

        return $query === [] ? url()->current() : url()->current().'?'.http_build_query($query);
    }
}

if (! function_exists('json_ld')) {
    /**
     * Encode a Schema.org array as a safe <script type="application/ld+json"> tag.
     * Centralizes the JSON_UNESCAPED_SLASHES/UNICODE flags and the escaping
     * needed to keep "@context" out of raw Blade (which treats it as a directive).
     */
    function json_ld(array $data): \Illuminate\Support\HtmlString
    {
        $json = json_encode($data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

        return new \Illuminate\Support\HtmlString('<script type="application/ld+json">'.$json.'</script>');
    }
}

if (! function_exists('business_address_schema')) {
    /**
     * Shared Schema.org PostalAddress fields — reused by the sitewide
     * Organization schema and the Contact page's LocalBusiness schema so
     * the address is hardcoded in exactly one place.
     */
    function business_address_schema(): array
    {
        return [
            '@type' => 'PostalAddress',
            'streetAddress' => 'M-02, Mezzanine Floor, Shree Amar Heights, DCM, Ajmer Road, Nirman Nagar',
            'addressLocality' => 'Jaipur',
            'addressRegion' => 'Rajasthan',
            'postalCode' => '302019',
            'addressCountry' => 'IN',
        ];
    }
}

if (! function_exists('format_bytes')) {
    /**
     * Human-readable file size.
     */
    function format_bytes(int $bytes, int $precision = 2): string
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB'];

        for ($i = 0; $bytes > 1024 && $i < count($units) - 1; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, $precision).' '.$units[$i];
    }
}
