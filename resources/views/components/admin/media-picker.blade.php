{{--
    Reusable media picker.
    Usage in any admin form:
        <x-admin.media-picker name="image" label="Featured Image" :value="old('image', $item->image ?? '')" />
        <x-admin.media-picker name="brochure" type="pdf" label="Brochure (PDF)" :value="old('brochure')" />
    Stores the selected file PATH in a hidden input — exactly what module
    columns (image, banner_image, ...) expect.
--}}
@props([
    'name',
    'value' => '',
    'label' => null,
    'type' => 'image',   // image | pdf | word | excel | '' (any)
    'required' => false,
])

<div class="media-picker" data-type="{{ $type }}">
    @if($label)
        <label class="form-label">{{ $label }} @if($required)<span class="text-danger">*</span>@endif</label>
    @endif

    <input type="hidden" name="{{ $name }}" value="{{ $value }}" class="media-picker-input @error($name) is-invalid @enderror">

    <div class="d-flex align-items-center gap-2">
        <div class="media-picker-preview border rounded d-flex align-items-center justify-content-center overflow-hidden bg-light"
             style="width: 84px; height: 84px; flex: 0 0 auto;">
            @if($value && $type === 'image')
                <img src="{{ uploaded_asset($value) }}" class="w-100 h-100" style="object-fit: cover;">
            @elseif($value)
                <i class="bi bi-file-earmark-check fs-2 text-success"></i>
            @else
                <i class="bi bi-image text-muted fs-3"></i>
            @endif
        </div>
        <div>
            <button type="button" class="btn btn-sm btn-outline-primary media-picker-open">
                <i class="bi bi-images me-1"></i> Choose from Library
            </button>
            <button type="button" class="btn btn-sm btn-outline-danger media-picker-clear {{ $value ? '' : 'd-none' }}">
                <i class="bi bi-x-lg"></i>
            </button>
            <div class="small text-muted mt-1 media-picker-name text-truncate" style="max-width: 260px;">
                {{ $value ? basename($value) : 'No file selected' }}
            </div>
        </div>
    </div>

    @error($name)
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>

@once
    @push('scripts')
        {{-- Shared media picker modal (rendered once per page) --}}
        <div class="modal fade" id="mediaPickerModal" tabindex="-1">
            <div class="modal-dialog modal-xl modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header py-2">
                        <h6 class="modal-title"><i class="bi bi-images me-1"></i> Media Library</h6>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body" id="mediaPickerBody">
                        <div class="text-center py-5"><div class="spinner-border text-primary"></div></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            (function ($) {
                'use strict';

                let $activePicker = null;
                const pickerUrl = @json(route('admin.media.index'));
                const modalEl = document.getElementById('mediaPickerModal');
                const modal = () => bootstrap.Modal.getOrCreateInstance(modalEl);

                function loadPicker(params) {
                    params = Object.assign({ picker: 1 }, params || {});
                    const type = $activePicker ? $activePicker.data('type') : '';
                    if (type && !('type' in params)) params.type = type;

                    $('#mediaPickerBody').load(pickerUrl + '?' + $.param(params));
                }

                // Open
                $(document).on('click', '.media-picker-open', function () {
                    $activePicker = $(this).closest('.media-picker');
                    loadPicker({});
                    modal().show();
                });

                // Navigate folders / pagination inside the modal
                $(document).on('click', '#mediaPickerModal .picker-nav', function (e) {
                    e.preventDefault();
                    loadPicker({ folder: $(this).data('folder') || '' });
                });
                $(document).on('click', '#mediaPickerModal .picker-pagination a', function (e) {
                    e.preventDefault();
                    $('#mediaPickerBody').load($(this).attr('href') + '&picker=1');
                });

                // Search & type filter
                let searchTimer;
                $(document).on('input', '#mediaPickerModal .picker-search', function () {
                    clearTimeout(searchTimer);
                    const value = this.value;
                    searchTimer = setTimeout(() => loadPicker({ search: value }), 400);
                });
                $(document).on('change', '#mediaPickerModal .picker-type', function () {
                    loadPicker({ type: this.value });
                });

                // Select an item
                $(document).on('click', '#mediaPickerModal .picker-item', function () {
                    if (!$activePicker) return;

                    const path = $(this).data('path');
                    const thumb = $(this).data('thumb');
                    const name = $(this).data('name');
                    const isImage = $(this).data('type') === 'image';

                    $activePicker.find('.media-picker-input').val(path).trigger('change');
                    $activePicker.find('.media-picker-preview').html(
                        isImage
                            ? '<img src="' + thumb + '" class="w-100 h-100" style="object-fit: cover;">'
                            : '<i class="bi bi-file-earmark-check fs-2 text-success"></i>'
                    );
                    $activePicker.find('.media-picker-name').text(name);
                    $activePicker.find('.media-picker-clear').removeClass('d-none');

                    modal().hide();
                });

                // Clear selection
                $(document).on('click', '.media-picker-clear', function () {
                    const $picker = $(this).closest('.media-picker');
                    $picker.find('.media-picker-input').val('').trigger('change');
                    $picker.find('.media-picker-preview').html('<i class="bi bi-image text-muted fs-3"></i>');
                    $picker.find('.media-picker-name').text('No file selected');
                    $(this).addClass('d-none');
                });
            })(jQuery);
        </script>
    @endpush
@endonce
