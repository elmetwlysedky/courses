<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestRequest;
use App\Models\Course;
use App\Models\Setting;
use App\Models\TestCourse;
use App\Models\UserTest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class TestController extends Controller
{
    public function __construct()
    {
        $setting = Setting::get();
        view::share('setting' , $setting);
    }
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
            'course' => Course::findOrFail($id),

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

    public function test( Request $request,$id){
//return $request;
//        $data = $request->validate([
//            'test_id' => ['required'],
//            'user_id' => Auth::id(),
//            'check' => ['required']
//        ]);


$course = Course::findOrFail($id);
 $test_course = $course->test->count();

 for ($i=1; $i <= $test_course; $i++) {
     UserTest:: create([
         'test_id' => $request->test_id,
         'user_id' => $request->user_id,
         'check' => $request['check' . $i]
     ]);
 }
        return redirect()->back();
    }
}
