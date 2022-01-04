@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between m-3">
            <h6>Trainers | Edit | {{$trainer->name}}</h6>
            <a href="{{route('admin.trainers.index')}}">
                <button class="btn btn-sm btn-primary">Add New</button>

            </a>
        </div>

@include('Admin.inc.errors')

        <form action="{{route('admin.trainers.update')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$trainer->id}}">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{$trainer->name}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" value="{{$trainer->phone}}" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Speciality</label>
                <input type="text" name="spec" value="{{$trainer->spec}}" class="form-control">
            </div>
            <img src="{{asset('uploads/trainers/'.$trainer->img)}}" alt="" class="mb-2 " style="border-radius: 50%">

            <div class="form-group">
                <input type="file" name="img" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-sm btn-primary">Submit</button>


        </form>


    </div>

@endsection
