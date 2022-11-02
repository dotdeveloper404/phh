@extends('layouts.guest')

@section('title', 'Register')

@section('content')
    <!--begin::Authentication - Sign-up -->
    <div class="d-flex justify-content-center">
        <!--begin::Body-->
        <div class="d-flex flex-center w-lg-50 p-10">
            <!--begin::Card-->
            <div class="card rounded-3 w-md-550px">
                <!--begin::Card body-->
                <div class="card-body p-10 p-lg-20">
                    <!--begin::Form-->
                    <form class="form w-100" id="kt_sign_up_form" action="{{ route('register') }}" method="POST">
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
                            <input type="text" placeholder="Name" name="name" value="{{ old('name') }}"
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
                            <!--begin::Email-->
                            <input type="email" placeholder="Email" name="email" value="{{ old('email') }}"
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
                            <input type="password" placeholder="Password" name="password"
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
                            <input type="password" placeholder="Confirm Password" name="password_confirmation"
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
@endsection
