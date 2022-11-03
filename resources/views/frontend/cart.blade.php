@extends('app')

@section('title', 'Cart')

@section('content')
    <section class="breadcrum-header">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <h1>Cart</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="cart-section contactus-section">
        <div class="container">
            <div class="row">
                @if ($message = Session::get('success'))
                    <div class="col-12 mb-5">
                        <div class="alert alert-success alert-dismissible" role="alert">
                            {{ $message }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($cartItems as $item)
                                    <tr class="align-middle">
                                        <td>
                                            <img src="{{ $item->attributes->image }}" alt="Thumbnail" style="width: 70px;height: 70px;">
                                        </td>
                                        <td>
                                            {{ $item->name }}
                                        </td>
                                        <td>
                                            {{ $item->price }}
                                        </td>
                                        <td>
                                            <form action="{{ route('cart.update') }}" method="POST" class="d-flex">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                <input type="number" name="quantity" value="{{ $item->quantity }}" class="form-control w-25 me-3" />
                                                <button type="submit" class="btn_update_to_cart btn btn-primary">Update</button>
                                            </form>
                                        </td>
                                        <td>
                                            <form action="{{ route('cart.remove') }}" method="POST">
                                                @csrf
                                                <input type="hidden" value="{{ $item->id }}" name="id">
                                                <button class="btn btn-danger">x</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No items added to cart</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div style="float:right;">
                            <div class="text-end">
                                <b>Total: ${{ Cart::getTotal() }}</b>
                            </div>

                            <div class="d-flex">
                                <button class="btn btn-danger me-2" onclick="$('#clear-cart').submit()">Remove All Cart</button>
                                <a href="{{ route('checkout') }}" class="btn btn-primary">Checkout</a>
                            </div>
                            <form action="{{ route('cart.clear') }}" method="POST" id="clear-cart">@csrf</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-deals-section :$products></x-deals-section>

@endsection

@pushIf(session()->has('error'), 'scripts')
    <script>
        $(function() {
            swal.fire({
                icon: 'error',
                title: 'Error',
                text: "{{ session()->get('error') }}"
            })
        })
    </script>
@endPushIf
