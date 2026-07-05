<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\HomeSectionRequest;
use App\Models\HomeSection;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Homepage builder: fixed section set (seeded), each editable,
 * toggleable and re-orderable via drag & drop.
 */
class HomeSectionController extends Controller
{
    public function index(): View
    {
        return view('admin.home-sections.index', [
            'sections' => HomeSection::query()->orderBy('sort_order')->get(),
        ]);
    }

    public function edit(HomeSection $homeSection): View
    {
        return view('admin.home-sections.edit', [
            'section' => $homeSection,
        ]);
    }

    public function update(HomeSectionRequest $request, HomeSection $homeSection): RedirectResponse
    {
        $homeSection->update($request->validated() + ['updated_by' => auth()->id()]);

        return redirect()
            ->route('admin.home-sections.index')
            ->with('success', "\"{$homeSection->name}\" section updated.");
    }

    public function toggleStatus(int $id): JsonResponse
    {
        $section = HomeSection::query()->findOrFail($id);
        $section->toggleStatus();

        return response()->json([
            'success' => true,
            'status' => $section->status->value,
            'message' => "\"{$section->name}\" is now {$section->status->label()}.",
        ]);
    }

    /**
     * Persist drag & drop ordering. Payload: { order: [id, id, ...] }
     */
    public function reorder(Request $request): JsonResponse
    {
        $ids = array_filter((array) $request->input('order', []), 'is_numeric');

        abort_if(empty($ids), 422, 'No order provided.');

        foreach (array_values($ids) as $position => $id) {
            HomeSection::query()->whereKey($id)->update(['sort_order' => $position + 1]);
        }

        cache()->forget('home_sections.active');

        return response()->json(['success' => true, 'message' => 'Section order saved.']);
    }
}
