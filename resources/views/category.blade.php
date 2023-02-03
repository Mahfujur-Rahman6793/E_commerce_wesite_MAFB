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
    <div class="card">

        <div class="card-header">
            Food Categories
        </div>
        <div class="card-body">
        @if(Session::has('failure'))
         
        @endif
            <form action="{{route('category.add')}}" method="post">
            @csrf
                <div class="row">

                    <label for="category"> Category
                        <input class="form-control" type="text" id="category" name="category" placeholder="Add new Category">
                    </label>

                </div>

                <div class="row position-end">

                    <button class="btn-fc">SAVE</button>

                </div>

            </form>
        </div>

    </div>
    

    <div class="card g-1">

        <div class="card-header">
            Category List
        </div>
        <div class="card-body">
           <table class="table table-bordered text-center">
           <thead class="cl-pink">
           <th>SL</th>
           <th>Category Name</th>
           <th>Action</th>
           </thead>
           <tbody class="t-center">
           @foreach($category as $c)
           <tr>
           <td>{{$c->id}}</td>
           <td>{{$c->category}}</td>
           <td> <a  href="{{'delete-category/'.$c->id}}" class=''>delete</a> </td>
           </tr>
           @endforeach
           </tbody>
           <table>
        </div>

    </div>
    
@endsection
@endsection
@endsection
