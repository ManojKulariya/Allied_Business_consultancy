<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MediaFolderRequest;
use App\Models\MediaFolder;
use Illuminate\Http\JsonResponse;

class MediaFolderController extends Controller
{
    public function store(MediaFolderRequest $request): JsonResponse
    {
        $folder = MediaFolder::query()->create($request->validated());

        return response()->json([
            'success' => true,
            'message' => "Folder \"{$folder->name}\" created.",
            'folder' => $folder->only(['id', 'name', 'parent_id']),
        ]);
    }

    public function update(MediaFolderRequest $request, MediaFolder $folder): JsonResponse
    {
        $folder->update(['name' => $request->validated('name')]);

        return response()->json(['success' => true, 'message' => 'Folder renamed.']);
    }

    /**
     * Delete a folder. Files inside are kept and moved to the parent
     * (folder_id FK is nullOnDelete → root) unless ?with_files=1.
     */
    public function destroy(MediaFolder $folder): JsonResponse
    {
        if (request()->boolean('with_files')) {
            $folder->media()->get()->each->delete(); // removes physical files too
        } else {
            $folder->media()->update(['folder_id' => $folder->parent_id]);
        }

        $folder->delete();

        return response()->json(['success' => true, 'message' => 'Folder deleted.']);
    }
}
