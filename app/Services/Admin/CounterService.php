<?php

namespace App\Services\Admin;

use App\Models\Counter;

class CounterService extends BaseCrudService
{
    protected string $model = Counter::class;

    protected array $searchable = ['title'];

    protected array $sortable = ['sort_order', 'value', 'created_at'];

    protected string $defaultDirection = 'asc';
}
