<?php

namespace App\Http\Controllers\Site;

use App\Events\AddCourse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\Interest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{
    public function __construct()
    {
        $setting = Setting::get();
        view::share('setting' , $setting);
    }

    public function index(){
        return view('Site.Course.index',[
            'courses' => Course::where('active','1')->paginate(6),
            'interests' => Interest::all(),
        ]);
    }

    public function intro($id){
        return view('Site.Course.intro',[
            'course'=> Course::findOrFail($id)
        ]);
    }

    public function create(){
        return view('Site.Course.create',[
        'interests' => Interest::pluck('name','id')
        ]);
    }

    public function store(CourseRequest $request){
        $data = $request->validated();
        $path = $request->file('image')->store('ImageCourse');
        $data['image'] = $path;

        if($request -> video_intro !=null) {
            $path_video = $request->file('video_intro')->store('VideoCourse');
            $data['video_intro'] = $path_video;
        }
        $course = Course::create($data);
        $course->interests()->attach($data['interest_id']);

        $data=[
                'teacher_id' => Auth()->user()->name,
                'title' => $request->title,
        ];
        event(new AddCourse($data));

        return redirect()->route('site.course.all');

    }

    public function show($id){
//dd(\request());
        if (request('id') && request('resourcePath')){
          $payment_status = $this->payment_status(request('id') && request('resourcePath'));
            if (isset($payment_status['id'])){
                $success_payment = true;
                return view('Site.Course.show',[
                    'course' => Course::findOrFail($id)
                ])->with(['success'=> $success_payment]);
            }else{
                $fail_payment = true;
                return view('Site.Course.show',[
                    'course' => Course::findOrFail($id)
                ])->with(['fail'=> $fail_payment]);
            }
            return redirect()->back();
        }
        return view('Site.course.show',[
            'course' => Course::findOrFail($id)
        ]);
    }

    public function edit($id){
        return view('Site.Course.edit',[
            'course' => Course::findOrFail($id),
            'interests' => Interest::pluck('name','id'),

        ]);
    }

    public function update(CourseRequest $request , $id){
        $course = Course::findOrFail($id);
        $data = $request->validated();

        if($request -> image !=null) {
            $path = $request->file('image')->store('ImageCourse');
            $data['image'] = $path;
        }
        if($request -> video_intro !=null) {
            $path_video = $request->file('video_intro')->store('VideoCourse');
            $data['video_intro'] = $path_video;
        }
        $course->update($data);
        $course->interests()->sync($data['interest_id']);

        return redirect()->route('site.course.all');
    }

    public function destroy($id){
        Course::destroy($id);
        return redirect()->back();
    }

    private function payment_status( $resourcePath){

        $url = "https://eu-test.oppwa.com/";
        $url .=$resourcePath;
        $url .= "?entityId=8a8294174b7ecb28014b9699220015ca";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization:Bearer OGE4Mjk0MTc0YjdlY2IyODAxNGI5Njk5MjIwMDE1Y2N8c3k2S0pzVDg='));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $responseData = curl_exec($ch);
        if(curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return json_decode( $responseData , true);
    }



}
