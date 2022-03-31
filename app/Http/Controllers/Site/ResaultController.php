<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Interest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ResaultController extends Controller
{
    public function __construct()
    {
        $setting = Setting::get();
        view::share('setting' , $setting);
    }

    public function search(Request $request){
        $all =Interest::all();
        $search = $request->input('search');
        $courses = Course::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('requirements', 'LIKE', "%{$search}%")
            ->get();
        return view('Site.Search.index',compact('courses', 'all'));
    }

    public function interests($id){
        return view('Site.Search.interest',[
            'interest' =>Interest::findOrFail($id),
            'all' => Interest::all()
        ]);

    }
}
