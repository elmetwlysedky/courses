<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoticeCourseRequest;
use App\Models\Course;
use App\Models\NoticeCourse;
use Illuminate\Http\Request;

class NoticeCourseController extends Controller
{

    public function index()
    {
        return view('Site.Notice.index',[
            'course'=> NoticeCourse::with('course')->latest()->Paginate(12)
        ]);
    }


    public function store(NoticeCourseRequest $request)
{
    $data = $request->validated();
    NoticeCourse::create($data);
    return redirect()->back();
}


    public function show($id)
    {
        return view('Site.Notice.index',[
            'course' => Course::findOrFail($id)
        ]);
    }


    public function edit($id)
    {
        return view('Dashboard.Interest.edit',[
            'notice' =>NoticeCourse::findOrFail($id)
        ]);
    }


    public function update(NoticeCourseRequest $request, $id)
    {
        $notice = NoticeCourse::findOrFail($id);
        $data =$request->validated();
        $notice-> update($data);
        return redirect()->back();
    }


    public function destroy($id)
    {
        NoticeCourse::destroy($id);
        return redirect()->back();
    }
}
