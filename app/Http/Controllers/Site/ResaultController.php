<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Interest;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Spatie\QueryBuilder\QueryBuilder;

class ResaultController extends Controller
{
    public function __construct()
    {
        $setting = Setting::get();
        view::share('setting' , $setting);
    }

    public function search(Request $request){

        $all =Interest::all();
        $title = $request->input('title');
        $teacher = $request->input('teacher');
        $teacher_id = User::where('name', 'LIKE' ,"%{$teacher}%")->first()->id;
        $search = $request->input('search');

        if (isset($search)){
        $courses = Course::query()
                ->where('title', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->orWhere('requirements', 'LIKE', "%{$search}%")
                ->get();
        }else {

            $courses = Course::query()
                ->where('title', 'LIKE', "%{$title}%")
                ->Where('teacher_id', $teacher_id)
                ->Where('free', 0)
                ->get();
            if (!isset($request->free)) {
                $courses =Course::query()
                    ->Where('price', '<=', $request->to)
                    ->Where('price', '>=', $request->from)
                    ->where('title', 'LIKE', "%{$title}%")
                    ->Where('teacher_id', $teacher_id)
                    ->Where('free', 1)
                    ->get();
            }

        }
//        return $courses;
        return view('Site.Search.index', compact('courses', 'all'));

    }




    public function interests($id){
        return view('Site.Search.interest',[
            'interest' =>Interest::findOrFail($id),
            'all' => Interest::all()
        ]);

    }
}
