<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAFB</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="{{ asset('style.css') }}">
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

    <form method='post' action="{{route('cart.index')}}">
    @csrf
    <section id="productDetails" class="section-p">
        <div class="single-pro-img">

         
           <img src="{{ asset('products/' . $product[0]->image) }}"   width="100%" id="MainImg" alt="">
            <div class="small-img-group"> 

            @foreach($product as $p)
                <div class="small-img-col">
                    <img    src="{{ asset('products/' . $p->image) }}"  width="100%" class="small-img" alt="">
                     
                </div>
    
                
            @endforeach    
            </div>
        </div>
        <div class="single-pro-details">

         @foreach($product as $p)
            <input type='hidden' name="pCode" value="{{$p->product_code}}">
            <h3>Home/ {{$p->Category->category}}</h3>
            <h4> {{$p->product}} </h4>
            <h2>${{$p->Amount->price}} </h2>
            <select name="size">
                <option>Select Size</option>
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="xl">xl</option>
                <option value="xxl">xxl</option>
                <option value="xxxl">xxxl</option>
            </select>
            <select name="prod">
                <option>Select Product Number</option>
                @php $i=1; @endphp
                 @foreach($product as $p)
                <option value="{{$p->id}}"> {{$i}} </option>
                 @php $i= $i + 1; @endphp
                @endforeach  
            </select>
            <input type="number" value="1" name="quantity">
            <button class="normal">Add to Card</button>
            <h4>Products Details</h4>
            <span> {{$p->desc}} </span>

        </div>
        @php break; @endphp
        @endforeach    
    </section>
</form>
    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Morden Design</p>
        <div class="pro-container">
            <div class="pro">
                <img src="img/products/n1.jpg" alt="">
                <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>$78</h4>
        </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/n2.jpg" alt="">
                <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>$78</h4>
        </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/n3.jpg" alt="">
                <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>$78</h4>
        </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
            </div>

            <div class="pro">
                <img src="img/products/n4.jpg" alt="">
                <div class="des">
                <span>adidas</span>
                <h5>Cartoon Astronaut T-shirt</h5>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            <h4>$78</h4>
        </div>
            <a href="#"><i class="fal fa-shopping-cart cart"></i></a>
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

    <script>
 



        const MainImg = document.getElementById("MainImg");
        const smallimg = document.getElementsByClassName("small-img");
       smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
            MainImg.value = smallimg[0].value;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
            MainImg.value = smallimg[1].value;
        }

        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
            MainImg.value = smallimg[2].value;
        }

        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
            MainImg.value = smallimg[3].value;

        }

        smallimg[4].onclick = function(){
            MainImg.src = smallimg[4].src;
            MainImg.value = smallimg[4].value;
        }

        smallimg[5].onclick = function(){
            MainImg.src = smallimg[5].src;
            MainImg.value = smallimg[5].value;
        }
        smallimg[6].onclick = function(){
            MainImg.src = smallimg[6].src;
            MainImg.value = smallimg[6].value;
        }

        smallimg[7].onclick = function(){
            MainImg.src = smallimg[7].src;
            MainImg.value = smallimg[7].value;
        }
       
    </script>

    <script src="./script.js"></script>
</body>

</html>
