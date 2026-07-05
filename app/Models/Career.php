<?php

namespace App\Models;

use App\Traits\HasMetaFields;
use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Career extends BaseModel
{
    use HasMetaFields;
    use HasSlug;

    protected function casts(): array
    {
        return [
            'deadline' => 'date',
        ];
    }

    public function applications(): HasMany
    {
        return $this->hasMany(JobApplication::class);
    }

    /**
     * Scope: openings still accepting applications.
     */
    public function scopeOpen(Builder $query): Builder
    {
        return $query->active()->where(function (Builder $q) {
            $q->whereNull('deadline')->orWhereDate('deadline', '>=', today());
        });
    }

    public function isOpen(): bool
    {
        return $this->isActive() && ($this->deadline === null || $this->deadline->gte(today()));
    }
}
