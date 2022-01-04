@extends('Admin.layout')
@section('content')

    <div class="container">
        <div class="d-flex justify-content-between m-3">
{{--            <h6>Categories | Edit | {{$student->name}}</h6>--}}
{{--            <a href="{{route('admin.students.index')}}">--}}
                <button class="btn btn-sm btn-primary">Add New</button>

            </a>
        </div>

    @include('Admin.inc.errors')
@endsection

@section('content')

            @foreach($courses as $course)
                <tr>

                    <td>{{$course->name}}</td>
                </tr>

    @endforeach
@endsection
