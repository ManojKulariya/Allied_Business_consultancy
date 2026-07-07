<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        $page = Page::query()->where('slug', 'about-us')->active()->firstOrFail();

        return $this->render($page);
    }

    public function show(Page $page): View
    {
        abort_unless($page->isActive(), 404);

        return $this->render($page);
    }

    private function render(Page $page): View
    {
        return view('frontend.pages.show', [
            'page' => $page,
            'seoModel' => $page,
        ]);
    }
}
