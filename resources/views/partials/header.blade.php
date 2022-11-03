<header>
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="logo">
                    <a href="{{ route('home.index') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Pre Happy Hour" class="img-fluid">
                    </a>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <nav>
                    <ul>
                        <li><a href="{{ route('home.index') }}">Home</a></li>
                        <li><a href="{{ route('home.howitworks') }}">How to Pre Happy Hour</a></li>
                        <li><a href="{{ route('home.bestdeals') }}">Best Deals</a></li>
                        <li><a href="{{ route('home.partners') }}">Partners</a></li>
                        <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="search-login">
                    <div class="search">
                        <i class="fas fa-search"></i>
                    </div>

                    @if (Route::has('login'))
                        <div class="login_register">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="login">
                                    <i class="fas fa-user"></i>
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ url('/login') }}" class="login">
                                    <i class="fas fa-user"></i>
                                    Login
                                </a>

                                @if (Route::has('register'))
                                    <a href="{{ url('/register') }}" class="register">
                                        <i class="fas fa-user"></i>
                                        Register
                                    </a>
                                @endif

                            @endauth
                        </div>
                    @endif
                    <div class="login_register" style="    width: 25px;float: right;">
                        <a href="{{ route('cart.list') }}" class="flex items-center">
                            <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            <span> {{ Cart::getTotalQuantity() }}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
