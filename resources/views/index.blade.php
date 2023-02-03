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
    <section id="hero">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>On all products</h1>
        <p>Save more with coupons & upto 70% off !!</p>
        <button>Shop Now</button>
    </section>
    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="img/features/f1.png" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f2.png" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f3.png" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f5.png" alt="">
            <h6>Heppy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="img/features/f6.png" alt="">
            <h6>Support(24/7)</h6>
        </div>
    </section>
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">


            @php $i=0; $j=0; @endphp  @php  $db = 0; @endphp
            @for ($i = 0; $i < count($suggest); $i++)
            
             
             
           @if($suggest[$i]->product_code == $suggest[$j]->product_code)
              @php  $db = $db + 1;  @endphp
            @else
            @php  $db = 0; @endphp
            @endif  

             @if($db==1)
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
             
               @php  $j=$j+1; $i=$i+$db-1;  @endphp
            
            @endfor










        </div>

    </section>
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>70% off</span> - All t-shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
         @php $i=0; @endphp
            @for ($i = 0; $i < count($product); $i++)
                <div class="pro">
                    <a href="{{ asset('single-product/' . $product[$i]->product_code) }}"> <img
                            src="{{ asset('products/' . $product[$i]->image) }}" alt=""> </a>
                    <div class="des">
                        <span>adidas</span>
                        <h5>{{ $product[$i]->product }}</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>
                            @if (!is_null($product[$i]->Amount))
                                ${{ $product[$i]->Amount->price }}
                            @endif
                        </h4>
                    </div>
                    <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
                </div>


                @php $i= $i + 4; @endphp

                @if ($i > 20)
                    @php break; @endphp
                @endif
            @endfor
           
        </div>

    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on sale at MAFB</span>
            <button class="white">Learn More</button>
        </div>

        <div class="banner-box box2">
            <h4>spring/summer</h4>
            <h2>upcoming season</h2>
            <span>The best classic dress is on sale at MAFB</span>
            <button class="white">Collection</button>
        </div>
    </section>
    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALES</h2>
            <h3>Winter Collection -50% off</h3>
        </div>

        <div class="banner-box box2">
            <h2>NEW FOOTWARE COLLECTION</h2>
            <h3>Spring / Summer 2022</h3>
        </div>

        <div class="banner-box box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>

    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div id="newstext">
            <h4>Sign Up for Newsletters</h4>
            <p>Get email updates abut our latest shop and <span>special offers</span></p>
        </div>

        <div class="form">
            <form action="{{ route('viewSignup') }}" method="get">
                @csrf
                <input type="text" name='email' placeholder="Enter Your Email Address">
                <button type="submit" class="normal"> Sign Up</button>
            </form>
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
