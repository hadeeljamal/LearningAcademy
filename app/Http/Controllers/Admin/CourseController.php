<?php

namespace App\Http\Controllers\Admin;
use App\Cat;
use App\Http\Controllers\Controller;
use App\Course;
use App\Trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['courses'] = Course::select('id', 'name', 'price', 'img')->orderBy('id', 'desc')->paginate(6);
//        dd($data['trainers']);
        return view('admin.courses.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['cats'] = Cat::select('id','name')->get();
        $data['trainers'] = Trainer::select('id','name')->get();
        return view('Admin.courses.create')->with($data);
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
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:191',
            'desc' => 'required|string',
            'price' => 'required|integer|max:500',
            'cat_id' => 'required|exists:cats,id',
            'trainer_id' => 'required|exists:trainers,id',
            'img' => 'required|image|mimes:jpg,png',
        ]);
//        dd($data['img']);
        $new_name = $data['img']->hashName();
        Image::make($data['img'])->resize(970, 520)->save(public_path('uploads/courses/' . $new_name));
//        dd($new_name);
        $data['img'] = $new_name;
        Course::create($data);
        return redirect(route('admin.courses.index'));
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
        $data['cats'] = Cat::select('id','name')->get();
        $data['trainers'] = Trainer::select('id','name')->get();
        $data['course'] = Course::findOrFail($id);
        return view('Admin.courses.edit')->with($data);
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
            'name' => 'required|string|max:50',
            'small_desc' => 'required|string|max:191',
            'desc' => 'required|string',
            'price' => 'required|integer|max:500',
            'cat_id' => 'required|exists:cats,id',
            'trainer_id' => 'required|exists:trainers,id',
            'img' => 'nullable|image|mimes:jpg,png',
        ]);

        $old_name = Course::findOrFail($request->id)->img;
//        $new_name = $data['img']->hashName();
//        dd($old_name);
//        dd($new_name);
        if ($request->hasFile('img')) {
            Storage::disk('uploads')->delete('courses/' . $old_name);
            $new_name = $data['img']->hashName();
            Image::make($data['img'])->resize(970, 520)->save(public_path('uploads/courses/' . $new_name));
//        dd($new_name);
            $data['img'] = $new_name;
        } else {
            $data['img'] = $old_name;
        }

        Course::findOrFail($request->id)->update($data);
        return redirect(route('admin.courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old_name = Course::findOrFail($id)->img;
        Storage::disk('uploads')->delete('courses/' . $old_name);

        Course::findOrFail($id)->delete();
        return back();

    }
}
