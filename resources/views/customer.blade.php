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
   


    <div class="card  ">

        <div class="card-header">
            Product List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered text-center">
                <thead class="cl-pink">
                    <th>SL </th>
                    <th>Name</th> 
                    <th >Email</th>
                    <th> Address</th>
                     <th>Order times</th>
                    <th>Total ordered</th>
                    
                    
                </thead>
                <tbody class="t-center">
                @php $i=1;  @endphp
              
             
              
               @foreach($customer as $c)
                
                 


               <tr>
                 <td>{{$i}} </td>
                 <td>{{$c->fname}} {{$c->lname}}</td>         
                 <td>{{$c->email}} </td>
                 <td > {{$c->city}}, {{$c->state}} , bangladesh</td>
@php $times=0; $qnt = array(); @endphp
                 @foreach($c->Cart as $ca) 
              @if($ca->is_ordered=='Y')
              @php array_push($qnt,$ca->quantity);  $times=$times + 1;  @endphp
              @endif
              @endforeach
                 <td> {{$times}}  </td>
                 <td>{{array_sum($qnt)}} </td>
                 </tr>
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
