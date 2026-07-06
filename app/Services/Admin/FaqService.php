<?php

namespace App\Services\Admin;

use App\Models\Faq;

class FaqService extends BaseCrudService
{
    protected string $model = Faq::class;

    protected array $searchable = ['question', 'answer', 'category'];

    protected array $sortable = ['sort_order', 'category', 'created_at'];

    protected string $defaultDirection = 'asc';
}
