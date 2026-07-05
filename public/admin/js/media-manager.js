/* =========================================================
   Media Manager — drag & drop upload, folders, details,
   delete / bulk delete. Requires jQuery + SweetAlert2 and
   window.mediaManagerConfig set by the index view.
   ========================================================= */
(function ($) {
    'use strict';

    const cfg = window.mediaManagerConfig;
    if (!cfg) return;

    const $dropZone = $('#dropZone');
    const $fileInput = $('#fileInput');
    const $progress = $('#uploadProgress');

    const toast = (icon, title) => Swal.mixin({
        toast: true, position: 'top-end', showConfirmButton: false, timer: 3000,
    }).fire({ icon: icon, title: title });

    /* ---------- Upload: button + drag & drop ---------- */
    $('#uploadTrigger').on('click', () => $fileInput.trigger('click'));
    $fileInput.on('change', function () {
        if (this.files.length) uploadFiles(this.files);
    });

    let dragCounter = 0;
    $(document)
        .on('dragenter', function (e) {
            e.preventDefault();
            if (++dragCounter === 1) $dropZone.removeClass('d-none');
        })
        .on('dragleave', function (e) {
            e.preventDefault();
            if (--dragCounter === 0) $dropZone.addClass('d-none');
        })
        .on('dragover', (e) => e.preventDefault())
        .on('drop', function (e) {
            e.preventDefault();
            dragCounter = 0;
            $dropZone.addClass('d-none');
            const files = e.originalEvent.dataTransfer.files;
            if (files.length) uploadFiles(files);
        });

    function uploadFiles(files) {
        const form = new FormData();
        Array.from(files).forEach((f) => form.append('files[]', f));
        if (cfg.folderId) form.append('folder_id', cfg.folderId);

        $progress.removeClass('d-none');

        $.ajax({
            url: cfg.uploadUrl,
            type: 'POST',
            data: form,
            processData: false,
            contentType: false,
        })
            .done((res) => {
                toast('success', res.message);
                window.location.reload();
            })
            .fail((xhr) => {
                const errors = xhr.responseJSON && xhr.responseJSON.errors;
                const first = errors ? Object.values(errors)[0][0] : 'Upload failed.';
                Swal.fire('Upload Error', first, 'error');
            })
            .always(() => $progress.addClass('d-none'));
    }

    /* ---------- New folder ---------- */
    $('#newFolderForm').on('submit', function (e) {
        e.preventDefault();

        $.post($(this).data('url'), $(this).serialize())
            .done(() => window.location.reload())
            .fail((xhr) => {
                const errors = xhr.responseJSON && xhr.responseJSON.errors;
                const first = errors ? Object.values(errors)[0][0] : 'Could not create folder.';
                Swal.fire('Error', first, 'error');
            });
    });

    /* ---------- Delete folder ---------- */
    $(document).on('click', '.folder-delete', function (e) {
        e.preventDefault();
        const url = $(this).data('url');

        Swal.fire({
            title: 'Delete this folder?',
            text: 'Choose what happens to the files inside.',
            icon: 'warning',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Keep files (move up)',
            denyButtonText: 'Delete files too',
            confirmButtonColor: '#0d6efd',
            denyButtonColor: '#dc3545',
        }).then((result) => {
            if (result.isDismissed) return;
            const withFiles = result.isDenied ? 1 : 0;

            $.ajax({ url: url + '?with_files=' + withFiles, type: 'DELETE' })
                .done(() => window.location.reload())
                .fail(() => Swal.fire('Error', 'Could not delete folder.', 'error'));
        });
    });

    /* ---------- Details offcanvas ---------- */
    $(document).on('click', '.media-thumb', function () {
        const d = $(this).data('details');
        const isImage = d.type === 'image';

        $('#mediaDetailsBody').html(`
            <div class="text-center mb-3">
                ${isImage
                    ? `<img src="${d.thumb}" class="img-fluid rounded" style="max-height: 200px;">`
                    : `<i class="bi bi-file-earmark display-3 text-secondary"></i>`}
            </div>
            <form id="mediaMetaForm" data-id="${d.id}">
                <div class="mb-2">
                    <label class="form-label small mb-1">Name</label>
                    <input type="text" name="name" class="form-control form-control-sm" value="${$('<i>').text(d.name).html()}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label small mb-1">Alt Text (SEO)</label>
                    <input type="text" name="alt_text" class="form-control form-control-sm" value="${$('<i>').text(d.alt_text || '').html()}">
                </div>
                <dl class="row small text-muted mb-3">
                    <dt class="col-5">File</dt><dd class="col-7 text-truncate">${d.file_name}</dd>
                    <dt class="col-5">Size</dt><dd class="col-7">${d.size}</dd>
                    ${d.dimensions ? `<dt class="col-5">Dimensions</dt><dd class="col-7">${d.dimensions}</dd>` : ''}
                    <dt class="col-5">Uploaded</dt><dd class="col-7">${d.uploaded}</dd>
                </dl>
                <div class="input-group input-group-sm mb-3">
                    <input type="text" class="form-control" value="${d.url}" readonly id="mediaUrlCopy">
                    <button type="button" class="btn btn-outline-secondary" id="copyUrlBtn"><i class="bi bi-clipboard"></i></button>
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-sm btn-primary flex-grow-1">Save</button>
                    ${cfg.canDelete ? `<button type="button" class="btn btn-sm btn-outline-danger" id="deleteMediaBtn" data-id="${d.id}"><i class="bi bi-trash"></i></button>` : ''}
                </div>
            </form>
        `);

        bootstrap.Offcanvas.getOrCreateInstance('#mediaDetails').show();
    });

    $(document).on('click', '#copyUrlBtn', function () {
        navigator.clipboard.writeText($('#mediaUrlCopy').val());
        toast('success', 'URL copied');
    });

    $(document).on('submit', '#mediaMetaForm', function (e) {
        e.preventDefault();

        $.ajax({
            url: cfg.updateUrlBase + '/' + $(this).data('id'),
            type: 'PUT',
            data: $(this).serialize(),
        })
            .done((res) => {
                toast('success', res.message);
                window.location.reload();
            })
            .fail(() => Swal.fire('Error', 'Could not save changes.', 'error'));
    });

    $(document).on('click', '#deleteMediaBtn', function () {
        const id = $(this).data('id');

        Swal.fire({
            title: 'Delete this file?',
            text: 'The file will be permanently removed.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Yes, delete',
        }).then((result) => {
            if (!result.isConfirmed) return;

            $.ajax({ url: cfg.updateUrlBase + '/' + id, type: 'DELETE' })
                .done(() => window.location.reload())
                .fail(() => Swal.fire('Error', 'Could not delete file.', 'error'));
        });
    });
})(jQuery);
