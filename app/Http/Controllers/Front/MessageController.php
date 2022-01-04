<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Message;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Student;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newsletter(Request $request )
    {
        //dd('hello');
        $data = $request -> validate([
            'email' => 'required|email'
        ]);
            Newsletter::create($data);
            return back();



    }

        public function contact(Request $request)
        {
            $data = $request->validate([
                'name'=>'required|string|max:191',
                'email' => 'required|email|max:191',
                'subject' => 'nullable|string|max:191',
                'message' => 'required|string',

            ]);

            Message::create($data);

            return back();
        }

        public function enroll(Request $request)
        {
            $data = $request->validate([
                'name'=>'nullable|string|max:191',
                'email' => 'required|email|max:191',
                'spec' => 'nullable|string|max:191',
                'course_id' => 'required|exists:courses,id',
            ]);

            $old_student = Student::select('id')->where('email',$data['email'])->first();

            if ($old_student == null){
                $st= Student::create([
                    'name'=> $data['name'],
                    'email'=> $data['email'],
                    'spec'=> $data['spec'],
                ]);
                $student_id=$st->id;

            }
            else{
                $student_id= $old_student->id;
                if ($data['name'] !== null){
                    $old_student->update(['name'=>$data['name']]);
                }
                if ($data['spec'] !== null){
                    $old_student->update(['spec'=>$data['spec']]);
                }
            }


         DB::table('course_student')->insert([
           'course_id'=>$data['course_id'],
           'student_id'=> $student_id,
           'created_at'=> now(),
           'updated_at' =>now(),
       ]);
                        return back();

        }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
