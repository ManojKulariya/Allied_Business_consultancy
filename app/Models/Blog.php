<?php

namespace App\Models;

use App\Traits\HasMetaFields;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Blog extends BaseModel
{
    use HasMetaFields;
    use HasSlug;

    protected function casts(): array
    {
        return [
            'tags' => 'array',
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
        ];
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    /**
     * Scope: publicly visible posts (active + published).
     */
    public function scopePublished(Builder $query): Builder
    {
        return $query->active()
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    /**
     * Scope: featured posts.
     */
    public function scopeFeatured(Builder $query): Builder
    {
        return $query->where('is_featured', true);
    }

    /**
     * Increment view counter without touching updated_at.
     */
    public function recordView(): void
    {
        $this->timestamps = false;
        $this->increment('views');
        $this->timestamps = true;
    }
}
