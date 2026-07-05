<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class SeoSetting extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'no_index' => 'boolean',
        ];
    }

    /**
     * Get SEO defaults for a route (cached).
     */
    public static function forRoute(?string $routeName): ?static
    {
        if (! $routeName) {
            return null;
        }

        return Cache::rememberForever("seo.route.{$routeName}", function () use ($routeName) {
            return static::query()->where('route_name', $routeName)->first();
        });
    }

    protected static function booted(): void
    {
        static::saved(fn (SeoSetting $seo) => Cache::forget("seo.route.{$seo->route_name}"));
        static::deleted(fn (SeoSetting $seo) => Cache::forget("seo.route.{$seo->route_name}"));
    }
}
