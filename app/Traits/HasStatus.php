<?php

namespace App\Traits;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Builder;

trait HasStatus
{
    /**
     * Initialize the trait — cast status column to the Status enum.
     */
    public function initializeHasStatus(): void
    {
        $this->casts['status'] = Status::class;
    }

    /**
     * Scope: only active records.
     */
    public function scopeActive(Builder $query): Builder
    {
        return $query->where($this->getTable().'.status', Status::Active);
    }

    /**
     * Scope: only inactive records.
     */
    public function scopeInactive(Builder $query): Builder
    {
        return $query->where($this->getTable().'.status', Status::Inactive);
    }

    /**
     * Toggle the status between active and inactive.
     */
    public function toggleStatus(): bool
    {
        $this->status = $this->status === Status::Active ? Status::Inactive : Status::Active;

        return $this->save();
    }

    /**
     * Check if the record is active.
     */
    public function isActive(): bool
    {
        return $this->status === Status::Active;
    }
}
