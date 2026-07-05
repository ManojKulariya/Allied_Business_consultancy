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
    function uploaded_asset(?string $path, string $placeholder = 'frontend/img/placeholder.png'): string
    {
        if ($path && Storage::disk('public')->exists($path)) {
            return Storage::disk('public')->url($path);
        }

        return asset($placeholder);
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
