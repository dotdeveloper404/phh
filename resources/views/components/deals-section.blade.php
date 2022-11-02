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
                    @foreach ($products as $product)
                        <li>
                            <div class="list-data">
                                <div class="deals-img">
                                    <img src="{{ asset($product->image) }}" alt="Product image">
                                </div>
                                <div class="deals-content">
                                    <h3>{{ $product->name }}</h3>
                                    <p>{{ $product->description }}</p>
                                    <span>${{ $product->price }}</span>
                                    <form action="{{ route('cart.store') }}" method="POST" class="d-inline"
                                        id="add-to-cart-{{ $product->id }}">
                                        @csrf
                                        <input type="hidden" value="{{ $product->id }}" name="id">
                                        <input type="hidden" value="{{ $product->name }}" name="name">
                                        <input type="hidden" value="{{ $product->price }}" name="price">
                                        <input type="hidden" value="{{ $product->image }}" name="image">
                                        <input type="hidden" value="1" name="quantity">
                                        <a href="javascript:void(0);" class="btn_add_to_cart"
                                            onclick="$('#add-to-cart-{{ $product->id }}').submit()">
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
