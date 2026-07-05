<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Dashboard') — {{ setting('site_name', config('app.name')) }} Admin</title>

    @if(setting('site_favicon'))
        <link rel="icon" href="{{ uploaded_asset(setting('site_favicon')) }}">
    @endif

    {{-- Bootstrap 5 + Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    {{-- DataTables (Bootstrap 5 theme) --}}
    <link href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    {{-- SweetAlert2 --}}
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">
    {{-- Admin theme --}}
    <link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet">

    @stack('styles')
</head>
<body>
<div class="admin-wrapper">
    {{-- Sidebar --}}
    @include('admin.includes.sidebar')

    <div class="admin-main">
        {{-- Top Navbar --}}
        @include('admin.includes.navbar')

        {{-- Page Content --}}
        <main class="admin-content p-4">
            {{-- Breadcrumbs --}}
            @hasSection('breadcrumbs')
                <nav aria-label="breadcrumb" class="mb-3">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        @yield('breadcrumbs')
                    </ol>
                </nav>
            @endif

            @yield('content')
        </main>

        {{-- Footer --}}
        @include('admin.includes.footer')
    </div>
</div>

{{-- Core JS --}}
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script src="{{ asset('admin/js/admin.js') }}"></script>

{{-- Flash messages via SweetAlert2 toasts --}}
@include('admin.includes.flash-messages')

@stack('scripts')
</body>
</html>
