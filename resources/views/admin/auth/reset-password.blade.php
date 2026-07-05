@extends('admin.layouts.guest')

@section('title', 'Reset Password')
@section('subtitle', 'Choose a new password')

@section('content')
    <form method="POST" action="{{ route('admin.password.update') }}" novalidate>
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" id="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email', $email) }}" required autofocus>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">New Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" id="password"
                       class="form-control @error('password') is-invalid @enderror"
                       required autocomplete="new-password" placeholder="Min. 8 characters">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-4">
            <label for="password_confirmation" class="form-label">Confirm New Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                <input type="password" name="password_confirmation" id="password_confirmation"
                       class="form-control" required autocomplete="new-password">
            </div>
        </div>

        <button type="submit" class="btn btn-primary w-100 py-2">
            <i class="bi bi-shield-check me-1"></i> Reset Password
        </button>
    </form>
@endsection
