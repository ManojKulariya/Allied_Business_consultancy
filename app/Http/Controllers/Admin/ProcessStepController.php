<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\ProcessStepRequest;
use App\Services\Admin\ProcessStepService;

class ProcessStepController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.process-steps';

    protected string $routePrefix = 'admin.process-steps';

    protected string $title = 'Process Step';

    protected string $permission = 'process-steps';

    protected string $storeRequest = ProcessStepRequest::class;

    protected string $updateRequest = ProcessStepRequest::class;

    public function __construct(ProcessStepService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'sort_order', 'label' => 'Step #', 'sortable' => true],
            ['key' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['key' => 'title', 'label' => 'Title'],
            ['key' => 'description', 'label' => 'Description'],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Step Title', 'required' => true, 'col' => 'col-md-8'],
            ['name' => 'sort_order', 'label' => 'Step Number', 'type' => 'number', 'default' => 1, 'col' => 'col-md-4',
                'help' => 'Determines the timeline position'],
            ['name' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['name' => 'description', 'label' => 'Description', 'type' => 'textarea', 'col' => 'col-12'],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
