<?php

namespace App\Http\Controllers\Site;

use App\Events\AddCourse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Interest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function index(){
        return view('Site.Course.index',[
            'courses' => Course::where('active','1')->paginate(6),
            'interests' => Interest::all(),
        ]);
    }

    public function intro($id){
        return view('Site.Course.intro',[
            'course'=> Course::findOrFail($id)
        ]);
    }

    public function create(){
        return view('Site.Course.create',[
        'interests' => Interest::pluck('name','id')
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

        $data=[
                'teacher_id' => Auth()->user()->name,
                'title' => $request->title,
        ];
        event(new AddCourse($data));

        return redirect()->route('site.course.all');

    }

    public function show($id){

        return view('Site.Course.show',[
            'course' => Course::findOrFail($id)
        ]);
    }

    public function edit($id){
        return view('Site.Course.edit',[
            'course' => Course::findOrFail($id),
            'interests' => Interest::pluck('name','id'),

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

        return redirect()->route('site.course.all');
    }

    public function destroy($id){
        $course = Course::destroy($id);
        return redirect()->back();
    }



}
