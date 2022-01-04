@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between mb-2 mt-5">
            <h6>Category</h6>
            <a  href="{{route('admin.cats.create')}}" class="btn btn-sm btn-primary">Add New</a>
        </div>

        <table class="table table-striped " >
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($cats as $cat)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$cat->name}}</td>
                    <td>
                        <a href="{{route('admin.cats.edit',$cat->id)}}">
                            <button class="btn btn-sm btn-info">Edit</button>
                        </a><a href="{{route('admin.cats.delete',$cat->id)}}">
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>

@endsection
