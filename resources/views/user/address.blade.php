@include('user.includes.header')

<!-- page-title -->
<div class="tf-page-title">
    <div class="container-full">
        <div class="heading text-center">Address</div>
    </div>
</div>
<!-- /page-title -->

<!-- page-cart -->
<section class="flat-spacing-11">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                @include('user.includes.account-nav')
            </div>
            <div class="col-lg-9">
                <div class="my-account-content account-address">
                    <div class="text-center widget-inner-address">
                        <button class="tf-btn btn-fill animate-hover-btn btn-address mb_20">Add a new address</button>

                        <!-- Add Address Form -->
                        <form class="show-form-address wd-form-address" method="POST" action="{{ route('users.addresses.store') }}">
                            @csrf
                            <div class="title">Add a new address</div>
                            <div class="box-field grid-2-lg">
                                <div class="tf-field style-1">
                                    <input class="tf-field-input tf-input" type="text" name="first_name" required>
                                    <label class="tf-field-label fw-4 text_black-2">First name</label>
                                </div>
                                <div class="tf-field style-1">
                                    <input class="tf-field-input tf-input" type="text" name="last_name" required>
                                    <label class="tf-field-label fw-4 text_black-2">Last name</label>
                                </div>
                            </div>
                            <div class="box-field">
                                <div class="tf-field style-1">
                                    <input class="tf-field-input tf-input" type="text" name="company">
                                    <label class="tf-field-label fw-4 text_black-2">Company</label>
                                </div>
                            </div>
                            <div class="box-field">
                                <div class="tf-field style-1">
                                    <input class="tf-field-input tf-input" type="text" name="address" required>
                                    <label class="tf-field-label fw-4 text_black-2">Address</label>
                                </div>
                            </div>
                            <div class="box-field">
                                <div class="tf-field style-1">
                                    <input class="tf-field-input tf-input" type="text" name="city" required>
                                    <label class="tf-field-label fw-4 text_black-2">City</label>
                                </div>
                            </div>
                            <div class="box-field">
                                <div class="tf-field style-1">
                                    <input class="tf-field-input tf-input" type="text" name="country" required>
                                    <label class="tf-field-label fw-4 text_black-2">Country</label>
                                </div>
                            </div>
                            <div class="box-field">
                                <div class="tf-field style-1">
                                    <input class="tf-field-input tf-input" type="text" name="province">
                                    <label class="tf-field-label fw-4 text_black-2">Province</label>
                                </div>
                            </div>
                            <div class="box-field">
                                <div class="tf-field style-1">
                                    <input class="tf-field-input tf-input" type="text" name="zip_code" required>
                                    <label class="tf-field-label fw-4 text_black-2">ZIP Code</label>
                                </div>
                            </div>
                            <div class="box-field">
                                <div class="tf-field style-1">
                                    <input class="tf-field-input tf-input" type="text" name="phone" required>
                                    <label class="tf-field-label fw-4 text_black-2">Phone</label>
                                </div>
                            </div>
                            <div class="box-field text-start">
                                <div class="box-checkbox fieldset-radio d-flex align-items-center gap-8">
                                    <input type="checkbox" name="is_default" value="1" id="check-new-address" class="tf-check">
                                    <label for="check-new-address" class="text_black-2 fw-4">Set as default address.</label>
                                </div>
                            </div>
                            <div class="d-flex align-items-center justify-content-center gap-20">
                                <button type="submit" class="tf-btn btn-fill animate-hover-btn">Add address</button>
                            </div>
                        </form>

                        <!-- Address List -->
                        <div class="list-account-address">
    @foreach ($addresses as $address)
        <div class="account-address-item">
            <h6 class="mb_20">{{ $address->is_default ? 'Default' : 'Address' }}</h6>
            <p>{{ $address->first_name }} {{ $address->last_name }}</p>
            <p>{{ $address->address }}</p>
            <p>{{ $address->city }}, {{ $address->country }}</p>
            <p>{{ $address->phone }}</p>
            <div class="d-flex gap-10 justify-content-center">
                <button class="tf-btn btn-fill animate-hover-btn justify-content-center btn-edit-address">
                    <span>Edit</span>
                </button>
                <form method="POST" action="{{ route('users.addresses.destroy', $address->id) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="tf-btn btn-outline animate-hover-btn justify-content-center">
                        <span>Delete</span>
                    </button>
                </form>
            </div>

            {{-- Edit Form --}}
            <form class="edit-form-address wd-form-address" method="POST" action="{{ route('users.addresses.update', $address->id) }}">
                @csrf
                @method('PUT')
                <div class="title">Edit address</div>
                <div class="box-field grid-2-lg">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" type="text" name="first_name" placeholder=" " value="{{ $address->first_name }}">
                        <label class="tf-field-label fw-4 text_black-2">First name</label>
                    </div>
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" type="text" name="last_name" placeholder=" " value="{{ $address->last_name }}">
                        <label class="tf-field-label fw-4 text_black-2">Last name</label>
                    </div>
                </div>
                <div class="box-field">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" type="text" name="company" placeholder=" " value="{{ $address->company }}">
                        <label class="tf-field-label fw-4 text_black-2">Company</label>
                    </div>
                </div>
                <div class="box-field">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" type="text" name="address" placeholder=" " value="{{ $address->address }}">
                        <label class="tf-field-label fw-4 text_black-2">Address</label>
                    </div>
                </div>
                <div class="box-field">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" type="text" name="city" placeholder=" " value="{{ $address->city }}">
                        <label class="tf-field-label fw-4 text_black-2">City</label>
                    </div>
                </div>
                <div class="box-field">
                    <label class="mb_10 fw-4 text-start d-block text_black-2">Country/Region</label>
                    <div class="select-custom">
                        <select class="tf-select w-100" name="country">
                            <option value="India" {{ $address->country == 'India' ? 'selected' : '' }}>India</option>
                            <option value="United States" {{ $address->country == 'United States' ? 'selected' : '' }}>United States</option>
                            <option value="Vietnam" {{ $address->country == 'Vietnam' ? 'selected' : '' }}>Vietnam</option>
                            <!-- Add more countries as needed -->
                        </select>
                    </div>
                </div>
                <div class="box-field">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" type="text" name="zip" placeholder=" " value="{{ $address->zip }}">
                        <label class="tf-field-label fw-4 text_black-2">Postal/ZIP code</label>
                    </div>
                </div>
                <div class="box-field">
                    <div class="tf-field style-1">
                        <input class="tf-field-input tf-input" type="text" name="phone" placeholder=" " value="{{ $address->phone }}">
                        <label class="tf-field-label fw-4 text_black-2">Phone</label>
                    </div>
                </div>
                <div class="box-field text-start">
                    <div class="box-checkbox fieldset-radio d-flex align-items-center gap-8">
                        <input type="checkbox" name="is_default" value="1" id="check-edit-address-{{ $address->id }}" class="tf-check" {{ $address->is_default ? 'checked' : '' }}>
                        <label for="check-edit-address-{{ $address->id }}" class="text_black-2 fw-4">Set as default address.</label>
                    </div>
                </div>
                <div class="d-flex align-items-center justify-content-center gap-20">
                    <button type="submit" class="tf-btn btn-fill animate-hover-btn">Update address</button>
                    <span class="tf-btn btn-fill animate-hover-btn btn-hide-edit-address">Cancel</span>
                </div>
            </form>
        </div>
    @endforeach
</div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-cart -->

<div class="btn-sidebar-account">
    <button data-bs-toggle="offcanvas" data-bs-target="#mbAccount" aria-controls="offcanvas">
        <i class="icon icon-sidebar-2"></i>
    </button>
</div>

@include('user.includes.footer')
