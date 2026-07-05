<?php

namespace App\Observers;

use App\Models\Setting;

class SettingObserver
{
    public function saved(Setting $setting): void
    {
        clear_settings_cache();
    }

    public function deleted(Setting $setting): void
    {
        clear_settings_cache();
    }
}
