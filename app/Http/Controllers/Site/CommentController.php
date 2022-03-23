<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\CommentRequest;
use App\Models\CommentCourse;
use App\Models\Course;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        return view('Site.Comment.index',[
            'comment'=> CommentCourse::with('course')->latest()->Paginate(12)
        ]);
    }

    public function store(CommentRequest $request)
    {
        $data = $request->validated();
        CommentCourse::create($data);
        return redirect()->back();
    }



    public function show($id)
    {
        return view('Site.Comment.index',[
            'course' => Course::findOrFail($id)
        ]);
    }


    public function edit($id)
    {
        return view('Dashboard.Interest.edit',[
            'comment' =>CommentCourse::findOrFail($id)
        ]);
    }


    public function update(CommentRequest $request, $id)
    {
        $comment = CommentCourse::findOrFail($id);
        $data =$request->validated();
        $comment-> update($data);
        return redirect()->back();
    }


    public function destroy($id)
    {
        CommentCourse::destroy($id);
        return redirect()->back();
    }
}
