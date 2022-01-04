@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between m-3">
            <h6>Categories | Edit | {{$cat->name}}</h6>
            <a href="{{route('admin.cats.index')}}">
                <button class="btn btn-sm btn-primary">Add New</button>

            </a>
        </div>

        @include('Admin.inc.errors')

        <form action="{{route('admin.cats.update')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$cat->id}}">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{$cat->name}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>


        </form>


    </div>

@endsection
