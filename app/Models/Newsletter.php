<?php

namespace App\Models;

use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Newsletter extends Model
{
    use HasFactory;
    use HasStatus;
    use SoftDeletes;

    protected $guarded = ['id'];

    protected function casts(): array
    {
        return [
            'subscribed_at' => 'datetime',
            'unsubscribed_at' => 'datetime',
        ];
    }

    protected static function booted(): void
    {
        static::creating(function (Newsletter $newsletter) {
            $newsletter->token ??= Str::random(64);
            $newsletter->subscribed_at ??= now();
        });
    }

    public function unsubscribe(): bool
    {
        return $this->forceFill([
            'status' => \App\Enums\Status::Inactive,
            'unsubscribed_at' => now(),
        ])->save();
    }
}
