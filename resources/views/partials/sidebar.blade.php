<div class="sidebar">
        <div class="sidebar-brand">
            <h2><img src="img/LOGO.png" alt=""> <span>MAFB</span></span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{asset('/dashboard')}}" @if(Request::segment(1)=='dashboard') class="active" @endif><span class="las la-igloo"></span><span>DashBoard</span></a>
                </li>
               @if(session('role')=='Admin')
                <li>
                    <a href="{{asset('/category')}}" @if(Request::segment(1)=='category') class="active" @endif><span class="las la-users"></span><span>Category</span></a>
                </li>
                @endif
               
                 <li>
                 
                    <a href="{{asset('/product')}}" @if(Request::segment(1)=='product') class="active" @endif><span class="las la-users"></span><span>Product</span></a>
                </li>
               
                 @if(session('role')=='Admin')
                <li>
                    <a href="{{asset('/add-new-employee')}}" @if(Request::segment(1)=='add-new-employee') class="active" @endif><span class="las la-users"></span><span>Add Employee </span></a>
                </li>
                 @endif

                  @if(session('role')=='Admin')
                <li>
                    <a href="{{asset('/customer-list')}}" @if(Request::segment(1)=='customer-list') class="active" @endif><span class="las la-users" ></span><span>Customer</span></a>
                </li>
                @endif
                @if(session('role')=='Admin'||session('role')=='customer')
                <li>
                    <a href="{{asset('/coupon-list')}}" @if(Request::segment(1)=='coupon-list') class="active" @endif><span class="las la-users" ></span><span>Coupon List</span></a>
                </li>
                @endif
                  @if(session('role')=='Delivery')
                <li>
                    <a href="{{asset('/order-deliver')}}" @if(Request::segment(1)=='order-deliver') class="active" @endif><span class="las la-clipboard-list"></span><span>Delivary</span></a>
                </li>
                 @endif
                 @if(session('role')=='Admin' || session('role')=='customer')
                <li>
                    <a href="{{asset('/order-list')}}" @if(Request::segment(1)=='order-list') class="active" @endif><span class="las la-shopping-bag"></span><span>Orders</span></a>
                </li>
                @endif
                @if(session('role')=='customer')
                <li>
                    <a href="{{asset('cart-list')}}" @if(Request::segment(1)==('cart-list')) class="active" @endif><span class="las la-user-circle"></span><span>Cart List</span></a>
                </li>
                @endif
                <li>
                    <a href="{{asset('/edit'.session('user'))}}" @if(Request::segment(1)==('edit'.session('user'))) class="active" @endif><span class="las la-user-circle"></span><span>Setting</span></a>
                </li>
                <li>
                   <a> <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button ><span class="las la-user-circle"></span><span>Log out</span></button>
                    </form> </a>
                   
                </li>
            </ul>
        </div>
    </div>