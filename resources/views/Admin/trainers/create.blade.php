@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between m-3">
            <h6>Trainers | Edit</h6>
            <a href="{{route('admin.trainers.index')}}">
                <button class="btn btn-sm btn-primary">Back</button>

            </a>
        </div>

        @include('Admin.inc.errors')

        <form action="{{route('admin.trainers.store')}}" method="post"  enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Phone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Speciality</label>
                <input type="text" name="spec" class="form-control">
            </div>
            <div class="form-group">
                <input type="file" name="img" class="form-control-file">
            </div>










            <button type="submit" class="btn btn-sm btn-primary">Submit</button>


        </form>


    </div>

@endsection
