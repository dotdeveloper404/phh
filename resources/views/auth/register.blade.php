@if ($errors->any())
    @dd($errors->all())
@endif
@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex justify-content-center">
        <!--begin::Body-->
        <div class="d-flex flex-center w-lg-50 p-10">
            <!--begin::Card-->
            <div class="card rounded-3 w-md-550px d-none">
                <!--begin::Card body-->
                <div class="card-body p-10 p-lg-20">
                    <!--begin::User Form-->
                    <form class="form w-100 d-none cx-form" id="kt_sign_up_form" action="{{ route('register') }}"
                        method="POST">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                            <!--end::Title-->
                        </div>
                        <!--begin::Heading-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Name-->
                            <label for="name" class="form-label"><b>Name</b></label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name"
                                class="form-control bg-transparent @error('name') is-invalid @enderror" required />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Name-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::DOB-->
                            <label for="dob" class="form-label"><b>Date of Birth</b></label>
                            <input type="date" name="dob" value="{{ old('dob') }}" id="dob"
                                class="form-control bg-transparent @error('dob') is-invalid @enderror" required />
                            @error('dob')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::DOB-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <label for="expiry" class="form-label"><b>Driver license expiry & state</b></label>
                            <!--begin::Driver License-->
                            <div class="d-flex">
                                <div class="flex-equal">
                                    <input type="date" placeholder="Expiry" name="dl_expiry"
                                        value="{{ old('dl_expiry') }}" id="expiry"
                                        class="form-control bg-transparent me-1 @error('dl_expiry') is-invalid @enderror"
                                        required />
                                    @error('dl_expiry')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="flex-equal">
                                    <input type="text" placeholder="State" name="dl_state" value="{{ old('dl_state') }}"
                                        class="form-control bg-transparent @error('dl_state') is-invalid @enderror"
                                        required />
                                    @error('dl_state')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <!--end::Driver License-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Phone-->
                            <label for="phone" class="form-label"><b>Phone</b></label>
                            <input type="text" name="phone" value="{{ old('phone') }}" id="phone"
                                class="form-control bg-transparent @error('phone') is-invalid @enderror" required />
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Phone-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Email-->
                            <label for="email" class="form-label"><b>Email address</b></label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email"
                                class="form-control bg-transparent @error('email') is-invalid @enderror" required />
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Email-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Password-->
                            <label for="password" class="form-label"><b>Password</b></label>
                            <input type="password" name="password" id="password"
                                class="form-control bg-transparent @error('password') is-invalid @enderror" required />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Password-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Pwd confirm-->
                            <label for="password_confirmation" class="form-label"><b>Confirm Password</b></label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control bg-transparent" required />
                            <!--end::Pwd confirm-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Submit button-->
                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                Sign up
                            </button>
                        </div>
                        <!--end::Submit button-->

                        <!--begin::Sign up-->
                        <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
                            <a href="{{ route('login') }}" class="link-primary fw-semibold">Sign in</a>
                        </div>
                        <!--end::Sign up-->
                    </form>
                    <!--end::Form-->

                    <!--begin::Restaurant Form-->
                    <form class="form w-100 d-none res-form" id="kt_sign_up_form" action="{{ route('register') }}"
                        method="POST">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                            <!--end::Title-->
                        </div>
                        <!--begin::Heading-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Name-->
                            <label for="name" class="form-label"><b>Name</b></label>
                            <input type="text" name="name" value="{{ old('name') }}" id="name"
                                class="form-control bg-transparent @error('name') is-invalid @enderror" required />
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Name-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Business Name-->
                            <label for="bis-name" class="form-label"><b>Business Name</b></label>
                            <input type="text" name="rest_name" value="{{ old('rest_name') }}" id="bis-name"
                                class="form-control bg-transparent @error('rest_name') is-invalid @enderror" required />
                            @error('rest_name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Business Name-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Tax-->
                            <label for="tax" class="form-label"><b>Tax id</b></label>
                            <input type="text" name="tax_id" value="{{ old('tax_id') }}" id="tax"
                                class="form-control bg-transparent @error('tax_id') is-invalid @enderror" required />
                            @error('tax_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Tax-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Phone-->
                            <label for="phone" class="form-label"><b>Phone</b></label>
                            <input type="text" name="phone" value="{{ old('phone') }}" id="phone"
                                class="form-control bg-transparent @error('phone') is-invalid @enderror" required />
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Phone-->
                        </div>
                        <!--end::Input group=-->


                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Email-->
                            <label for="email" class="form-label"><b>Email Address</b></label>
                            <input type="email" name="email" value="{{ old('email') }}" id="email"
                                class="form-control bg-transparent @error('email') is-invalid @enderror" required />
                            <small class="form-text text-muted">*email must contain a business domain.</small>
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Email-->
                        </div>
                        <!--end::Input group=-->


                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Email-->
                            <label for="call" class="form-label"><b>Call Time</b></label>
                            <input type="datetime-local" name="call_date_time" value="{{ old('call_date_time') }}" id="call" min="2022-11-23T00:00" max="2022-11-23T23:59"
                                class="form-control bg-transparent @error('call_date_time') is-invalid @enderror" required />
                            @error('call_date_time')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Email-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Password-->
                            <label for="password" class="form-label"><b>Password</b></label>
                            <input type="password" name="password" id="password"
                                class="form-control bg-transparent @error('password') is-invalid @enderror" required />
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <!--end::Password-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::Pwd confirm-->
                            <label for="password_confirmation" class="form-label"><b>Confirm Password</b></label>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                class="form-control bg-transparent" required />
                            <!--end::Pwd confirm-->
                        </div>
                        <!--end::Input group=-->

                        <!--begin::Submit button-->
                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                                Sign up
                            </button>
                        </div>
                        <!--end::Submit button-->

                        <!--begin::Sign up-->
                        <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account?
                            <a href="{{ route('login') }}" class="link-primary fw-semibold">Sign in</a>
                        </div>
                        <!--end::Sign up-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::Authentication - Sign-up-->


    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div style="height: 85vh">
                        <div class="row h-100">
                            <div class="col-6">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <div class="text-center">
                                        <button class="btn btn-primary user-btn mb-5" id="cx-btn">
                                            Customer<br>
                                            <i class="fa-solid fa-user user-icon"></i>
                                        </button>
                                        <p class="display-5 fw-light">Enjoy PreHappyHour Deals..</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex justify-content-center align-items-center h-100">
                                    <div class="text-center">
                                        <button class="btn btn-primary user-btn mb-5" id="res-btn">
                                            Partner<br>
                                            <i class="fa-solid fa-handshake user-icon"></i>
                                        </button>

                                        <p class="display-5 fw-light">Sign up as a Partner</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        #userModal .user-icon {
            font-size: 30px
        }

        #userModal .user-btn {
            font-size: 20px
        }
    </style>
@endpush

@push('scripts')
    <script>
        let modal;
        $(function() {
            modal = new bootstrap.Modal('#userModal', {
                backdrop: 'static',
                keyboard: false
            })

            modal.show()
        })

        $('#cx-btn').on('click', function() {
            $('.card').removeClass('d-none')
            $('.cx-form').removeClass('d-none')
            modal.hide()
        })

        $('#res-btn').on('click', function() {
            $('.card').removeClass('d-none')
            $('.res-form').removeClass('d-none')
            modal.hide()
        })

        $('.cx-form').on('submit', function() {
            event.preventDefault()
            $("<input />").attr("type", "hidden")
                .attr("name", "type")
                .attr("value", "cx")
                .appendTo(".cx-form");
            $(this)[0].submit()
        })
        $('.res-form').on('submit', function() {
            event.preventDefault()
            $("<input />").attr("type", "hidden")
                .attr("name", "type")
                .attr("value", "res")
                .appendTo(".res-form");
            $(this)[0].submit()
        })
    </script>
@endpush
