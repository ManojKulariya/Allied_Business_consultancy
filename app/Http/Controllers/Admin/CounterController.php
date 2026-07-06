<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CounterRequest;
use App\Services\Admin\CounterService;

class CounterController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.counters';

    protected string $routePrefix = 'admin.counters';

    protected string $title = 'Statistic Counter';

    protected string $permission = 'counters';

    protected string $storeRequest = CounterRequest::class;

    protected string $updateRequest = CounterRequest::class;

    public function __construct(CounterService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['key' => 'title', 'label' => 'Label'],
            ['key' => 'value', 'label' => 'Value', 'sortable' => true],
            ['key' => 'prefix', 'label' => 'Prefix', 'type' => 'badge'],
            ['key' => 'suffix', 'label' => 'Suffix', 'type' => 'badge'],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'title', 'label' => 'Counter Label', 'required' => true, 'placeholder' => 'Clients Served'],
            ['name' => 'value', 'label' => 'Number', 'type' => 'number', 'required' => true],
            ['name' => 'prefix', 'label' => 'Prefix', 'placeholder' => '$', 'col' => 'col-md-3'],
            ['name' => 'suffix', 'label' => 'Suffix', 'placeholder' => '+', 'col' => 'col-md-3'],
            ['name' => 'icon', 'label' => 'Icon', 'type' => 'icon'],
            ['name' => 'duration', 'label' => 'Animation Duration (ms)', 'type' => 'number', 'default' => 2000,
                'min' => 200, 'max' => 10000, 'step' => 100],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
