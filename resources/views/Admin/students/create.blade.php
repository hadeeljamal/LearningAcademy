@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between m-3">
            <h6>Student | Edit</h6>
            <a href="{{route('admin.students.index')}}">
                <button class="btn btn-sm btn-primary">Back</button>

            </a>
        </div>

        @include('Admin.inc.errors')

        <form action="{{route('admin.students.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Specification</label>
                <input type="text" name="spec" class="form-control">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>


        </form>


    </div>

@endsection
