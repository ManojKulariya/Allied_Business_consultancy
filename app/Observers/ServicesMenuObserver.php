<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

/**
 * Flush the cached navigation mega menu whenever a Service or
 * ServiceCategory changes — the frontend menu updates automatically.
 */
class ServicesMenuObserver
{
    public function saved(Model $model): void
    {
        Cache::forget('services.menu');
    }

    public function deleted(Model $model): void
    {
        Cache::forget('services.menu');
    }

    public function restored(Model $model): void
    {
        Cache::forget('services.menu');
    }
}
