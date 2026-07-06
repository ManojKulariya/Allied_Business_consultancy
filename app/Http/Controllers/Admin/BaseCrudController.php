<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\BaseCrudService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

/**
 * Generic resource controller for admin CRUD modules.
 *
 * Concrete controllers provide:
 *  - $service       : the module's BaseCrudService
 *  - $viewPrefix    : e.g. 'admin.blogs'
 *  - $routePrefix   : e.g. 'admin.blogs'
 *  - $title         : e.g. 'Blog'
 *  - $permission    : e.g. 'blogs' (module permission prefix for view checks)
 *  - $storeRequest / $updateRequest : FormRequest class names
 *  - columns()      : index table definition (generic view)
 *  - fields()       : form definition (generic view)
 *
 * Views resolve to "{viewPrefix}.index|form" when those Blade files exist,
 * otherwise the shared generic views (admin.crud.*) render from config —
 * so simple modules need ZERO view files.
 *
 * Permissions are enforced at route level (can: middleware).
 */
abstract class BaseCrudController extends Controller
{
    protected BaseCrudService $service;

    protected string $viewPrefix;

    protected string $routePrefix;

    protected string $title;

    protected string $permission = '';

    protected string $storeRequest;

    protected string $updateRequest;

    /**
     * Index table columns for the generic view.
     * Each: ['key','label','type' => text|image|icon|badge|boolean|date|color, 'sortable' => bool]
     */
    protected function columns(): array
    {
        return [
            ['key' => 'title', 'label' => 'Title', 'type' => 'text', 'sortable' => false],
        ];
    }

    /**
     * Form fields for the generic view.
     * Each: ['name','label','type' => text|textarea|editor|media|select|number|color|icon|switch|url|email,
     *        'options' => [], 'required' => bool, 'col' => 'col-md-6', 'help' => '', 'default' => mixed]
     */
    protected function fields(): array
    {
        return [];
    }

    /** Extra view data shared with create/edit forms. */
    protected function formData(): array
    {
        return [];
    }

    /** Common payload for every view. */
    protected function viewData(): array
    {
        return [
            'title' => $this->title,
            'routePrefix' => $this->routePrefix,
            'permission' => $this->permission,
        ];
    }

    /** Prefer a module-specific Blade view, fall back to the shared generic one. */
    protected function resolveView(string $name, string $fallback): string
    {
        return view()->exists("{$this->viewPrefix}.{$name}")
            ? "{$this->viewPrefix}.{$name}"
            : $fallback;
    }

    public function index(Request $request): View
    {
        return view($this->resolveView('index', 'admin.crud.index'), $this->viewData() + [
            'items' => $this->service->list($request),
            'columns' => $this->columns(),
        ]);
    }

    public function create(): View
    {
        return view($this->resolveView('form', 'admin.crud.form'), $this->viewData() + [
            'item' => null,
            'fields' => $this->fields(),
        ] + $this->formData());
    }

    public function store(): RedirectResponse
    {
        $validated = app($this->storeRequest)->validated();

        $this->service->store($validated);

        return redirect()
            ->route("{$this->routePrefix}.index")
            ->with('success', "{$this->title} created successfully.");
    }

    public function edit(int $id): View
    {
        return view($this->resolveView('form', 'admin.crud.form'), $this->viewData() + [
            'item' => $this->service->findOrFail($id),
            'fields' => $this->fields(),
        ] + $this->formData());
    }

    public function update(int $id): RedirectResponse
    {
        $validated = app($this->updateRequest)->validated();

        $this->service->update($this->service->findOrFail($id), $validated);

        return redirect()
            ->route("{$this->routePrefix}.index")
            ->with('success', "{$this->title} updated successfully.");
    }

    public function destroy(int $id): RedirectResponse
    {
        $this->service->delete($this->service->findOrFail($id));

        return back()->with('success', "{$this->title} moved to trash.");
    }

    public function restore(int $id): RedirectResponse
    {
        $this->service->restore($id);

        return back()->with('success', "{$this->title} restored successfully.");
    }

    public function forceDelete(int $id): RedirectResponse
    {
        $this->service->forceDelete($id);

        return back()->with('success', "{$this->title} permanently deleted.");
    }

    public function toggleStatus(int $id): JsonResponse
    {
        $model = $this->service->toggleStatus($this->service->findOrFail($id));

        return response()->json([
            'success' => true,
            'status' => $model->status->value,
            'label' => $model->status->label(),
            'message' => "{$this->title} status updated.",
        ]);
    }

    public function bulkDelete(Request $request): JsonResponse
    {
        $ids = array_filter((array) $request->input('ids', []), 'is_numeric');

        abort_if(empty($ids), 422, 'No records selected.');

        $count = $this->service->bulkDelete($ids);

        return response()->json([
            'success' => true,
            'message' => "{$count} record(s) moved to trash.",
        ]);
    }
}
