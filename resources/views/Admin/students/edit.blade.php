@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between m-3">
            <h6>Categories | Edit | {{$student->name}}</h6>
            <a href="{{route('admin.students.index')}}">
                <button class="btn btn-sm btn-primary">Add New</button>

            </a>
        </div>

        @include('Admin.inc.errors')

        <form action="{{route('admin.students.update')}}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$student->id}}">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{$student->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="email" value="{{$student->email}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="spec" value="{{$student->spec}}" class="form-control">
            </div>
            <button type="submit" class="btn btn-sm btn-primary">Submit</button>


        </form>


    </div>

@endsection
