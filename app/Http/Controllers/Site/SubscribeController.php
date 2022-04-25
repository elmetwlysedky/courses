<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseUserRequest;
use App\Models\Course;
use App\Models\CourseUsers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscribeController extends Controller
{
    public function store(CourseUserRequest $request ,$id){
        $data =$request->validated();
        $user = User::find($data['user_id']);

        $user->courses()->attach($data['course_id']);

        return redirect()->route('site.course.show',$id);
    }

}
