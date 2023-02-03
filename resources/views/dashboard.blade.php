<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width = device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @section('style')
        @include('partials.style')
        @yield('style');
    @show
</head>

<body>
    @section('sidebar')
        <input type="checkbox" id="nav-toggle">
        @include('partials.sidebar')
    @show

    @section('main-content')
        <div class="main-content">
        @section('header')
            @include('partials.header')
        @show

        <main>
            @section('editable')
                @yield('editable')
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>{{ $cus }} </h1>
                            <span>Customers</span>
                        </div>
                        <div>
                            <span class="las la-users"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>{{$delC}}</h1>
                            <span>Delivary</span>
                        </div>
                        <div>
                            <span class="las la-clipboard"></span>
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1> {{ $order }} </h1>
                            <span>Orders</span>
                        </div>
                        <div>
                            <span class="las la-shopping-bag"></span>
                        </div>

                    </div>
                    <div class="card-single">
                        <div>
                            <h1>
                                @if (Request::segment(1) == 'dashboard')
                                    {{ $cart  }}
                                @endif
                            </h1>
                            <span>Income</span>
                        </div>
                        <div>
                            <span class="lab la-google-wallet"></span>
                        </div>

                    </div>

                </div>

                
            @show
        </main>

    </div>
@show
</body>

</html>
