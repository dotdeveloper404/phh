<section class="deals-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <h2><img src="{{ asset('assets/images/logo.png') }}" alt="Logo"> <br><span>Gallagher’s</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <ul class="deals-list">
                    @foreach ($deals as $d)
                        <li class="deals-item">
                            <div class="list-data">
                                <div class="deals-img">
                                    <img src="{{ asset("uploads/$d->image") }}" alt="Product image">
                                </div>
                                <div class="deals-content">
                                    <h3>{{ $d->name }}</h3>
                                    {!! $d->description !!}
                                    <span>${{ $d->price }}</span>
                                    <form action="{{ route('cart.store') }}" method="POST" class="d-inline"
                                        id="add-to-cart-{{ $d->id }}">
                                        @csrf
                                        <input type="hidden" value="{{ $d->id }}" name="id">
                                        <input type="hidden" value="{{ $d->name }}" name="name">
                                        <input type="hidden" value="{{ $d->price }}" name="price">
                                        <input type="hidden" value="{{ $d->image }}" name="image">
                                        <input type="hidden" value="{{ $d->restaurant_id }}" name="restaurant_id">
                                        <input type="hidden" value="1" name="quantity">
                                        <a href="javascript:void(0);" class="btn_add_to_cart"
                                            onclick="$('#add-to-cart-{{ $d->id }}').submit()">
                                            <i class="fas fa-shopping-basket"></i> Add to Cart
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
