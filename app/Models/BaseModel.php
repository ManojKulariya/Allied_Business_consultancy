<?php

namespace App\Models;

use App\Traits\Blameable;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

/**
 * Shared base for all admin-managed content models.
 * Provides: factory, soft deletes, status scopes/toggle,
 * created_by/updated_by stamping, and activity logging.
 */
abstract class BaseModel extends Model
{
    use Blameable;
    use HasFactory;
    use HasStatus;
    use LogsActivity;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected $attributes = [
        'status' => 1, // keep in-memory default in sync with the DB default
    ];

    /**
     * Log only changed fillable attributes, skipping noisy ones.
     */
    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logExcept(['created_by', 'updated_by'])
            ->logOnlyDirty()
            ->logFillable()
            ->dontSubmitEmptyLogs()
            ->useLogName(class_basename(static::class));
    }

    /**
     * Default ordering scope for listing by sort_order.
     */
    public function scopeOrdered($query)
    {
        return $query->orderBy($this->getTable().'.sort_order')->orderByDesc($this->getKeyName());
    }
}
