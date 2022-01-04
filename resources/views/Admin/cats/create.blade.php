@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between m-3">
            <h6>Categories | Edit</h6>
            <a href="{{route('admin.cats.index')}}">
                <button class="btn btn-sm btn-primary">Back</button>

            </a>
        </div>

        @include('Admin.inc.errors')

        <form action="{{route('admin.cats.store')}}" method="post">
            @csrf
<div class="form-group">
    <label for="">Name</label>
    <input type="text" name="name" class="form-control">
</div>
            <button  type="submit" class="btn btn-sm btn-primary">Submit</button>


        </form>






    </div>

@endsection
