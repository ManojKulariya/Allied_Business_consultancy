<?php

namespace App\Services\Admin;

use App\Models\ProcessStep;

class ProcessStepService extends BaseCrudService
{
    protected string $model = ProcessStep::class;

    protected array $searchable = ['title', 'description'];

    protected array $sortable = ['sort_order', 'title', 'created_at'];

    protected string $defaultDirection = 'asc';
}
