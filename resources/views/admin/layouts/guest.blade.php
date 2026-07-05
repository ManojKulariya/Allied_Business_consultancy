<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Login') — {{ setting('site_name', config('app.name')) }}</title>

    @if(setting('site_favicon'))
        <link rel="icon" href="{{ uploaded_asset(setting('site_favicon')) }}">
    @endif

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="{{ asset('admin/css/admin.css') }}" rel="stylesheet">
</head>
<body>
<div class="auth-page">
    <div class="card auth-card">
        <div class="card-body p-4 p-md-5">
            <div class="text-center mb-4">
                @if(setting('site_logo'))
                    <img src="{{ uploaded_asset(setting('site_logo')) }}" alt="{{ setting('site_name') }}" height="48" class="mb-3">
                @else
                    <i class="bi bi-buildings text-primary" style="font-size: 3rem;"></i>
                @endif
                <h1 class="h5 mt-2 mb-0">{{ setting('site_name', 'Allied Business Consultancy') }}</h1>
                <p class="text-muted small">@yield('subtitle', 'Admin Panel')</p>
            </div>

            @yield('content')
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
