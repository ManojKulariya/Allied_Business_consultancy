<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\HomeSection;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Homepage — assembled entirely from active HomeSections (cached),
     * each rendered by its frontend/sections/{key} partial.
     */
    public function index(): View
    {
        $sections = HomeSection::forHomepage()
            ->filter(fn (HomeSection $section) => view()->exists("frontend.sections.{$section->section_key}"));

        return view('frontend.pages.home', [
            'sections' => $sections,
        ]);
    }
}
