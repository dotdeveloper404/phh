@extends('app')

@section('content')
    <section class="breadcrum-header">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </div>
    </section>


    <section class="contactus-section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="contact-wrapper">
                        <img src="{{ asset('assets/images/grey-map.jpg') }}">
                        <div class="contact-detail">
                            <ul>
                                <li>
                                    <h3>Email Address</h3><br>
                                    johnsmith@company.com <br>
                                    youoffice@company.com
                                </li>
                                <li>
                                    <h3>User Address</h3><br>
                                    24058, Belgium, Brussels, Liutte 27 United State
                                </li>
                                <li>
                                    <h3>Phone Number</h3><br>
                                    +1 256 254 84 56 <br>
                                    +123 - 456-7890
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-faq">
                        <span>Request A Free Consultation</span>
                        <h2>Frequently Asked <span>Question?</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur lor ilime ilime adipissom unice nas nibh dolor, met
                            bibendum elit uilimes nsectetur elit.</p>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="contact-form">
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <input type="text" name="name" id="" required
                                        class="form-control @error('name') is-invalid @enderror" placeholder="Full Name">
                                    @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <input type="text" name="email" id="" required
                                        class="form-control @error('email') is-invalid @enderror"
                                        placeholder="Email Addess">
                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <input type="text" name="phone" id="" required
                                        class="form-control @error('phone') is-invalid @enderror" placeholder="Phone No">
                                    @error('phone')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <textarea required placeholder="Message" name="message" rows="10"
                                        class="form-control @error('message') is-invalid @enderror"></textarea>
                                    @error('message')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <button>Start Discussion</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@pushIf(session()->has('form-submitted'), 'scripts')
<script>
    $(function() {
        @if (session()->get('form-submitted'))
            swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Form submitted'
            })
        @else
            swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'Something went wrong!!'
            })
        @endif
    })
</script>
@endPushIf
