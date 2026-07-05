<?php

namespace App\Policies;

use App\Models\User;

/**
 * User-management rules on top of route-level permission middleware:
 * only super-admins manage other admins, and nobody deletes themselves.
 */
class UserPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->can('users.view');
    }

    public function create(User $user): bool
    {
        return $user->can('users.create');
    }

    public function update(User $user, User $target): bool
    {
        // Only super-admins may edit other super-admins
        if ($target->hasRole('super-admin') && ! $user->hasRole('super-admin')) {
            return false;
        }

        return $user->can('users.edit');
    }

    public function delete(User $user, User $target): bool
    {
        // Never allow self-deletion or deleting a super-admin as non-super-admin
        if ($user->is($target)) {
            return false;
        }

        if ($target->hasRole('super-admin') && ! $user->hasRole('super-admin')) {
            return false;
        }

        return $user->can('users.delete');
    }
}
