@extends('admin.layouts.app')

@section('title', 'Behavior Analytics')

@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ safe_route('admin.analytics.index') }}">Analytics</a></li>
    <li class="breadcrumb-item active">Behavior Analytics</li>
@endsection

@section('content')
    <div class="mb-4">
        <h1 class="h4 mb-1">Behavior Analytics</h1>
        <p class="text-muted small mb-0">Session recordings, heatmaps and scroll data — powered by Microsoft Clarity.</p>
    </div>

    <div class="card">
        <div class="card-body text-center py-5">
            <i class="bi bi-cursor display-3 text-primary mb-3 d-block"></i>

            @if($clarityConfigured)
                <h2 class="h5 mb-2">Clarity Project Connected</h2>
                <p class="text-muted mb-4">
                    Project ID: <code>{{ $clarityProjectId }}</code><br>
                    Heatmaps, session recordings and rage-click detection are being collected automatically.
                </p>
                <a href="{{ $clarityDashboardUrl }}" target="_blank" rel="noopener" class="btn btn-primary btn-lg">
                    <i class="bi bi-box-arrow-up-right me-2"></i>Open Microsoft Clarity Dashboard
                </a>
                <p class="small text-muted mt-3 mb-0">
                    Opens the official Clarity dashboard in a new tab — Clarity's own terms of use don't permit embedding it in an iframe.
                </p>
            @else
                <h2 class="h5 mb-2">Microsoft Clarity Not Connected</h2>
                <p class="text-muted mb-4">
                    Add your Clarity Project ID in Analytics Settings to start collecting session recordings and heatmaps.
                </p>
                <a href="{{ safe_route('admin.settings.edit', 'analytics') }}" class="btn btn-primary">
                    <i class="bi bi-gear me-2"></i>Go to Analytics Settings
                </a>
            @endif
        </div>
    </div>
@endsection
