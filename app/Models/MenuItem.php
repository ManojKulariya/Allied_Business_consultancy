<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Route;

class MenuItem extends Model
{
    use HasFactory;
    use HasStatus;

    protected $guarded = ['id'];

    public function menu(): BelongsTo
    {
        return $this->belongsTo(Menu::class);
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(self::class, 'parent_id')->orderBy('sort_order');
    }

    public function linkable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Resolve the final URL: custom URL > named route > linked model > '#'.
     */
    public function getResolvedUrlAttribute(): string
    {
        if ($this->url) {
            return str_starts_with($this->url, 'http') ? $this->url : url($this->url);
        }

        if ($this->route_name && Route::has($this->route_name)) {
            return route($this->route_name);
        }

        if ($this->linkable) {
            return match ($this->linkable_type) {
                Page::class => route('frontend.page', $this->linkable),
                Service::class => route('frontend.services.show', $this->linkable),
                BlogCategory::class => route('frontend.blogs.category', $this->linkable),
                default => '#',
            };
        }

        return '#';
    }
}
