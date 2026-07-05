<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MediaUploadRequest;
use App\Models\Media;
use App\Models\MediaFolder;
use App\Services\Admin\MediaService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MediaController extends Controller
{
    public function __construct(private readonly MediaService $mediaService)
    {
    }

    /**
     * Media manager grid (folders + files, search, type filter).
     * Also serves the picker modal content when ?picker=1 (AJAX).
     */
    public function index(Request $request): View
    {
        $folder = $request->filled('folder')
            ? MediaFolder::query()->findOrFail($request->integer('folder'))
            : null;

        $data = [
            'items' => $this->mediaService->list($request, $folder),
            'folders' => MediaFolder::query()
                ->when($folder, fn ($q) => $q->where('parent_id', $folder->id), fn ($q) => $q->whereNull('parent_id'))
                ->withCount('media')
                ->orderBy('name')
                ->get(),
            'currentFolder' => $folder,
            'breadcrumbs' => $folder?->breadcrumbs() ?? [],
        ];

        if ($request->boolean('picker')) {
            return view('admin.media.partials.picker-grid', $data);
        }

        return view('admin.media.index', $data);
    }

    /**
     * Handle (multi/drag-drop) upload. Returns JSON for the JS uploader.
     */
    public function store(MediaUploadRequest $request): JsonResponse
    {
        $uploaded = $this->mediaService->uploadMany(
            $request->file('files', []),
            $request->validated('folder_id')
        );

        return response()->json([
            'success' => true,
            'message' => count($uploaded).' file(s) uploaded.',
            'media' => collect($uploaded)->map(fn (Media $media) => $this->payload($media)),
        ]);
    }

    /**
     * Update metadata (name, alt text) — inline edit from the details panel.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        $media = Media::query()->findOrFail($id);

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'alt_text' => ['nullable', 'string', 'max:255'],
            'folder_id' => ['nullable', 'integer', 'exists:media_folders,id'],
        ]);

        $this->mediaService->update($media, $validated);

        return response()->json(['success' => true, 'message' => 'Media updated.']);
    }

    public function destroy(int $id): JsonResponse
    {
        $this->mediaService->delete(Media::query()->findOrFail($id));

        return response()->json(['success' => true, 'message' => 'File deleted.']);
    }

    public function bulkDelete(Request $request): JsonResponse
    {
        $ids = array_filter((array) $request->input('ids', []), 'is_numeric');

        abort_if(empty($ids), 422, 'No files selected.');

        $count = $this->mediaService->bulkDelete($ids);

        return response()->json(['success' => true, 'message' => "{$count} file(s) deleted."]);
    }

    /**
     * JSON shape shared by the uploader and the media picker.
     */
    private function payload(Media $media): array
    {
        return [
            'id' => $media->id,
            'name' => $media->name,
            'path' => $media->file_path,
            'url' => $media->url,
            'thumb' => $media->thumb_url,
            'type' => $media->type,
            'size' => $media->human_size,
        ];
    }
}
