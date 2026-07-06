<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ClientRequest;
use App\Services\Admin\ClientService;

class ClientController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.clients';

    protected string $routePrefix = 'admin.clients';

    protected string $title = 'Client';

    protected string $permission = 'clients';

    protected string $storeRequest = ClientRequest::class;

    protected string $updateRequest = ClientRequest::class;

    public function __construct(ClientService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'logo', 'label' => 'Logo', 'type' => 'image'],
            ['key' => 'name', 'label' => 'Name', 'sortable' => true],
            ['key' => 'website', 'label' => 'Website'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Client Name', 'required' => true],
            ['name' => 'logo', 'label' => 'Logo', 'type' => 'media'],
            ['name' => 'website', 'label' => 'Website URL', 'type' => 'url', 'placeholder' => 'https://…'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
