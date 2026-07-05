<?php

namespace App\Services\Admin;

use App\Models\Media;
use App\Models\MediaFolder;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\Encoders\WebpEncoder;
use Intervention\Image\ImageManager;

/**
 * Media library engine: uploads (images / PDF / Word / Excel),
 * WebP conversion, compression, automatic thumbnails, folders,
 * search and type filters.
 */
class MediaService
{
    /** Accepted mime types per bucket. */
    public const ALLOWED_MIMES = [
        'image' => ['image/jpeg', 'image/png', 'image/webp', 'image/gif', 'image/svg+xml'],
        'pdf' => ['application/pdf'],
        'word' => [
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
        ],
        'excel' => [
            'application/vnd.ms-excel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'text/csv',
        ],
    ];

    /** Max image edge before down-scaling (compression). */
    private const MAX_DIMENSION = 1920;

    /** WebP encode quality. */
    private const WEBP_QUALITY = 82;

    /** Thumbnail box size. */
    private const THUMB_SIZE = 320;

    private ImageManager $images;

    public function __construct()
    {
        $this->images = new ImageManager(new Driver);
    }

    /**
     * Paginated, filtered listing for the media manager grid.
     */
    public function list(Request $request, ?MediaFolder $folder = null): LengthAwarePaginator
    {
        return Media::query()
            ->when(
                ! $request->filled('search'),
                fn ($q) => $folder ? $q->where('folder_id', $folder->id) : $q->whereNull('folder_id')
            )
            ->when($request->filled('search'), function ($q) use ($request) {
                $search = trim($request->query('search'));
                $q->where(fn ($sub) => $sub
                    ->where('name', 'like', "%{$search}%")
                    ->orWhere('file_name', 'like', "%{$search}%")
                    ->orWhere('alt_text', 'like', "%{$search}%"));
            })
            ->when($request->filled('type'), function ($q) use ($request) {
                $mimes = self::ALLOWED_MIMES[$request->query('type')] ?? null;
                $mimes ? $q->whereIn('mime_type', $mimes) : $q;
            })
            ->latest()
            ->paginate(30)
            ->withQueryString();
    }

    /**
     * Store one uploaded file: images are compressed + converted to WebP
     * with an automatic thumbnail; documents are stored as-is.
     */
    public function upload(UploadedFile $file, ?int $folderId = null): Media
    {
        $isImage = str_starts_with((string) $file->getMimeType(), 'image/')
            && $file->getMimeType() !== 'image/svg+xml';

        $directory = 'media/'.now()->format('Y/m');
        $baseName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)) ?: Str::random(8);
        $unique = $baseName.'-'.Str::lower(Str::random(6));

        if ($isImage) {
            [$path, $thumbPath, $width, $height, $size] = $this->processImage($file, $directory, $unique);
            $mime = 'image/webp';
            $extension = 'webp';
        } else {
            $extension = strtolower($file->getClientOriginalExtension());
            $path = $file->storeAs($directory, "{$unique}.{$extension}", 'public');
            $thumbPath = null;
            $width = $height = null;
            $size = $file->getSize();
            $mime = $file->getMimeType();
        }

        return Media::query()->create([
            'folder_id' => $folderId,
            'collection' => 'library',
            'name' => pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME),
            'file_name' => $file->getClientOriginalName(),
            'file_path' => $path,
            'thumbnail_path' => $thumbPath,
            'mime_type' => $mime,
            'extension' => $extension,
            'size' => $size,
            'width' => $width,
            'height' => $height,
        ]);
    }

    /**
     * Upload many files, returning created Media models.
     */
    public function uploadMany(array $files, ?int $folderId = null): array
    {
        return collect($files)
            ->filter(fn ($file) => $file instanceof UploadedFile)
            ->map(fn (UploadedFile $file) => $this->upload($file, $folderId))
            ->values()
            ->all();
    }

    /**
     * Compress, WebP-convert and thumbnail an image upload.
     *
     * @return array{0: string, 1: string, 2: int, 3: int, 4: int} [path, thumbPath, width, height, bytes]
     */
    private function processImage(UploadedFile $file, string $directory, string $unique): array
    {
        $image = $this->images->decodePath($file->getRealPath());

        // Compression: cap the longest edge, keep aspect ratio, never upscale
        $image->scaleDown(self::MAX_DIMENSION, self::MAX_DIMENSION);

        $encoded = $image->encode(new WebpEncoder(quality: self::WEBP_QUALITY));
        $path = "{$directory}/{$unique}.webp";
        Storage::disk('public')->put($path, (string) $encoded);

        // Automatic thumbnail (cover crop, square)
        $thumb = $this->images->decodePath($file->getRealPath())
            ->cover(self::THUMB_SIZE, self::THUMB_SIZE)
            ->encode(new WebpEncoder(quality: self::WEBP_QUALITY - 10));
        $thumbPath = "{$directory}/thumbs/{$unique}.webp";
        Storage::disk('public')->put($thumbPath, (string) $thumb);

        return [$path, $thumbPath, $image->width(), $image->height(), strlen((string) $encoded)];
    }

    /**
     * Update editable metadata (name, alt text, folder).
     */
    public function update(Media $media, array $data): Media
    {
        $media->update(\Illuminate\Support\Arr::only($data, ['name', 'alt_text', 'folder_id']));

        return $media->refresh();
    }

    /**
     * Delete a media record (physical files removed via the Media deleted event).
     */
    public function delete(Media $media): bool
    {
        return (bool) $media->delete();
    }

    /**
     * Bulk delete media by ids.
     */
    public function bulkDelete(array $ids): int
    {
        $count = 0;

        Media::query()->whereKey($ids)->get()->each(function (Media $media) use (&$count) {
            $count += (int) $media->delete();
        });

        return $count;
    }
}
