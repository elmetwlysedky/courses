<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class ActiveCourseController extends Controller
{
    public function active(){

        return view('Dashboard.Courses.active',[
            'course'=> Course::where('active',1)->get()
        ]);
    }

    public function unactive(){

        return view('Dashboard.Courses.un_active',[
            'course'=> Course::where('active',0)->get()
        ]);
    }

    public function status(Request $request ,$id)
    {

        $status = Course::findorFail($id);

        if ($request->active == '0') {
            $status->active = $request->active;
            $status->save();
            return redirect()->back();
        } else {

            $status->active = $request->active;
            $status->save();
            return redirect()->back();
        }
    }
}
