<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAFB</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
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
    <section id="page-header" class="about-header">
        <h2>#KnowUs</h2>
        <p>Show all the details about us and know everything</p>
    </section>

    <section id="about-head" class="section-p1">
        <img src="img/about/a6.jpg" alt="">
        <div>
            <h2>Who We Are?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <abbr title="">Create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative nodes</abbr>
            <br><br>
            <marquee bgcolor = "#ccc" loop="-1" scrollamount="5" width="100%">Create stunning images with as much or as little control as you like thanks to a choice of Basic and Creative nodes</marquee>
        </div>
        

    </section>

    <section id="about-app" class="section-p1">
        <h1>Download Our <a href="#">App</a></h1>
        <div class="video">
            <video autoplay muted loop src="img/about/1.mp4"></video>
        </div>
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