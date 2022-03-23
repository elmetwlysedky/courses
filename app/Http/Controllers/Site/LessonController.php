<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\LessonRequest;
use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index(){
        return view('Site.Lesson.index',[
            'lesson' => Lesson::all()
        ]);
    }

    public function create($id){
        return view('Site.Lesson.create',[
            'course' => Course::findOrFail($id)
        ]);

    }

    public function store(LessonRequest $request){

        $data = $request->validated();
        if($request -> image !=null) {
            $path = $request->file('image')->store('ImageLesson');
            $data['image'] = $path;
        }
        if($request -> video !=null) {
            $path_video = $request->file('video')->store('VideoLesson');
            $data['video'] = $path_video;
        }

        Lesson::create($data);
        return redirect()->route('site.course.show',$request->course_id);
    }

    public function show($id){
        return view('Site.Lesson.show',[
            'lesson' => Lesson::findOrFail($id)
        ]);
    }

    public function edite($id){
        return view('Site.Lesson.edit',[
            'lesson' => Lesson::findOrFail($id)
        ]);
    }

    public function update(LessonRequest $request ,$id){
        $lesson = Lesson::findOrFail($id);
        $data = $request->validated();

        if($request -> image !=null) {
            $path = $request->file('image')->store('ImageLesson');
            $data['image'] = $path;
        }
        if($request -> video !=null) {
            $path_video = $request->file('video')->store('VideoLesson');
            $data['video'] = $path_video;
        }
        $lesson->update($data);
        return redirect()->route('site.lesson.index');
    }

    public function destroy($id){
        $lesson = Lesson::destroy($id);
        return redirect()->back();
    }
}
