<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\TeamRequest;
use App\Services\Admin\TeamService;

class TeamController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.teams';

    protected string $routePrefix = 'admin.teams';

    protected string $title = 'Team Member';

    protected string $permission = 'teams';

    protected string $storeRequest = TeamRequest::class;

    protected string $updateRequest = TeamRequest::class;

    public function __construct(TeamService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'image', 'label' => 'Photo', 'type' => 'image'],
            ['key' => 'name', 'label' => 'Name', 'sortable' => true],
            ['key' => 'designation', 'label' => 'Designation'],
            ['key' => 'email', 'label' => 'Email'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'name', 'label' => 'Full Name', 'required' => true],
            ['name' => 'designation', 'label' => 'Designation', 'required' => true],
            ['name' => 'image', 'label' => 'Photo', 'type' => 'media'],
            ['name' => 'email', 'label' => 'Email', 'type' => 'email'],
            ['name' => 'phone', 'label' => 'Phone'],
            ['name' => 'bio', 'label' => 'Short Description', 'type' => 'textarea', 'col' => 'col-12'],
            ['name' => 'social_links[linkedin]', 'label' => 'LinkedIn URL', 'type' => 'url'],
            ['name' => 'social_links[twitter]', 'label' => 'Twitter / X URL', 'type' => 'url'],
            ['name' => 'social_links[facebook]', 'label' => 'Facebook URL', 'type' => 'url'],
            ['name' => 'social_links[instagram]', 'label' => 'Instagram URL', 'type' => 'url'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
