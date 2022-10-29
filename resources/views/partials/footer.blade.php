<footer>
    <div class="container">
        <div class="row">
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <img src="{{asset('assets/images/logo.png')}}" alt="">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetti ng  and0 industry. </p>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <h3>Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('home.about')}}">About Us</a></li>
                    <li><a  href="{{route('home.bestdeals')}}">Best Deal</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <h3>Contact Info</h3>
                <p>
                    <i class="fas fa-phone"></i> Phone: <br> <br>
                    <i class="fas fa-envelope"></i> Email: <br> <br>
                    <i class="fas fa-map-marker-alt"></i> Head Office:
                </p>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12">
                <h3>Join Our Newsletter</h3>
            </div>
        </div>
    </div>
</footer>
<section class="footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <p>Copyright &copy; {{date('Y')}} Pre Happy Hour - All Rights Reserved.</p>
            </div>
        </div>
    </div>
</section>
<!-- ALERT MESSAGE BOX - VIEW CART -->
<div class="view-cart-box" id="cart-add">
    <div class="icon"><i class="fas fa-check"></i></div>
    <div class="desc">You add item. <a href="/cart">View Cart</a></div>
</div>

<div class="view-cart-box-update" id="cart-update">
    <div class="icon"><i class="fas fa-check"></i></div>
    <div class="desc">Quantity has beeen updated in cart</div>
</div>
<script src="{{asset('assets/js/jquery-3.6.1.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/all.min.js')}}"></script>
<script src="{{asset('assets/js/fontawesome.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.bxslider.min.js')}}"></script>
<script src="{{asset('assets/js/aos.js')}}"></script>
<script type="application/javascript">
    $(document).ready(function () {
        //var scene = document.getElementById('scene');
        //var parallaxInstance = new Parallax(scene, {
          //  relativeInput: true
        //});
        //$('.parallaxie').parallaxie({
        //    speed: .4,
        //    offset: 50
        //});
        $('.bxslider').bxSlider({
            auto: true
        });
        AOS.init();
        $('.btn_add_to_cart').click(function(){
            $('#cart-add').fadeIn(500).delay(4000).fadeOut(500);
        });

        $('.btn_update_to_cart').click(function(){
            $('#cart-update').fadeIn(500).delay(4000).fadeOut(500);
        });

        
    })
</script>

