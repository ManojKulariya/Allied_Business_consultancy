<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $guarded = ['id'];

    /**
     * Set a setting value by key (creates if missing).
     */
    public static function set(string $key, mixed $value, string $group = 'site', string $type = 'text'): static
    {
        $setting = static::query()->updateOrCreate(
            ['key' => $key],
            ['value' => $value, 'group' => $group, 'type' => $type]
        );

        clear_settings_cache();

        return $setting;
    }
}
