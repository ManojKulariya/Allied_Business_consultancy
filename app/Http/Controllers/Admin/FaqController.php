<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\FaqRequest;
use App\Models\Faq;
use App\Services\Admin\FaqService;

class FaqController extends BaseCrudController
{
    protected string $viewPrefix = 'admin.faqs';

    protected string $routePrefix = 'admin.faqs';

    protected string $title = 'FAQ';

    protected string $permission = 'faqs';

    protected string $storeRequest = FaqRequest::class;

    protected string $updateRequest = FaqRequest::class;

    public function __construct(FaqService $service)
    {
        $this->service = $service;
    }

    protected function columns(): array
    {
        return [
            ['key' => 'question', 'label' => 'Question'],
            ['key' => 'category', 'label' => 'Category', 'type' => 'badge', 'sortable' => true],
            ['key' => 'sort_order', 'label' => 'Order', 'sortable' => true],
        ];
    }

    protected function fields(): array
    {
        $categories = Faq::query()
            ->whereNotNull('category')
            ->distinct()
            ->pluck('category', 'category')
            ->union(['General' => 'General', 'Services' => 'Services', 'Pricing' => 'Pricing', 'Support' => 'Support'])
            ->all();

        return [
            ['name' => 'question', 'label' => 'Question', 'required' => true, 'col' => 'col-md-8'],
            ['name' => 'category', 'label' => 'Category', 'type' => 'select', 'options' => $categories, 'col' => 'col-md-4',
                'help' => 'Used to group FAQs into tabs on the website'],
            ['name' => 'answer', 'label' => 'Answer', 'type' => 'editor', 'required' => true, 'col' => 'col-12'],
            ['name' => 'sort_order', 'label' => 'Sort Order', 'type' => 'number', 'default' => 0],
            ['name' => 'status', 'label' => 'Active', 'type' => 'switch', 'default' => '1'],
        ];
    }
}
