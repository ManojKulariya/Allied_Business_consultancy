@include('user.includes.header')

<!-- page-title -->
<div class="tf-page-title style-2">
    <div class="container-full">
        <div class="heading text-center">Reset Password</div>
    </div>
</div>
<!-- /page-title -->

<section class="flat-spacing-10">
    <div class="container">
        <div class="tf-grid-layout lg-col-2 tf-login-wrap">
            <div class="tf-login-form">
                <h5 class="mb_36">Set a new password</h5>

                {{-- Status & Error Messages --}}
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif
                @if ($errors->any())
                    <div class="alert alert-danger mb_20">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf

                    <input type="hidden" name="token" value="{{ $token }}">
                    <input type="hidden" name="email" value="{{ $email }}">

                    <div class="tf-field style-1 mb_15">
                        <input class="tf-field-input tf-input" type="password" name="password" placeholder=" " required>
                        <label class="tf-field-label fw-4 text_black-2">New Password *</label>
                    </div>

                    <div class="tf-field style-1 mb_30">
                        <input class="tf-field-input tf-input" type="password" name="password_confirmation" placeholder=" " required>
                        <label class="tf-field-label fw-4 text_black-2">Confirm Password *</label>
                    </div>

                    <div class="mb_20">
                        <button type="submit" class="tf-btn w-100 radius-3 btn-fill animate-hover-btn justify-content-center">
                            Reset Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('user.includes.footer')
