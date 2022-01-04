@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between m-3">
            <h6>Courses | Edit | {{$course-> name}}</h6>
            <a href="{{route('admin.courses.index')}}">
                <button class="btn btn-sm btn-primary">Add New</button>

            </a>
        </div>

@include('Admin.inc.errors')

        <form action="{{route('admin.courses.update')}}" method="post"  enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$course->id}}">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <select class="form-control form-control-lg mb-3" name="cat_id">
                    @foreach($cats as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <select class="form-control form-control-lg mb-3" name="trainer_id">
                    @foreach($trainers as $trainer)
                        <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                    @endforeach
                </select>
            </div>


            <div class="form-group">
                <label for="">Small Description</label>
                <input type="text" name="small_desc" class="form-control" value="{{$course->small_desc}}">
            </div>
            <div class="form-group">
                <label for=""> Description</label>
                <textarea name="desc" id="" cols="30" rows="10" class="form-control">{{$course->desc}}</textarea>
            </div>
            <div class="form-group">
                <label for="">price</label>
                <input type="number" name="price" class="form-control" value="{{$course->price}}">
            </div>
            <div class="form-group">
                <input type="file" name="img" class="form-control-file" value="{{asset('uploads/courses/'.$course->img)}}">
            </div>










            <button type="submit" class="btn btn-sm btn-primary">Submit</button>


        </form>


    </div>

@endsection
