@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between mb-2 mt-5">
            <h6>Trainers</h6>
            <a  href="{{route('admin.trainers.create')}}" class="btn btn-sm btn-primary">Add New</a>
        </div>

        <table class="table table-striped " >
            <thead>
            <tr>
                <th>#</th>
                <th>TrainerImg</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Specification</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($trainers as $trainer)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <img src="{{asset('uploads/trainers/'. $trainer->img)}}" width="50px"  style="border-radius: 50%" alt="">
                    </td>
                    <td>{{$trainer->name}}</td>

                    <td>
                        @if($trainer->phone !== null)

                        {{$trainer->phone}}
                        @else
                        Not Exist
                        @endif
                    </td>
                    <td>{{$trainer->spec}}</td>
                    <td>
                        <a href="{{route('admin.trainers.edit',$trainer->id)}}">
                            <button class="btn btn-sm btn-info">Edit</button>
                        </a><a href="{{route('admin.trainers.delete',$trainer->id)}}">
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

@endsection
