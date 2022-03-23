<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Interest;
use Illuminate\Http\Request;

class ResaultController extends Controller
{
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
