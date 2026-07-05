<div class="col-6 col-md-3 col-xl-2 media-item" data-id="{{ $media->id }}">
    <div class="card media-card h-100 position-relative">
        @can('media.delete')
            <div class="form-check position-absolute top-0 start-0 m-2" style="z-index: 2;">
                <input type="checkbox" class="form-check-input row-checkbox" value="{{ $media->id }}">
            </div>
        @endcan

        <button type="button"
                class="media-thumb border-0 bg-transparent p-0 w-100"
                data-details='@json([
                    "id" => $media->id,
                    "name" => $media->name,
                    "file_name" => $media->file_name,
                    "alt_text" => $media->alt_text,
                    "url" => $media->url,
                    "thumb" => $media->thumb_url,
                    "type" => $media->type,
                    "size" => $media->human_size,
                    "dimensions" => $media->width ? "{$media->width} × {$media->height}px" : null,
                    "uploaded" => $media->created_at->format("d M Y, h:i A"),
                    "path" => $media->file_path,
                ])'>
            @if($media->isImage())
                <img src="{{ $media->thumb_url }}" alt="{{ $media->alt_text ?? $media->name }}"
                     class="card-img-top" loading="lazy"
                     style="aspect-ratio: 1; object-fit: cover;">
            @else
                <div class="d-flex align-items-center justify-content-center bg-light"
                     style="aspect-ratio: 1;">
                    <i class="bi {{ [
                        'pdf' => 'bi-file-earmark-pdf text-danger',
                        'word' => 'bi-file-earmark-word text-primary',
                        'excel' => 'bi-file-earmark-excel text-success',
                    ][$media->type] ?? 'bi-file-earmark text-secondary' }} display-5"></i>
                </div>
            @endif
        </button>

        <div class="card-body p-2">
            <div class="small text-truncate" title="{{ $media->name }}">{{ $media->name }}</div>
            <div class="text-muted" style="font-size: .72rem;">{{ strtoupper($media->extension) }} · {{ $media->human_size }}</div>
        </div>
    </div>
</div>
