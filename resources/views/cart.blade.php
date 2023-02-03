@extends('dashboard')
@section('style')
    @parent
  <link rel="stylesheet" href="style.css">
@show
@section('sidebar')
    @parent
@endsection

@section('main-content')
    @parent
@section('header')
    @parent
@section('editable')
    @if (Session::has('failure'))
        <div class="col-12 " id="message" style="background:red;">

            <p class='mb-0 text-danger'> {!! Session::get('failure') !!} </p>

        </div>
    @elseif(Session::has('success'))
        <div class="col-12  " id="message" style="background:green;">

            <p class='mb-0 text-info'> {!! Session::get('success') !!} </p>


        </div>
    @endif
    <section id="page-header" class="about-header">
        <h2>#let's_talk</h2>
        <p>LEAVE A MESSAGE, We love to hear from you !</p>
    </section>
<form method='post' action="{{route('cart.order')}}" >
            @csrf
    <section id="cart" class="section-p1">
        <table width="100%" >
            <thead>
                <tr>
                    <td>SL</td>
                    <td >Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Subtotal</td>

                </tr>
            </thead>
            <tbody>
            @php $carttotal = 0; $carts=array(); $totals = $total; $cid=array();  @endphp
            @foreach($customer->Cart as $c )
            @if($c->is_ordered=='N')
                <tr>
                    <td>  <input type='checkbox' id='cart{{$c->id}}'  name='cart_id[]' value="{{$c->id}}" > </td>
                    <td><img src="{{asset('products/'.$c->ProductbyId->image)}}" alt=""></td>
                    <td>{{$c->Product->product}}</td>
                    <td><strong> BDT</strong> {{$c->Product->Amount->price}}</td>
                    <td><input type="number" value="{{$c->quantity}}"></td>
                    <td> <strong> BDT</strong> {{$c->Product->Amount->price * $c->quantity}}</td>
                     @php 
                     $total = $total + $c->Product->Amount->price * $c->quantity; 
                     $carttotal=$carttotal+ $c->Product->Amount->price * $c->quantity;

                     array_push($cid,$c->id);
                      @endphp
                </tr>
            @endif    
            @endforeach
            </tbody>
        </table>
    </section>

    <section id="cart-add" class="section-p1">
      
       

        <div id="subtotal">
            <h3>Cart Totals</h3>
            <table>
                <tr>
                    <td>Cart Subtotal</td>
                    <td>BDT {{$carttotal}}</td>
                </tr>
                <tr>
                    <td>Shipping</td>
                    <td>Free</td>
                </tr>

                <tr>
                    <td>Total</td>
                    <td><strong> @if(Request::segment(1)=='cart-list') <strong> BDT</strong> {{$total}} @else <strong> BDT</strong> {{$totals}} @endif </strong></td>
                </tr>
            </table>
            
            <input type='hidden' name="totalCost" value="@if(Request::segment(1)=='cart-list') {{$total}} @else 
            {{$totals}} @endif">
            <button class="normal">Proceed to checkout</button>
            
        </div>

    </section>
</form>
 <div id="coupon">
        <form method='get' action="{{route('cart.coupon')}}">
        @csrf
            <h3>Apply Coupon</h3>
            <div>
            
              <input type="hidden" name="total" value="{{$total}}" >
                <input type="text" placeholder="Enter your coupon" name="coupon" @if(!is_null($fCoupon)) value= " {{$fCoupon->coupon}} "@else value="" @endif>
                <button class="normal">Apply</button>
            </div>
            </form>
        </div>
@endsection
@endsection

<script>

 function myFunction(){
  var cart = @JSON($cid);
  var i=0;
  for(var i = 0; i< cart.length; i++){
 
 

 var agreement = document.getElementById("cart"+cart[i]).value;

    agreement.oninput = function(element) {
    console.log(agreement);
    	
    };

  }

  
}
</script>
@endsection
