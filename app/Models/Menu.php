<?php

namespace App\Models;

use App\Traits\Blameable;
use App\Traits\HasStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Menu extends Model
{
    use Blameable;
    use HasFactory;
    use HasStatus;

    protected $guarded = ['id'];

    public function items(): HasMany
    {
        return $this->hasMany(MenuItem::class);
    }

    public function rootItems(): HasMany
    {
        return $this->items()->whereNull('parent_id')->orderBy('sort_order');
    }
}
