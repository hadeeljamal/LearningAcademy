<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Trainer;
use App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Image;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['trainers'] = Trainer::select('id', 'name', 'phone', 'spec', 'img')->orderBy('id', 'desc')->get();
//        dd($data['trainers']);
        return view('admin.trainers.index')->with($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.trainers.create');
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
            'spec' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
            'img' => 'required|image|mimes:jpg,png',
        ]);
//        dd($data['img']);
        $new_name = $data['img']->hashName();
        Image::make($data['img'])->resize(50, 50)->save(public_path('uploads/trainers/' . $new_name));
//        dd($new_name);
        $data['img'] = $new_name;
        Trainer::create($data);
        return redirect(route('admin.trainers.index'));
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
        $data['trainer'] = Trainer::findOrFail($id);
        return view('Admin.trainers.edit')->with($data);
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
            'spec' => 'required|string|max:50',
            'phone' => 'required|string|max:20',
            'img' => 'nullable|image|mimes:jpg,png',
        ]);

        $old_name = Trainer::findOrFail($request->id)->img;
//        $new_name = $data['img']->hashName();
//        dd($old_name);
//        dd($new_name);
        if ($request->hasFile('img')) {
            Storage::disk('uploads')->delete('trainers/' . $old_name);
            $new_name = $data['img']->hashName();
            Image::make($data['img'])->resize(50, 50)->save(public_path('uploads/trainers/' . $new_name));
//        dd($new_name);
            $data['img'] = $new_name;
        } else {
            $data['img'] = $old_name;
        }

        Trainer::findOrFail($request->id)->update($data);
        return redirect(route('admin.trainers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $old_name = Trainer::findOrFail($id)->img;
        Storage::disk('uploads')->delete('trainers/' . $old_name);

        Trainer::findOrFail($id)->delete();
        return back();

    }
}
