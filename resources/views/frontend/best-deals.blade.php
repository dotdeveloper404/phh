@extends('app')

@section('title', 'Best Deals')

@section('content')
    <section class="breadcrum-header">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1>Best Deals</h1>
                </div>
            </div>
        </div>
    </section>

    <x-deals-section :$products></x-deals-section>

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
                        <img src="images/beer-mug-bottle.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

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
