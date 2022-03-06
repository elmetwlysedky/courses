<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Interest;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        return view('Dashboard.Courses.index',[
            'courses' => Course::all()
        ]);
    }

    public function create(){
        return view('Dashboard.Courses.create',[
            'interests' => Interest::all(),
            'teachers' => Teacher::pluck('id')->user->name,

        ]);
    }

    public function store(CourseRequest $request){
        $data = $request->validated();
        $path = $request->file('image')->store('ImageCourse');
        $data['image'] = $path;

        if($request -> video_intro !=null) {
            $path_video = $request->file('video_intro')->store('VideoCourse');
            $data['video_intro'] = $path_video;
        }
        $course = Course::create($data);

        $course->interests()->attach($data['interest_id']);


        return redirect()->route('course.index');


    }

    public function show($id){
        return view('Dashboard.Courses.show',[
            'course' => Course::findOrFail($id)
        ]);
    }

    public function edit($id){
        return view('Dashboard.Courses.edit',[
            'course' => Course::findOrFail($id),
            'interests' => Interest::all(),
            'teachers' => Teacher::all()
        ]);
    }

    public function update(CourseRequest $request , $id){
        $course = Course::findOrFail($id);
        $data = $request->validated();

        if($request -> image !=null) {
            $path = $request->file('image')->store('ImageCourse');
            $data['image'] = $path;
        }
        if($request -> video_intro !=null) {
            $path_video = $request->file('video_intro')->store('VideoCourse');
            $data['video_intro'] = $path_video;
        }
       $course->update($data);
       $course->interests()->sync($data['interest_id']);

        return redirect()->route('course.index');
    }

    public function destroy($id){
        $course = Course::destroy($id);
        return redirect()->back();
    }

}
