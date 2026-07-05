<?php

namespace App\Support;

use App\Models\User;
use Illuminate\Notifications\Notification;

/**
 * Shared "notify the right admins" logic for observers.
 * Targets active users holding the given permission (or super-admins).
 */
trait NotifiesAdmins
{
    protected function notifyAdmins(Notification $notification, string $permission): void
    {
        User::query()
            ->active()
            ->get()
            ->filter(fn (User $user) => $user->hasRole('super-admin') || $user->can($permission))
            ->each(function (User $user) use ($notification) {
                try {
                    $user->notify($notification);
                } catch (\Throwable $e) {
                    // Mail failures must never break the frontend request
                    report($e);
                }
            });
    }
}
