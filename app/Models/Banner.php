<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class Banner extends BaseModel
{
    protected function casts(): array
    {
        return [
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
        ];
    }

    /**
     * Scope: banners currently within their schedule window.
     */
    public function scopeCurrent(Builder $query): Builder
    {
        return $query->active()
            ->where(fn (Builder $q) => $q->whereNull('starts_at')->orWhere('starts_at', '<=', now()))
            ->where(fn (Builder $q) => $q->whereNull('ends_at')->orWhere('ends_at', '>=', now()));
    }

    /**
     * Scope: banners for a given position.
     */
    public function scopePosition(Builder $query, string $position): Builder
    {
        return $query->where('position', $position);
    }
}
