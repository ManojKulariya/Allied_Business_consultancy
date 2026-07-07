/* =========================================================
   Allied Business Consultancy — Admin JS
   Sidebar toggle, CSRF setup, DataTables defaults,
   SweetAlert2 delete confirms, status toggle, bulk delete.
   ========================================================= */
(function ($) {
    'use strict';

    /* ---------- CSRF for all AJAX ---------- */
    $.ajaxSetup({
        headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    });

    /* ---------- Sidebar toggle ---------- */
    const sidebar = document.getElementById('adminSidebar');
    const main = document.querySelector('.admin-main');
    const backdrop = document.getElementById('sidebarBackdrop');
    const isMobile = () => window.matchMedia('(max-width: 991.98px)').matches;

    $('#sidebarToggle').on('click', function () {
        if (isMobile()) {
            sidebar.classList.toggle('mobile-open');
            backdrop.classList.toggle('show');
        } else {
            sidebar.classList.toggle('collapsed');
            main.classList.toggle('expanded');
        }
    });

    $(backdrop).on('click', function () {
        sidebar.classList.remove('mobile-open');
        backdrop.classList.remove('show');
    });

    /* ---------- DataTables defaults ---------- */
    if ($.fn.dataTable) {
        $.extend(true, $.fn.dataTable.defaults, {
            pageLength: 15,
            lengthMenu: [10, 15, 25, 50, 100],
            language: {
                search: '',
                searchPlaceholder: 'Search…',
                lengthMenu: 'Show _MENU_',
            },
        });

        $('.datatable').DataTable();
    }

    /* ---------- Delete confirmation (single) ----------
       Usage: <form class="delete-form" ...> with a submit button */
    $(document).on('submit', '.delete-form', function (e) {
        e.preventDefault();
        const form = this;

        Swal.fire({
            title: 'Are you sure?',
            text: $(form).data('message') || 'This record will be moved to trash.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Yes, delete it',
        }).then((result) => {
            if (result.isConfirmed) form.submit();
        });
    });

    /* ---------- Permanent delete confirmation ---------- */
    $(document).on('submit', '.force-delete-form', function (e) {
        e.preventDefault();
        const form = this;

        Swal.fire({
            title: 'Delete permanently?',
            text: 'This action CANNOT be undone!',
            icon: 'error',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Yes, delete permanently',
        }).then((result) => {
            if (result.isConfirmed) form.submit();
        });
    });

    /* ---------- Status toggle switch ----------
       Usage: <input type="checkbox" class="status-toggle" data-url="..."> */
    $(document).on('change', '.status-toggle', function () {
        const $toggle = $(this);

        $.ajax({
            url: $toggle.data('url'),
            type: 'PATCH',
            success: function (res) {
                const Toast = Swal.mixin({
                    toast: true, position: 'top-end',
                    showConfirmButton: false, timer: 2500,
                });
                Toast.fire({ icon: 'success', title: res.message });
            },
            error: function () {
                $toggle.prop('checked', !$toggle.prop('checked')); // revert
                Swal.fire('Error', 'Could not update status.', 'error');
            },
        });
    });

    /* ---------- Bulk select & delete / status ----------
       Usage: #select-all checkbox, .row-checkbox per row,
              #bulk-delete-btn / .bulk-status-btn with data-url */
    $(document).on('change', '#select-all', function () {
        $('.row-checkbox').prop('checked', this.checked).trigger('change');
    });

    $(document).on('change', '.row-checkbox', function () {
        const count = $('.row-checkbox:checked').length;
        $('#bulk-delete-btn, .bulk-status-btn').toggleClass('d-none', count === 0)
            .find('.count').text(count);
    });

    $(document).on('click', '#bulk-delete-btn', function () {
        const $btn = $(this);
        const ids = $('.row-checkbox:checked').map(function () {
            return this.value;
        }).get();

        if (!ids.length) return;

        Swal.fire({
            title: 'Delete ' + ids.length + ' record(s)?',
            text: 'Selected records will be moved to trash.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#dc3545',
            confirmButtonText: 'Yes, delete',
        }).then((result) => {
            if (!result.isConfirmed) return;

            $.post($btn.data('url'), { ids: ids })
                .done(() => window.location.reload())
                .fail(() => Swal.fire('Error', 'Bulk delete failed.', 'error'));
        });
    });

    $(document).on('click', '.bulk-status-btn', function () {
        const $btn = $(this);
        const active = $btn.data('active');
        const ids = $('.row-checkbox:checked').map(function () {
            return this.value;
        }).get();

        if (!ids.length) return;

        $.post($btn.data('url'), { ids: ids, active: active })
            .done((res) => {
                Swal.mixin({ toast: true, position: 'top-end', showConfirmButton: false, timer: 2000 })
                    .fire({ icon: 'success', title: res.message });
                window.location.reload();
            })
            .fail(() => Swal.fire('Error', 'Bulk status update failed.', 'error'));
    });

    /* ---------- CKEditor ----------
       Usage: <textarea class="rich-editor"> */
    document.querySelectorAll('.rich-editor').forEach(function (el) {
        if (typeof ClassicEditor !== 'undefined') {
            ClassicEditor.create(el).catch(console.error);
        }
    });

    /* ---------- Image preview ----------
       Usage: <input type="file" class="image-input" data-preview="#previewImg"> */
    $(document).on('change', '.image-input', function () {
        const target = $(this).data('preview');
        const file = this.files && this.files[0];

        if (target && file) {
            $(target).attr('src', URL.createObjectURL(file)).removeClass('d-none');
        }
    });
})(jQuery);
