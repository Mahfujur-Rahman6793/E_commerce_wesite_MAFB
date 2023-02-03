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
    <div class="card">

        <div class="card-header">
            Food Categories
        </div>
        <div class="card-body">

            <form action="{{ route('product.store') }}" method="post" class="row-gap" enctype="multipart/form-data">
                @csrf
                <div class="row-line">

                    <div class="col-4">

                        <label for="category"> Category
                            <select class='form-control' name="category" data-placeholder="select Category">
                                @foreach ($category as $c)
                                    <option value='{{ $c->id }}'>{{ $c->category }}</option>
                                @endforeach
                            </select>
                        </label>

                    </div>
                    <div class="col-4">

                        <label for="product"> Product Name
                            <input type="text" class='form-control' name="product" id="product"
                                placeholder="Product Name">
                        </label>

                    </div>

                    <div class="col-4">

                        <label for="code"> Product Code
                            <input type="text" class='form-control' name="pCode" id="code"
                                placeholder="Product Code">
                        </label>

                    </div>

                </div>

                <div class="row">

                    <label for="desc"> Product Description
                        <textarea class='form-control' col='30' row='3' name='desc'></textarea>
                    </label>



                </div>

                <div class="row">

                    <label for="desc"> Upload Images
                        <input type="file" class='form-control' name='image[]' multiple>
                    </label>



                </div>

                <div class="row-line">

                    <div class="col-6">

                        <label for="quantity"> Quantity
                            <input type="number" class='form-control' name="quantity" id="quantity"
                                placeholder="quantity">
                        </label>

                    </div>


                    <div class="col-6">

                        <label for="price"> Price
                            <input type="number" class='form-control' name="price" id="price" placeholder="price">
                        </label>

                    </div>

                </div>

                <div class="row position-end">


                    <button class="btn-fc">SAVE</button>

                </div>

            </form>
        </div>

    </div>


    <div class="card g-1">

        <div class="card-header">
            Product List
        </div>
        <div class="card-body table-responsive">
            <table class="table table-bordered text-center">
                <thead class="cl-pink">
                    <th>SL {{Request::segment(1)}}</th>
                    <th>Product Name</th>
                    <th >Product Image</th>
                    
                    <th> Product Price</th>
                    <th>Quantity</th>
                    <th>Available</th>
                    <th>Action</th>
                </thead>
                <tbody class="t-center">
                @php $id = array(); $i=1; $quant = array();  @endphp
                    @for($i=0; $i < count($product); $i++)
                  
                    @if(! is_null($product[$i]->Amount))
                    
                    
                    <tr>
                    <td> {{$i+1}} </td>
                    <td> {{$product[$i]->product}} </td>
                     <td class="th-3"> <img src="{{ 'products/'.$product[$i]->image }}" class='img-td'  ></td>
                     <td> {{$product[$i]->Amount->price}} </td>
                      <td> {{$product[$i]->Amount->quantity}} </td>
                      <td> @foreach($product[$i]->Cart as $c)
                        @php array_push($quant,$c->quantity); 
                        
                        @endphp 
                        
                       @endforeach 
                        {{$product[$i]->Amount->quantity - array_sum($quant)}}
                       </td>
                      <td  style='min-height:200px;'> <div class='col-12 d-center '><button  class='btn btn-sm info'> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
  <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg> </button> <button class='btn btn-sm red ml-1'> 

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
 </button></div> </td>
                    </tr>
                    
                    @endif
                  
                    @endfor
                </tbody>
                <table>
        </div>

    </div>

@endsection
@endsection

<script>



</script>
@endsection
