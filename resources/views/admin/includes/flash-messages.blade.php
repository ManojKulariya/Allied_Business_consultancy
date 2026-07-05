<script>
    document.addEventListener('DOMContentLoaded', function () {
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3500,
            timerProgressBar: true,
        });

        @if(session('success'))
            Toast.fire({ icon: 'success', title: @json(session('success')) });
        @endif

        @if(session('error'))
            Toast.fire({ icon: 'error', title: @json(session('error')) });
        @endif

        @if(session('warning'))
            Toast.fire({ icon: 'warning', title: @json(session('warning')) });
        @endif

        @if(session('info'))
            Toast.fire({ icon: 'info', title: @json(session('info')) });
        @endif

        @if($errors->any() && !request()->routeIs('admin.login*', 'admin.password.*'))
            Toast.fire({ icon: 'error', title: 'Please fix the highlighted form errors.' });
        @endif
    });
</script>
