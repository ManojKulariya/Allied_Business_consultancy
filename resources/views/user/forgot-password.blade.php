@include('user.includes.header')

<div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Reset Password</div>
    </div>
</div>

<section class="flat-spacing-10">
    <div class="container">
        <div class="tf-login-form">
            <form method="POST" action="{{ route('users.password.email') }}">
                @csrf

                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="tf-field style-1 mb_15">
                    <input class="tf-field-input tf-input" placeholder=" " type="email" name="email" required value="{{ old('email') }}">
                    <label class="tf-field-label fw-4 text_black-2">Email *</label>
                </div>

                <div class="mb_20">
                    <a href="{{ route('users.login') }}" class="tf-btn btn-line">Back to Login</a>
                </div>

                <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">
                    Send Password Reset Link
                </button>
            </form>
        </div>
    </div>
</section>

@include('user.includes.footer')
