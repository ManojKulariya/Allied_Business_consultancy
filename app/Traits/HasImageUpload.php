<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait HasImageUpload
{
    /**
     * Upload a file to the public disk and return the stored path.
     */
    public function uploadFile(UploadedFile $file, string $directory = 'uploads'): string
    {
        $filename = now()->format('YmdHis').'_'.Str::random(8).'.'.$file->getClientOriginalExtension();

        return $file->storeAs($directory, $filename, 'public');
    }

    /**
     * Upload a new file and remove the previous one (if any).
     */
    public function replaceFile(UploadedFile $file, ?string $oldPath, string $directory = 'uploads'): string
    {
        $this->deleteFile($oldPath);

        return $this->uploadFile($file, $directory);
    }

    /**
     * Upload multiple files, returning an array of stored paths.
     */
    public function uploadMultipleFiles(array $files, string $directory = 'uploads'): array
    {
        return collect($files)
            ->filter(fn ($file) => $file instanceof UploadedFile)
            ->map(fn (UploadedFile $file) => $this->uploadFile($file, $directory))
            ->values()
            ->all();
    }

    /**
     * Delete a stored file if it exists.
     */
    public function deleteFile(?string $path): bool
    {
        if ($path && Storage::disk('public')->exists($path)) {
            return Storage::disk('public')->delete($path);
        }

        return false;
    }
}
