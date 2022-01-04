<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Cat;
use App\Student;
use App\Course;
use Maatwebsite\Excel\Facades\Excel;
use PDF;
use App\Exports\UsersExport;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)


    {
        $students = student::orderByDesc('id');

        $q = $request->q;
        if ($request->q) {

            $students->where('name', 'like', '%' . $q . '%');
        }
        $students = $students->paginate(10);
        return view('admin.students.index', compact('students', 'q'));


    }

    public function pdfview(Request $request)
    {
        $students = Student::paginate(10);
        //  $items = DB::table("items")->get();
        view()->share('student', $students );

        // if($request->has('download')){
        $pdf = PDF::loadView('pdfview');
        return $pdf->download('pdfview.pdf');
        //  }

//          return view('pdfview');
    }


    public function export()
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email|unique:students',
            'spec' => 'required|string|max:50'
        ]);
        Student::create($data);
        return redirect(route('admin.students.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['student'] = Student::findOrFail($id);
        return view('Admin.students.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:20',
            'email' => 'required|email|unique:students',
            'spec' => 'required|string|max:50'


        ]);
        Student::findOrFail($request->id)->update($data);
        return redirect(route('admin.students.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();
        return back();

    }

    public  function showCourses($id){
        $data['course'] = Student::findOrFail($id)->courses;
//        dd(   $data['course']);
        return view('Admin.students.showCourses');

    }



}
