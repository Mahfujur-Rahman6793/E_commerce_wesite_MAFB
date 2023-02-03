@extends('dashboard')
@section('style')
    @parent
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



    <div class="card ">
        <div class="card-header ">
            <h3>Add Coupon</h3>

        </div>

        <div class="card-body ">
            <form method="post" action="{{ route('user.update') }}" enctype="multipart/form-data">
                @csrf
                <div class="row-line">
                    <div class="col-6">
                        <label for="fname">First Name
                            <input type="text" class="form-control" name="fname" value="{{$user->fname}}" id="fname"></label>
                    </div>
                    <div class="col-6">
                        <label for="lname">Last Name
                            <input type="text" class="form-control" name="lname" value="{{$user->lname}}" id="lname"></label>
                    </div>

                </div>

                <div class="row-line g-1">
                    <div class="col-6">
                        <label for="email">Email
                            <input type="text" class="form-control" name="email" value="{{$user->email}}" id="email" readonly></label>
                    </div>
                    <div class="col-6">
                        <label for="pass">Password
                            <input type="password" class="form-control" name="pass" id="pass"></label>
                    </div>

                </div>

                <div class="row-line g-1">
                    <div class="col-12">
                        <label for="image">Upload Image
                            <input type="file" class="form-control" name="image"  id="image" ></label>
                    
                           
                    </div>

                </div>

                <div class="row-line g-1 position-end">


                    <button type="submit" class="btn-fc">SAVE</button>


                </div>

        </div>

        </form>

    </div>



    


    </div>


   
@endsection
@endsection

<script></script>
@endsection
