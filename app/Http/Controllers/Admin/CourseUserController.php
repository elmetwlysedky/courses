<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseUserRequest;
use App\Models\Course;
use App\Models\CourseUsers;
use App\Models\User;
use Illuminate\Http\Request;

class CourseUserController extends Controller
{
    public function index(){

        return view('Dashboard.CourseUser.index',[
            'course' => CourseUsers::with('course','user')->get()
        ]);
    }

    public function create(){
        return view('Dashboard.CourseUser.create',[
            'courses' => Course::pluck('title','id'),
            'users'=> User::where('is_teacher',0)->pluck('name','id'),
        ]);
    }

    public function store(CourseUserRequest $request){
        $data =$request->validated();
        $user = User::find($data['user_id']);
//dd($user);
        $user->courses()->attach($data['course_id']);
        return redirect()->route('course-user.index');
    }


    public function status(Request $request ,$id)
    {

        $status = CourseUsers::findorFail($id);

        if ($request->active == 0) {
            $status->active = 1;
            $status->save();
            return redirect()->back();
        } else {

            $status->active = 0;
            $status->save();
            return redirect()->back();
        }
    }
}
