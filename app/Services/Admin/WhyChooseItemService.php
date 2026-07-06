<?php

namespace App\Services\Admin;

use App\Models\WhyChooseItem;

class WhyChooseItemService extends BaseCrudService
{
    protected string $model = WhyChooseItem::class;

    protected array $searchable = ['title', 'description'];

    protected array $sortable = ['sort_order', 'title', 'created_at'];

    protected string $defaultDirection = 'asc';

    protected array $fileFields = ['image' => 'why-choose-us'];
}
