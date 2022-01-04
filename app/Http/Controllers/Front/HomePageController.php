<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use App\SiteContent;
use App\Student;
use App\Trainer;
use App\Testi;
class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['banner']= SiteContent::select('content')->where('name','banner')->first();
        $data['feature']= SiteContent::select('content')->where('name','feature')->first();
        $data['chart1']= SiteContent::select('content')->where('name','chart1')->first();
        $data['chart2']= SiteContent::select('content')->where('name','chart2')->first();
        $data['chart3']= SiteContent::select('content')->where('name','chart3')->first();
        $data['special_cource']= SiteContent::select('content')->where('name','special_cource')->first();
        $data['testimonial']= SiteContent::select('content')->where('name','testimonial')->first();








        $data['courses']= Course::select('id','name','small_desc','cat_id','trainer_id','img','price')
        ->orderBy('id','asc')->take(3)->get();
        //dd($data['courses']);
        $data['courses_count'] = Course::count();
        $data['students_count'] = Student::count();
        $data['trainers_count'] = Trainer::count();
        // dd( $data['students_count']);
        $data['tests']=Testi::select('id','name','desc','spec','img')->get();
        //dd($data['tests']);
        return view('Front.index')->with($data);
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
