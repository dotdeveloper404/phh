@extends('app')

@section('title', 'Checkout')

@section('content')
    <section class="breadcrum-header">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1>Checkout</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="checkout-section contactus-section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="row-cus">
                        <div class="col-75">
                            <div class="container-inner">
                                <form action="{{ route('checkout.do_checkout') }}" method="POST">
                                    @csrf
                                    <div class="row-cus">
                                        <div class="col-50">
                                            <h3 class="mb-4">Billing Address</h3>
                                            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                                            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
                                            <label for="email"><i class="fa fa-envelope"></i> Email</label>
                                            <input type="text" id="email" name="email"
                                                placeholder="john@example.com">
                                            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                                            <input type="text" id="adr" name="address"
                                                placeholder="542 W. 15th Street">
                                            <label for="city"><i class="fa fa-institution"></i> City</label>
                                            <input type="text" id="city" name="city" placeholder="New York">

                                            <div class="row">
                                                <div class="col-50">
                                                    <label for="state">State</label>
                                                    <input type="text" id="state" name="state" placeholder="NY">
                                                </div>
                                                <div class="col-50">
                                                    <label for="zip">Zip</label>
                                                    <input type="text" id="zip" name="zip" placeholder="10001">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-50">
                                            <h3 class="mb-4">Card Details</h3>
                                            <label for="cname">Name on Card</label>
                                            <input type="text" id="cname" name="cardname"
                                                placeholder="John More Doe">
                                            <label for="ccnum">Credit card number</label>
                                            <input type="text" id="ccnum" name="cardnumber"
                                                placeholder="1111-2222-3333-4444">
                                            <label for="expmonth">Exp Month</label>
                                            <input type="text" id="expmonth" name="expmonth" placeholder="September">
                                            <div class="row">
                                                <div class="col-50">
                                                    <label for="expyear">Exp Year</label>
                                                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                                                </div>
                                                <div class="col-50">
                                                    <label for="cvv">CVV</label>
                                                    <input type="text" id="cvv" name="cvv" placeholder="352">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <label>
                                        <input type="checkbox" checked="checked" name="sameadr"> Shipping address same
                                        as billing
                                    </label>
                                    <input type="submit" value="Confirm Order" class="btn btn-danger">
                                </form>
                            </div>
                        </div>
                        <div class="col-25">
                            <div class="container-inner">
                                <h4 class="mb-4">
                                    Cart
                                    <span class="price" style="color:black">
                                        <i class="fa fa-shopping-cart"></i> <b>{{ Cart::getTotalQuantity() }}</b>
                                    </span>
                                </h4>
                                @foreach ($cartItems as $item)
                                    <p><span>{{ $item->name }}</span> <span
                                            class="price">{{ $item->getPriceSum() }}</span></p>
                                @endforeach
                                <hr>
                                <p>Total <span class="price" style="color:black"><b>${{ Cart::getTotal() }}</b></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
