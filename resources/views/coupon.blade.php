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


@if(session('role')=='Admin')
    <div class="card ">
        <div class="card-header ">
            <h3>Add Coupon</h3>

        </div>

        <div class="card-body ">
            <form method="post" action="{{ route('coupon.add') }}">
                @csrf
                <div class="row-line">
                    <div class="col-6">
                        <label for="day">Purpose
                            <input type="text" class="form-control" name="day" id="day"></label>
                    </div>
                    <div class="col-6">
                        <label for="coupon">Coupon
                            <input type="text" class="form-control" name="coupon" id="coupon"></label>
                    </div>

                </div>

                <div class="row-line g-1">
                    <div class="col-4">
                        <label for="from">From
                            <input type="date" class="form-control" name="from" id="from"></label>
                    </div>
                    <div class="col-4">
                        <label for="to">To
                            <input type="date" class="form-control" name="to" id="to"></label>
                    </div>
                    <div class="col-4">
                        <label for="disc">Discount
                            <input type="text" class="form-control" name="disc" id="disc"></label>
                    </div>

                </div>

                <div class="row-line g-1 position-end">


                    <button type="submit" class="btn-fc">SAVE</button>


                </div>

        </div>

        </form>

    </div>
@endif



     <div class="card g-1">

        <div class="card-header">
            Category List
        </div>
        <div class="card-body">
           <table class="table table-bordered text-center">
           <thead class="cl-pink">
           <th>SL</th>
           <th>Purpose</th>
           <th>Coupon</th>
           <th>Date</th>
           <th>Action</th>
           </thead>
           <tbody class="t-center">
           @foreach($coupon as $c)
           <tr>
           <td>{{$c->id}}</td>
           <td>{{$c->day}}</td>
           <td>{{$c->coupon}}</td>
           <td><em>{{$c->from}}</em> - <em>{{$c->to}}</em></td>
           <td> <a  href="{{'delete-coupon/'.$c->id}}" class=''>delete</a> </td>
           </tr>
           @endforeach
           </tbody>
           <table>
        </div>

    </div>


    </div>


   
@endsection
@endsection

<script></script>
@endsection
