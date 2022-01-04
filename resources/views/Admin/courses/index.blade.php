@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between mb-2 mt-5">
            <h6>Courses</h6>
            <a  href="{{route('admin.courses.create')}}" class="btn btn-sm btn-primary">Add New</a>
        </div>

        <table class="table table-striped " >
            <thead>
            <tr>
                <th>#</th>
                <th>Courses Img</th>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <img src="{{asset('uploads/courses/'.$course->img)}}" width="50px"  style="border-radius: 50%" alt="">
                    </td>
                    <td>{{$course->name}}</td>

                    <td>
                        {{$course->price}}
                    </td>
                    <td>
                        <a href="{{route('admin.courses.edit',$course->id)}}">
                            <button class="btn btn-sm btn-info">Edit</button>
                        </a><a href="{{route('admin.courses.delete',$course->id)}}">
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        {!! $courses->links() !!}
    </div>

@endsection
