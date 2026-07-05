<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobApplication extends Model
{
    use HasFactory;
    use SoftDeletes;

    public const STATUSES = ['pending', 'reviewed', 'shortlisted', 'rejected', 'hired'];

    protected $guarded = ['id'];

    public function career(): BelongsTo
    {
        return $this->belongsTo(Career::class);
    }

    /**
     * Bootstrap badge class for the application status.
     */
    public function getStatusBadgeAttribute(): string
    {
        return match ($this->application_status) {
            'pending' => 'bg-warning',
            'reviewed' => 'bg-info',
            'shortlisted' => 'bg-primary',
            'rejected' => 'bg-danger',
            'hired' => 'bg-success',
            default => 'bg-secondary',
        };
    }
}
