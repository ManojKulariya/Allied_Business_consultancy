@extends('admin.layouts.guest')

@section('title', 'Admin Login')
@section('subtitle', 'Sign in to your account')

@section('content')
    @if(session('success'))
        <div class="alert alert-success py-2 small">{{ session('success') }}</div>
    @endif

    <form method="POST" action="{{ route('admin.login.attempt') }}" novalidate>
        @csrf

        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                <input type="email" name="email" id="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}" required autofocus autocomplete="username"
                       placeholder="admin@example.com">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-group">
                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                <input type="password" name="password" id="password"
                       class="form-control @error('password') is-invalid @enderror"
                       required autocomplete="current-password" placeholder="••••••••">
                <button type="button" class="btn btn-outline-secondary" id="togglePassword" tabindex="-1">
                    <i class="bi bi-eye"></i>
                </button>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
                <input type="checkbox" name="remember" id="remember" value="1"
                       class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember" class="form-check-label small">Remember me</label>
            </div>
            <a href="{{ route('admin.password.request') }}" class="small text-decoration-none">Forgot password?</a>
        </div>

        <button type="submit" class="btn btn-primary w-100 py-2">
            <i class="bi bi-box-arrow-in-right me-1"></i> Sign In
        </button>
    </form>
@endsection

@push('scripts')
<script>
    document.getElementById('togglePassword').addEventListener('click', function () {
        const input = document.getElementById('password');
        const icon = this.querySelector('i');
        const show = input.type === 'password';
        input.type = show ? 'text' : 'password';
        icon.classList.toggle('bi-eye', !show);
        icon.classList.toggle('bi-eye-slash', show);
    });
</script>
@endpush
