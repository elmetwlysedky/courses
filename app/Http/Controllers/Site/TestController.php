<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use App\Models\Course;
use App\Models\TestCourse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){

    }

    public function create($id)
    {
        return view('Site.Test.create',[
            'course_id' => Course::findOrFail($id)
        ]);
    }


    public function store(TestRequest $request)
    {
        $test = $request->validated();
        TestCourse::create($test);
        return redirect()->route('profile');
    }


    public function show($id)
    {
        return view('Site.Test.Show',[
            'test' => TestCourse::with('course',$id)
        ]);
    }


    public function edit($id)
    {
        return view('Site.Test.edit',[
            'test' =>TestCourse::findOrFail($id)
        ]);
    }


    public function update(TestRequest $request, $id)
    {
        $test = TestCourse::findOrFail($id);
        $data = $request->validated();

        $test->update($data);
        return redirect()->route('profile');
    }


    public function destroy($id)
    {
        TestCourse::destroy($id);
        return redirect()->back();
    }
}
