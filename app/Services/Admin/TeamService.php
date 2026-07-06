<?php

namespace App\Services\Admin;

use App\Models\Team;

class TeamService extends BaseCrudService
{
    protected string $model = Team::class;

    protected array $searchable = ['name', 'designation', 'email'];

    protected array $sortable = ['sort_order', 'name', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = ['image' => 'teams'];
}
