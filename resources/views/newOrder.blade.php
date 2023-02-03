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
            Product List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered text-center">
                <thead class="cl-pink">
                    <th>SL </th>
                    <th>Product Name</th> 
                    <th >Product Image</th>
                    <th> Product Price</th>
                     <th>Quantity</th>
                    <th>Customer</th>
                    
                    <th>Status</th>
                </thead>
                <tbody class="t-center">
                @php $i=0; @endphp
               @foreach($order as $o)
               @if(session('role')=='Admin')
               <tr>
                 <td>{{$i}} </td>
                 <td>{{$o->ProductbyId->product}} </td>
                 
                 <td class='th-3'> <img src='{{"products/".$o->ProductbyId->image}}' class='img-td'> </td>
                 <td>{{$o->ProductbyId->Amount->price}} </td>
                 <td class='th-3'> {{$o->quantity}} </td>
                 <td>{{$o->user->fname}} {{$o->user->lname}}  </td>
                 <td> @if($o->is_delivered=='Y') Done @else PENDING @endif </td>
                 </tr>
                 @else

                 @if($o->email == session('user'))
                   <tr>
                 <td>{{$i}} </td>
                 <td>{{$o->ProductbyId->product}} </td>
                 
                 <td class='th-3'> <img src='{{"products/".$o->ProductbyId->image}}' class='img-td'> </td>
                 <td>{{$o->ProductbyId->Amount->price}} </td>
                 <td class='th-3'> {{$o->quantity}} </td>
                 <td>{{$o->user->fname}} {{$o->user->lname}}  </td>
                 <td> @if($o->is_delivered=='Y') Done @else PENDING @endif </td>
                 </tr>
                 @endif
                 @endif
                 @php $i=$i+1; @endphp
               @endforeach
                </tbody>
                <table>
        </div>

    </div>

@endsection
@endsection

<script>



</script>
@endsection
