@extends('admin.layouts.guest')

@section('title', 'Forgot Password')
@section('subtitle', 'Reset your password')

@section('content')
    <p class="text-muted small mb-4">
        Enter your email address and we'll send you a link to reset your password.
    </p>

    @if(session('success'))
        <div class="alert alert-success py-2 small">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.password.email') }}" novalidate>
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" id="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" required autofocus
                       placeholder="admin@example.com">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100 py-2 mb-3">
            <i class="bi bi-send me-1"></i> Send Reset Link
        </button>

        <div class="text-center">
            <a href="{{ route('admin.login') }}" class="small text-decoration-none">
                <i class="bi bi-arrow-left me-1"></i> Back to login
            </a>
        </div>
    </form>
@endsection
