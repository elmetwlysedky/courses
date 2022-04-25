<?php

namespace App\Http\Controllers\Site;

use App\Events\AddCourse;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;
use App\Http\Requests\CourseUserRequest;
use App\Models\Course;
use App\Models\CourseUsers;
use App\Models\Interest;
use App\Models\Rate;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class CourseController extends Controller
{

    public function index()
    {
        return view('Site.Course.index', [
            'courses' => Course::where('active', '1')->paginate(6),
            'interests' => Interest::all(),
        ]);
    }

    public function intro($id)
    {
        $course = Course::findOrFail($id);

        if (count($course->rating) > 0) {
            $rate = $course->rating->avg('rate');
        }else{
            $rate = 0;
        }
//        dd(round($rate));
        return view('Site.Course.intro', [
            'course' => $course,
            'rate' =>  round($rate)
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
        broadcast(new AddCourse($data));

        return redirect()->route('site.course.all');

    }

    public function show($id){

        $course = Course::findOrFail($id);
        $user_rating =  $course->rating()->where('user_id', Auth::id())
            ->where('course_id', $course->id)->first()->rate ?? 0;

        if (request('id') && request('resourcePath')){
          $payment_status = $this->payment_status(request('resourcePath'));
// dd($payment_status);
            if (isset($payment_status['id'])){
                $success_payment = true;
$transaction_id= $payment_status['id'];
            $subscribe = $this->subscribe($transaction_id ,$course->id);
//dd($subscribe);

            return view('Site.course.show',compact('course','user_rating'))
                       ->with(['success'=> $success_payment]);

            }else{
                $fail_payment = true;
                return redirect()->back()->with(['fail'=> $fail_payment]);
            }

        }


        return view('Site.course.show',compact('course','user_rating'));
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

    private function payment_status( $resourcePath ){

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


    public function subscribe($transaction_id ,$id){
        CourseUsers::create([
            'course_id' => $id,
            'user_id' => Auth::id(),
            'transaction_id' => $transaction_id ,
        ]);

    }

}
