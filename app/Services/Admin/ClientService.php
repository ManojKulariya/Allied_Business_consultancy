<?php

namespace App\Services\Admin;

use App\Models\Client;

class ClientService extends BaseCrudService
{
    protected string $model = Client::class;

    protected array $searchable = ['name', 'website'];

    protected array $sortable = ['sort_order', 'name', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = ['logo' => 'clients'];
}
