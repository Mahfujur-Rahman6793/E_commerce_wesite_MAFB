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
    <section id="page-header" class="contact-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you !</p>
    </section>
    <section id="contact-details" class="section-p1">
        <div class="details">
            <span>GET IN TOUCH</span>
            <h2>Visit one of our agency locations or contact us today</h2>
            <h3>Head Office</h3>
            <div>
                <li>
                    <i class="fal fa-map"></i>
                    <p>Jamalpur Sadar, Jamalpur</p>
                </li>

                <li>
                    <i class="far fa-envelope"></i>
                    <p>contact@example.com</p>
                </li>

                <li>
                    <i class="fas fa-phone-alt"></i>
                    <p>contact@example.com</p>
                </li>

                <li>
                    <i class="far fa-clock"></i>
                    <p>Monday to Saturday: 9.00am to 4.00pm</p>
                </li>
            </div>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3620.889898936257!2d89.85812911483764!3d24.833438584066748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fd83380f3be187%3A0x4240c0d18a0637fd!2sMesta%20School%20Rd%20%26%20Hashil%20Tonki%20Rd!5e0!3m2!1sen!2sbd!4v1655105378329!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="form-details" class="section-p1">
        <form action="">
            <span>LEAVE A MESSAGE</span>
            <h2>We love to hear to you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-mail">
            <input type="text" placeholder="Subject">
            <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
            <button class="normal">Submit</button>

        </form>
        <div class="people">
            <div>
                <img src="img/people/1.png" alt="">
                <p><span>MR. X</span> Senior Marketing Officer <br>Phone: 123456789 <br>Email:abc@example.com</p>
            </div>
            <div>
                <img src="img/people/2.png" alt="">
                <p><span>MR. Y</span> Senior Marketing Officer <br>Phone: 123456789 <br>Email:abc@example.com</p>
            </div>
            <div>
                <img src="img/people/3.png" alt="">
                <p><span>MR. Z</span> Senior Marketing Officer <br>Phone: 123456789 <br>Email:abc@example.com</p>
            </div>
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