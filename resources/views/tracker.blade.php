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

        <div class="card-header">

        </div>
        <div class="card-body">
            <form method='post' action="{{ route('setDelivery') }}">
                @csrf
                <div class="row-line">
                    <div class="col-6">
                        <label for='dboy'>Select Delivery Boy
                            <select id='dboy' class='form-control' name='email'>
                                @foreach ($dboy as $d)
                                    <option value='{{ $d->email }}'> {{ $d->email }} </option>
                                @endforeach
                            </select>
                        </label>
                    </div>
                    <div class="col-6">
                        <label for='dboy'>Select Delivery Boy
                            <select id='dboy' class='form-control' name='order'>
                                @foreach ($order as $o)
                                    <option value='{{ $o->id }}'> {{ $o->id }} </option>
                                @endforeach
                            </select>
                        </label>
                    </div>

                </div>
                <div class="row-line">
                    <div class="col-12">
                        <button class="btn-fc">set</button>
                    </div>
                </div>

            </form>
        </div>




    </div>

    <div class="card g-1">
        <div class="card-body ">
            <table class="table table-bordered text-center">
                <thead class="cl-pink">
                <th>SL</th>
                <th>Assigned to</th> 
                <th>Order from</th> 
                 <th>Product </th>
                 <th>  </th>
                <th>Status</th>
                </thead>
                <tbody>
                   
                </tbody>
            </table>

        </div>
    </div>

@endsection
@endsection

<script></script>
@endsection
