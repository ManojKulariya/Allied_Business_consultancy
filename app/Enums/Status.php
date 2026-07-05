<?php

namespace App\Enums;

enum Status: int
{
    case Inactive = 0;
    case Active = 1;

    /**
     * Get the human-readable label for the status.
     */
    public function label(): string
    {
        return match ($this) {
            self::Inactive => 'Inactive',
            self::Active => 'Active',
        };
    }

    /**
     * Get the Bootstrap badge class for the status.
     */
    public function badge(): string
    {
        return match ($this) {
            self::Inactive => 'bg-danger',
            self::Active => 'bg-success',
        };
    }

    /**
     * Get all statuses as [value => label] array (for select dropdowns).
     */
    public static function options(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn (self $case) => [$case->value => $case->label()])
            ->all();
    }
}
