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
                    @php $i=0; @endphp
                    @foreach ($delivery as $d)
                        <tr class='t-center'>
                            <td> {{ $i }} </td>
                            <td> {{ $d->email }} </td>
                            
                            <td>  {{$d->Cart->email}} </td>
                            <td>  {{$d->Cart->ProductbyId->product}} </td>
                            <td> @if(!is_null($d->Cart->delivery)) 
                            

                            @php 

                            $lat1 = $d->Cart->user->lat/57.29577951;
                            $lat2 = $d->Cart->delivery->lat/57.29577951;
                            $lon1 = $d->Cart->user->lon/57.29577951;
                            $lon2 = $d->Cart->delivery->lon/57.29577951;
                            $dlat = ($lat2-$lat1);
                            $dlong = ($lon2-$lon1);

                            $dist = pow(sin($dlat / 2), 2) +
                          cos($lat1) * cos($lat2) *
                          pow(sin($dlong / 2), 2);

                          $ans = 2 * asin(sqrt($dist));
                          $R = 6371;
                          $km = $ans * $R;
                            
                            @endphp
                           {{$km}}
                            @endif </td>
                            <td style="color:green;" > @if($d->is_done =='Y') Done  @elseif($d->is_done=='N') <a class='red' href="{{'done/'.$d->order_id}}" >Pending</a> @endif  </td>
                        </tr>
                        @php $i= $i + 1; @endphp
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>

@endsection
@endsection

<script></script>
@endsection
