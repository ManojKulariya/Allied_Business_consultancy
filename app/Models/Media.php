<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function mediable(): MorphTo
    {
        return $this->morphTo();
    }

    public function folder()
    {
        return $this->belongsTo(MediaFolder::class, 'folder_id');
    }

    public function getUrlAttribute(): string
    {
        return uploaded_asset($this->file_path);
    }

    /**
     * Thumbnail URL — falls back to the original for images, icon for documents.
     */
    public function getThumbUrlAttribute(): string
    {
        if ($this->thumbnail_path) {
            return uploaded_asset($this->thumbnail_path);
        }

        return $this->isImage() ? $this->url : asset('admin/img/file-icon.svg');
    }

    /**
     * Broad type bucket used by the media manager filters.
     */
    public function getTypeAttribute(): string
    {
        return match (true) {
            $this->isImage() => 'image',
            $this->mime_type === 'application/pdf' => 'pdf',
            str_contains((string) $this->mime_type, 'word') => 'word',
            str_contains((string) $this->mime_type, 'sheet'),
            str_contains((string) $this->mime_type, 'excel') => 'excel',
            default => 'other',
        };
    }

    public function getHumanSizeAttribute(): string
    {
        return format_bytes((int) $this->size);
    }

    public function isImage(): bool
    {
        return str_starts_with((string) $this->mime_type, 'image/');
    }

    protected static function booted(): void
    {
        // Remove the physical file(s) when the media record is deleted.
        static::deleted(function (Media $media) {
            foreach ([$media->file_path, $media->thumbnail_path] as $path) {
                if ($path && Storage::disk('public')->exists($path)) {
                    Storage::disk('public')->delete($path);
                }
            }
        });
    }
}
