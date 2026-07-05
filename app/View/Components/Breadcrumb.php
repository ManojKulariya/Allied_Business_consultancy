<?php

namespace App\View\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

/**
 * Breadcrumb trail with BreadcrumbList JSON-LD.
 * Usage: <x-breadcrumb :items="['Blog' => route('frontend.blogs.index'), $blog->title => null]" />
 */
class Breadcrumb extends Component
{
    public array $crumbs = [];

    public function __construct(array $items = [], public ?string $title = null)
    {
        $this->crumbs = [['label' => 'Home', 'url' => route('frontend.home')]];

        foreach ($items as $label => $url) {
            $this->crumbs[] = ['label' => $label, 'url' => $url];
        }
    }

    public function render(): View
    {
        return view('components.breadcrumb');
    }
}
