<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAFB</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
     <section id="header">
        <a href="#"><img src="{{asset('img/LOGO.png')}}" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a @if(Request::segment(1)=='/') class="active" @endif href="{{asset('/')}}">Home</a></li>
                <li><a @if(Request::segment(1)=='shop') class="active" @endif href="{{asset('/shop')}}">Shop</a></li>
                
                <li><a @if(Request::segment(1)=='about') class="active" @endif href="{{asset('/about')}}">About</a></li>
                <li><a href="{{asset('/contact')}}">Contact</a></li>
                @if(!session('user'))
                 <li><a href="{{asset('/mafb-log-in')}}">login</a></li>
                 @else
                 <li> logged in as <a href="{{asset('/dashboard')}}">{{session('username')}}</a></li>
                 @endif
                <li><a @if(session('user')) href="{{asset('/cart-list')}}" @else href={{asset('/mafb-log-in')}} @endif id="bag"><i class="far fa-shopping-bag"></i></a></li>
                <a href="#"><i class="far fa-times" id="close"></i></a>

            </ul>
        </div>
        <div id="mobile">
            <a @if(session('user')) href="{{asset('/cart-list')}}" @else href={{asset('/mafb-log-in')}} @endif><i class="far fa-shopping-bag"></i></a>
            <i id="bar" class="fas fa-outdent"></i>


        </div>
    </section>
    <section id="page-header">
        <h2>#Stayhome</h2>
        <p>Save more with coupons & upto 70% off !!</p>
    </section>
    <section id="product1" class="section-p1">
        <div class="pro-container">
            


                @php
                    $i = 0;
                    $j = 0;
                @endphp @php  $db = 0; @endphp
                @for ($i = 0; $i < count($suggest); $i++)



                    @if ($suggest[$i]->product_code == $suggest[$j]->product_code)
                        @php  $db = $db + 1;  @endphp
                    @else
                        @php  $db = 0; @endphp
                    @endif

                    @if ($db == 1)
                        <div class="pro">
                            <a href="{{ asset('single-product/' . $suggest[$i]->product_code) }}"> <img
                                    src="{{ asset('products/' . $suggest[$i]->image) }}" alt=""> </a>
                            <div class="des">
                                <span>adidas</span>
                                <h5>{{ $suggest[$i]->product }}</h5>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <h4>
                                    @if (!is_null($suggest[$i]->Amount))
                                        ${{ $suggest[$i]->Amount->price }}
                                    @endif
                                </h4>
                            </div>
                            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                        </div>
                    @endif

                    @php
                        $j = $j + 1;
                        $i = $i + $db - 1;
                    @endphp

                @endfor

            
 
        </div>

    </section>

    <section id="pagination" class="section-p1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fal fa-long-arrow-alt-right"></i></a>

    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div id="newstext">
            <h4>Sign Up for Newsletters</h4>
            <p>Get email updates abut our latest shop and <span>special offers</span></p>
        </div>

        <div class="form">
            <input type="text" placeholder="Enter Your Email Address">
            <button class="normal">Sign Up</button>
        </div>


    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/LOGO.png" alt="">
            <h4>Contact</h4>
            <p><strong>Address: </strong>Mesta,Jamalpur Sadar,Jamalpur 2000</p>
            <p><strong>Phone: </strong>01729413258</p>
            <p><strong>Hours: </strong>9.00-18.00, Sunday-Tuesday</p>


            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-pinterest-p"></i>
                    <i class="fab fa-youtube"></i>
                </div>
            </div>
        </div>
        <div class="col">
            <h4>About</h4>
            <a href="#">About us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms & Conditons</a>
            <a href="#">Contact Us</a>

        </div>

        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>

        </div>

        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img src="img/pay/play.jpg" alt="">

            </div>
            <p>Secured Payment Gateways</p>
            <img src="img/pay/pay.png" alt="">
        </div>

        <div class="copyright">
            <p><span>@2022</span>, MAFB e-commerce site</p>
        </div>

    </footer>

    <script src="./script.js"></script>
</body>

</html>
