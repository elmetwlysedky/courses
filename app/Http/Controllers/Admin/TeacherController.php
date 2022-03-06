<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeacherRequest;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        return view('Dashboard.Teacher.index',[
            'teacher'=>Teacher::all()
        ]);
    }

    public function create(){
        return view('Dashboard.Teacher.create',[
            'user'=>User::pluck('name','id')
            ]);
    }

    public function store(TeacherRequest $request){

        $data = $request->validated();
        if($request->cv != null) {
            $path = $request->file('cv')->store('CV_teacher',);
            $data['cv'] = $path;
        }
        Teacher::create($data);
        return redirect()->route('teacher.index');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('Dashboard.Teacher.edit',[
            'teacher' =>Teacher::findOrFail($id),
            'user'=> User::pluck('name','id')
        ]);
    }


    public function update(TeacherRequest $request, $id)
    {
        $interest = Teacher::findOrFail($id);
        $data = $request->validated();
        $interest-> update($data);
        return redirect()->route('teacher.index');
    }


    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect()->back();
    }
}
