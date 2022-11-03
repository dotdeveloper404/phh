@extends('app')

@section('title', 'Home')

@section('content')
    <section class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="parallax-wrapper">
                        <div class="parallax-img scrollblock" id="parallax-head">
                            <img src="{{ asset('assets/images/large-chips-1.png') }}" alt="" class="chip1"
                                data-aos="fade-down" data-aos-duration="1000" data-aos-delay="3s">
                            <img src="{{ asset('assets/images/small-ships-blur.png') }}" alt="" class="chip2">
                            <img src="{{ asset('assets/images/burger.png') }}" alt="" class="burger"
                                data-aos="zoom-in-left" data-aos-duration="2000">
                            <img src="{{ asset('assets/images/wyn-glass.png') }}" alt="" class="mug"
                                data-aos="fade-left" data-aos-duration="2000" data-aos-delay="4s">
                            <img src="{{ asset('assets/images/small-ships-blur.png') }}" alt="" class="chip5"
                                data-aos="zoom-in-left" data-aos-duration="1500">
                            <img src="{{ asset('assets/images/small-ships.png') }}" alt="" class="chip3"
                                data-aos="zoom-out-right" data-aos-duration="1500">
                            <img src="{{ asset('assets/images/large-chips-blur.png') }}" alt="" class="chip4">
                        </div>
                        <div class="parallax-content">
                            <h1>Happy <br> Hour</h1>
                            <a href="#">Don't Be late</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <img src="{{ asset('assets/images/about-img.png') }}" alt="" data-aos="zoom-in"
                        class="img-fluid">
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="about-wrapper" data-aos="fade-left">
                        <h2>What is <br><span>pre happy hour</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                            mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                            accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
                            veritatis et quasi architecto beatae vitae dicta sunt explicabo. </p>
                        <a href="#" class="view-btn">View Deals</a>
                        <a href="#" class="available-btn">Available Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="howitwork-section beer-section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="howitwork-wrapper">
                        <h2 data-aos="fade-right">How to <br><span>Pre Happy Hour</span></h2>
                        <ul data-aos="fade-down">
                            <li>
                                <span>Step1:</span>
                                <i class="fas fa-sign-in-alt"></i>
                                <p>Sign up and Register</p>
                            </li>
                            <li>
                                <span>Step2:</span>
                                <i class="fas fa-utensils"></i>
                                <p>Select bar/restaurant</p>
                            </li>
                            <li>
                                <span>Step3:</span>
                                <i class="fas fa-hamburger"></i>
                                <p>Select Drinks and Food</p>
                            </li>
                            <li>
                                <span>Step4:</span>
                                <i class="fas fa-credit-card"></i>
                                <p>Pay</p>
                            </li>
                            <li>
                                <span>Step5:</span>
                                <i class="fas fa-envelope"></i>
                                <p>Receive text / email with 6 digit code</p>
                            </li>
                            <li>
                                <span>Step6:</span>
                                <i class="fas fa-id-card"></i>
                                <p>Present to ID and provide 6 <br>digit code to server or bartender</p>
                            </li>
                            <li>
                                <span>Step7:</span>
                                <i class="fas fa-couch"></i>
                                <p>Relax and Enjoy</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="beer-section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="beer-content">
                        <h2>Beer &amp; Much More <br><span>DISCOVER OUR MENUS WITH BEER INCLUDED</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <a href="#">View Deals</a>
                    </div>
                </div>
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12">
                    <div class="beer-img-content">
                        <div class="circle">hurry UP! <br>GRAB THE <br> BEERS DEALS</div>
                        <img src="{{ asset('assets/images/beer-mug-bottle.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section class="deals-section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2> <br><span>Gallagher’s</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <ul class="deals-list">
                        @foreach ($products as $product)
                            <li>
                                <div class="list-data">
                                    <div class="deals-img">
                                        <img src="{{ asset($product->image) }}" alt="">
                                    </div>
                                    <div class="deals-content">
                                        <h3>{{ $product->name }}</h3>
                                        <p>{{ $product->description }}</p>
                                        <span>${{ $product->price }}</span>
                                        <form action="{{ route('cart.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $product->id }}" name="id">
                                            <input type="hidden" value="{{ $product->name }}" name="name">
                                            <input type="hidden" value="{{ $product->price }}" name="price">
                                            <input type="hidden" value="{{ $product->image }}" name="image">
                                            <input type="hidden" value="1" name="quantity">
                                            <button class="px-4 py-2 btn_add_to_cart"><i
                                                    class="fas fa-shopping-basket"></i>Add To Cart</button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}

    <x-deals-section :$products></x-deals-section>

    <section class="testimonials-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 background-img">&amp;</div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 background-color">
                    <div class="review-wrapper">
                        <h2>Client <br> <span>Reviews</span></h2>
                        <div class="review-carousel">
                            <ul class="bxslider">
                                <li>
                                    <p>‘Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation</p>
                                    <h3>Jhony</h3>
                                    <span>Lorem ipsum dolor sit amet,</span>
                                </li>
                                <li>
                                    <p>‘Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation</p>
                                    <h3>Jhony</h3>
                                    <span>Lorem ipsum dolor sit amet,</span>
                                </li>
                                <li>
                                    <p>‘Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation</p>
                                    <h3>Jhony</h3>
                                    <span>Lorem ipsum dolor sit amet,</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@pushIf(session()->has('order_placed'), 'scripts')
    @php
        $data = Session::get('order_placed');
    @endphp

    <script>
        $(function() {
            @if ($data['success'])
                swal.fire({
                    icon: 'success',
                    title: 'Success',
                    html: "{{ $data['message'] }}<br/><b>Code: {{ $data['code'] }}</b>"
                })
            @else
                swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: "{{ $data['message'] }}"
                })
            @endif
        })
    </script>
@endPushIf
