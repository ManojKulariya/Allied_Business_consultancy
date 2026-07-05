<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SeoSettingController extends Controller
{
    /**
     * All per-route SEO defaults with expandable edit forms.
     */
    public function index(): View
    {
        return view('admin.settings.seo', [
            'seoSettings' => SeoSetting::query()->orderBy('page_label')->get(),
        ]);
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $seo = SeoSetting::query()->findOrFail($id);

        $validated = $request->validate([
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'meta_keywords' => ['nullable', 'string', 'max:500'],
            'meta_image' => ['nullable', 'string', 'max:255'],
            'schema_markup' => ['nullable', 'json'],
            'no_index' => ['nullable', 'in:0,1'],
        ], [
            'schema_markup.json' => 'Schema markup must be valid JSON-LD.',
        ]);

        $validated['no_index'] = (bool) ($validated['no_index'] ?? false);

        $seo->update($validated);

        return back()->with('success', "SEO for \"{$seo->page_label}\" updated.");
    }
}
