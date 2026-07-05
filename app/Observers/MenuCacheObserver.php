<?php

namespace App\Observers;

use App\Models\Menu;
use App\Models\MenuItem;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

/**
 * Flush cached menu trees whenever a Menu or MenuItem changes.
 */
class MenuCacheObserver
{
    public function saved(Model $model): void
    {
        $this->flush($model);
    }

    public function deleted(Model $model): void
    {
        $this->flush($model);
    }

    private function flush(Model $model): void
    {
        $menu = $model instanceof MenuItem ? $model->menu : $model;

        if ($menu instanceof Menu) {
            Cache::forget("menu.{$menu->location}");
        }
    }
}
