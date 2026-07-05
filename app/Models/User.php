<?php

namespace App\Models;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    use HasRoles;
    use LogsActivity;
    use Notifiable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'avatar',
        'bio',
        'status',
        'password',
        'last_login_at',
        'last_login_ip',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'last_login_at' => 'datetime',
            'password' => 'hashed',
            'status' => Status::class,
        ];
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['name', 'email', 'phone', 'status'])
            ->logOnlyDirty()
            ->dontSubmitEmptyLogs()
            ->useLogName('User');
    }

    /**
     * Scope: only active users.
     */
    public function scopeActive($query)
    {
        return $query->where('status', Status::Active);
    }

    /**
     * Check if the user is active (used at login).
     */
    public function isActive(): bool
    {
        return $this->status === Status::Active;
    }

    /**
     * Avatar URL with generated-initials fallback.
     */
    public function getAvatarUrlAttribute(): string
    {
        if ($this->avatar) {
            return uploaded_asset($this->avatar);
        }

        return 'https://ui-avatars.com/api/?background=0D6EFD&color=fff&name='.urlencode($this->name);
    }
}
