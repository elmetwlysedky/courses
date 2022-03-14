<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Country;
use App\Models\Course;
use App\Models\CourseUsers;
use App\Models\Interest;
use App\Models\Lesson;
use App\Models\User;
use App\Models\UserInterest;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
       return view('Dashboard.index',[
           'users' => User::all(),
           'students' => User::where('is_teacher',0)->get(),
           'teachers' => User::where('is_teacher',1)->get(),
           'courses' => Course::all(),
           'course_active' => Course::where('active' , 0),
           'course_not_active' => Course::where('active' , 1),
           'lessons' => Lesson::all(),
           'countries' => Country::all(),
           'interests' => Interest::all(),
           'course_users' =>CourseUsers::all(),
           'course_users_active' =>CourseUsers::where('active',1)->get(),
           'course_users_not_active' =>CourseUsers::where('active',0)->get(),


       ]);
    }


}
