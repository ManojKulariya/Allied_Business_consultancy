@extends('admin.layouts.app')

@section('title', 'My Profile')

@section('breadcrumbs')
    <li class="breadcrumb-item active">My Profile</li>
@endsection

@section('content')
    <h1 class="h4 mb-4">My Profile</h1>

    <div class="row g-3">
        {{-- Profile details --}}
        <div class="col-lg-7">
            <div class="card">
                <div class="card-header">Profile Information</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="d-flex align-items-center gap-3 mb-4">
                            <img src="{{ $user->avatar_url }}" alt="{{ $user->name }}" id="avatarPreview"
                                 class="rounded-circle" width="72" height="72" style="object-fit: cover;">
                            <div>
                                <label for="avatar" class="form-label mb-1">Avatar</label>
                                <input type="file" name="avatar" id="avatar" accept="image/*"
                                       class="form-control form-control-sm image-input @error('avatar') is-invalid @enderror"
                                       data-preview="#avatarPreview">
                                @error('avatar')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <div class="form-text">JPG, PNG or WEBP. Max 2 MB.</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="name"
                                       class="form-control @error('name') is-invalid @enderror"
                                       value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="email"
                                       class="form-control @error('email') is-invalid @enderror"
                                       value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" name="phone" id="phone"
                                       class="form-control @error('phone') is-invalid @enderror"
                                       value="{{ old('phone', $user->phone) }}">
                                @error('phone')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-12">
                                <label for="bio" class="form-label">Bio</label>
                                <textarea name="bio" id="bio" rows="3"
                                          class="form-control @error('bio') is-invalid @enderror">{{ old('bio', $user->bio) }}</textarea>
                                @error('bio')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-check-lg me-1"></i> Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Change password --}}
        <div class="col-lg-5">
            <div class="card" id="change-password">
                <div class="card-header">Change Password</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.profile.password') }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="current_password" class="form-label">Current Password <span class="text-danger">*</span></label>
                            <input type="password" name="current_password" id="current_password"
                                   class="form-control @error('current_password') is-invalid @enderror"
                                   required autocomplete="current-password">
                            @error('current_password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">New Password <span class="text-danger">*</span></label>
                            <input type="password" name="password" id="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   required autocomplete="new-password">
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="form-text">Minimum 8 characters with letters and numbers.</div>
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Confirm New Password <span class="text-danger">*</span></label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="form-control" required autocomplete="new-password">
                        </div>

                        <button type="submit" class="btn btn-warning">
                            <i class="bi bi-key me-1"></i> Update Password
                        </button>
                    </form>
                </div>
            </div>

            {{-- Account meta --}}
            <div class="card mt-3">
                <div class="card-header">Account Details</div>
                <ul class="list-group list-group-flush small">
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted">Role</span>
                        <span>{{ $user->getRoleNames()->map(fn($r) => ucwords(str_replace('-', ' ', $r)))->join(', ') ?: '—' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted">Last Login</span>
                        <span>{{ $user->last_login_at?->format('d M Y, h:i A') ?? 'First session' }}</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span class="text-muted">Member Since</span>
                        <span>{{ $user->created_at->format('d M Y') }}</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
