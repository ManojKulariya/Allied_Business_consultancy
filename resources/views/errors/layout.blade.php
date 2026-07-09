<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('code') — @yield('message') | {{ setting('site_name', config('app.name')) }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        .error-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f5f9;
            text-align: center;
            padding: 1.5rem;
        }
        .error-code {
            font-size: clamp(6rem, 18vw, 10rem);
            font-weight: 800;
            line-height: 1;
            background: linear-gradient(135deg, #0d6efd, #1e293b);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
    </style>
</head>
<body>
<div class="error-page">
    <div>
        <div class="error-code">@yield('code')</div>
        <h1 class="h4 mt-3 mb-2">@yield('message')</h1>
        <p class="text-muted mb-4" style="max-width: 420px; margin-inline: auto;">@yield('description')</p>
        @hasSection('actions')
            @yield('actions')
        @else
            <a href="{{ url('/') }}" class="btn btn-primary">
                <i class="bi bi-house me-1"></i> Back to Home
            </a>
        @endif
    </div>
</div>
</body>
</html>
