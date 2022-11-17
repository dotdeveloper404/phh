<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <div class="logo">
                    <a href="{{ route('home.index') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Pre Happy Hour" class="img-fluid">
                    </a>
                </div>
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <nav>
                    <div class="three">
                        <div class="hamburger" id="hamburger-1">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <ul class="menu">
                        <li><a href="{{ route('home.index') }}">Home</a></li>
                        <li><a href="{{ route('home.howitworks') }}">How to Pre Happy Hour</a></li>
                        <li><a href="{{ route('home.bestdeals') }}">Best Deals</a></li>
                        <li><a href="{{ route('home.partners') }}">Partners</a></li>
                        <li><a href="{{ route('home.contact') }}">Contact Us</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 align-self-center">
                <div class="search-login">
                    @auth
                        <div class="dropdown login_register">
                            <a class="btn btn-secondary dropdown-toggle login" href="#" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user"></i>
                                {{ auth()->user()->name }}
                            </a>

                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                @role('Admin|Restaurant')
                                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                @else
                                    <li><a class="dropdown-item" href="{{ route('my-orders') }}">My Orders</a></li>
                                @endrole
                                <li><a class="dropdown-item" href="#" onclick="$('#logout-form').submit()">Logout</a></li>
                                <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
                            </ul>

                            <a href="{{ route('cart.list') }}" class="register position-relative">
                                <i class="fas fa-cart-shopping"></i>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-circle bg-danger">
                                    {{ Cart::getTotalQuantity() }}
                                </span>
                            </a>
                        </div>
                    @else
                        <div class="login_register">
                            <a href="{{ route('login') }}" class="login">
                                <i class="fas fa-user"></i>
                                Login
                            </a>

                            <a href="{{ route('register') }}" class="register">
                                <i class="fas fa-user"></i>
                                Register
                            </a>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>
</header>
