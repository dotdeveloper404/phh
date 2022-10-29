@extends('app')

@section('content')
    <section class="deals-section">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h2> <br><span>CHECKOUT</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <ul class="deals-list">
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <main class="">
        <div class="container px-6 mx-auto cartlist">
            <div class="row">
                <div class="col-6">
                    <div class="p-5">
                        <h1 class="mb-4">Enter Card details</h1>
                        <form action="{{ route('checkout.do_checkout') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="card_name" class="form-label">Name on Card</label>
                                        <input type="text" class="form-control @error('card_name') is-invalid @enderror"
                                            name="card_name" id="card_name" value="{{ old('card_name') }}">
                                        @error('card_name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="card_number" class="form-label">Card Number</label>
                                        <input type="number"
                                            class="form-control @error('card_number') is-invalid @enderror"
                                            name="card_number" id="card_number" value="{{ old('card_number') }}">
                                        @error('card_number')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="validity" class="form-label">Validility</label>
                                        <div class="d-flex">
                                            <input type="number" name="month" id="validity"
                                                class="form-control me-1 @error('month') is-invalid @enderror"
                                                placeholder="Month">
                                            <input type="number" name="year"
                                                class="form-control ms-1 @error('year') is-invalid @enderror"
                                                placeholder="Year">
                                        </div>
                                        @error('month')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        @error('year')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-3">
                                        <label for="cvc" class="form-label">CVC</label>
                                        <input type="number" class="form-control @error('cvc') is-invalid @enderror"
                                            name="cvc" id="cvc" value="{{ old('cvc') }}">
                                        @error('cvc')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <input type="submit" value="Confirm Order" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-6">
                    <table class="table table-striped" cellspacing="0">
                        <thead class="thead-dark">
                            <tr class="h-12 uppercase">
                                <th class="text-left">Name</th>
                                <th class="">Quantity</th>
                                <th class="">Price</th>
                                <th class="">Sub Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cartItems as $item)
                                <tr>
                                    <td>
                                        <a href="#">
                                            <p class="mb-2 md:ml-4">{{ $item->name }}</p>
                                        </a>
                                    </td>
                                    <td class="justify-center mt-6 md:justify-end md:flex">
                                        <div class="h-10 w-28">
                                            <div class="relative flex flex-row w-full h-8">
                                                <span class="text-sm font-medium lg:text-base">
                                                    {{ $item->quantity }}
                                                </span>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="hidden text-right md:table-cell">
                                        <span class="text-sm font-medium lg:text-base">
                                            ${{ $item->price }}
                                        </span>
                                    </td>
                                    <td>${{ $item->getPriceSum() }}</td>
                                </tr>
                            @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <b>
                                        Total: ${{ Cart::getTotal() }}
                                    </b>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
