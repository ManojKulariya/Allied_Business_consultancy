<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class HomeSection extends Model
{
    use HasFactory;
    use HasStatus;
    use LogsActivity;

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'data' => 'array',
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'title', 'status', 'sort_order'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName('HomeSection');
    }

    /**
     * Ordered, active sections for the public homepage (cached).
     */
    public static function forHomepage(): \Illuminate\Support\Collection
    {
        return Cache::rememberForever('home_sections.active', function () {
            return static::query()->active()->orderBy('sort_order')->get();
        });
    }

    /**
     * Get a value from the flexible data JSON column.
     */
    public function dataValue(string $key, mixed $default = null): mixed
    {
        return data_get($this->data, $key, $default);
    }

    protected static function booted(): void
    {
        static::saved(fn () => Cache::forget('home_sections.active'));
        static::deleted(fn () => Cache::forget('home_sections.active'));
    }
}
