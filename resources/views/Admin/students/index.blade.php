@extends('Admin.layout')

@section('css')
    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            #section-to-print, #section-to-print * {
                visibility: visible;
            }
            #section-to-print {
                position: absolute;
                left: 0;
                top: 0;
            }
        }
    </style>
@endsection
@section('content')

<div class="container">

</div>


    <div class="container">
        <div class="d-flex justify-content-between mb-2 mt-5">
            <h6>Students </h6>
            <a  href="{{route('admin.students.create')}}" class="btn btn-sm btn-primary">Add New</a>
        </div>

        <div class="row">
            <div class="col-md-10">
                <form action="" method="POST">
                    @csrf
                    <input type="text" name="q" value="{{$q}}" id="query" class="form-control w-250px mb-2">
                    <button type="submit" class="btn btn-primary mb-3">Search</button>
                </form>

            </div>
            <div class="col-md-2 mt-5">
                <div class="card-toolbar">
                    <!--begin::Dropdown-->
                    <div class="dropdown dropdown-inline mr-2">
                        <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="la la-download"></i>Export
                        </button>
                        <!--begin::Dropdown Menu-->
                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                            <ul class="nav flex-column nav-hover">

                                <li class="nav-item">
                                    <a href="#"  onclick="window.print()" class="nav-link">
                                        <i class="nav-icon la la-print"></i>
                                        <span class="nav-text">Print</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('users/export/')}}" class="nav-link">
                                        <i class="nav-icon la la-file-excel-o"></i>
                                        <span class="nav-text">Excel</span>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{url('pdfview')}}" class="nav-link">
                                        <i class="nav-icon la la-file-pdf-o"></i>
                                        <span class="nav-text">PDF</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--end::Dropdown Menu-->
                    </div>
                    <!--end::Dropdown-->

                </div>

            </div>


        </div>



        <table id="section-to-print" class="table table-striped " >
            <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Specification</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            @foreach($students as $student)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$student->name}}</td>
                    <td>{{$student->email}}</td>
                    <td>{{$student->spec}}</td>
                    <td>
                        <a href="{{route('admin.students.edit',$student->id)}}">
                            <button class="btn btn-sm btn-info">Edit</button>
                        </a>
                        <a href="{{route('admin.students.delete',$student->id)}}">
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </a>
                        <a href="{{route('admin.students.ShowCourses',$student->id)}}">
                            <button class="btn btn-sm btn-primary">ShowCourses</button>
                        </a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
        {!! $students->links() !!}

    </div>

@endsection
