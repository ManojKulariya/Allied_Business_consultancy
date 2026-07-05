<?php

namespace App\Traits;

use App\Models\Media;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Http\UploadedFile;

trait HasMedia
{
    use HasImageUpload;

    /**
     * All media attached to this model.
     */
    public function media(): MorphMany
    {
        return $this->morphMany(Media::class, 'mediable')->orderBy('sort_order');
    }

    /**
     * Media in a specific collection (e.g. 'gallery', 'attachments').
     */
    public function mediaCollection(string $collection = 'default'): MorphMany
    {
        return $this->media()->where('collection', $collection);
    }

    /**
     * Attach an uploaded file as a media record.
     */
    public function addMedia(UploadedFile $file, string $collection = 'default', string $directory = 'media'): Media
    {
        $path = $this->uploadFile($file, $directory);

        return $this->media()->create([
            'collection' => $collection,
            'name' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
            'file_name' => $file->getClientOriginalName(),
            'file_path' => $path,
            'mime_type' => $file->getMimeType(),
            'extension' => strtolower($file->getClientOriginalExtension()),
            'size' => $file->getSize(),
        ]);
    }

    /**
     * Attach multiple uploaded files at once.
     */
    public function addMultipleMedia(array $files, string $collection = 'default', string $directory = 'media'): array
    {
        return collect($files)
            ->filter(fn ($file) => $file instanceof UploadedFile)
            ->map(fn (UploadedFile $file) => $this->addMedia($file, $collection, $directory))
            ->all();
    }

    /**
     * Delete all media in a collection (files removed via Media::deleted event).
     */
    public function clearMediaCollection(string $collection = 'default'): void
    {
        $this->mediaCollection($collection)->get()->each->delete();
    }
}
