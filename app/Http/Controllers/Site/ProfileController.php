<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Models\Country;
use App\Models\Course;
use App\Models\Setting;
use App\Models\User;
use App\Models\UserInterest;
use Illuminate\Http\Request;
use App\Models\Interest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    public function __construct()
    {
        $setting = Setting::get();
        view::share('setting' , $setting);
    }
    public function index()
    {

        if(auth()->user()->is_teacher == 1){

        return view('Site.Profile.teacher', [
            'interest' => Interest::all(),
            'country' => Country::pluck('name' , 'id'),
            'user' => auth()->user(),

        ]);

        }else{
            return view('Site.Profile.student', [
            'interest' => Interest::all(),
            'country' => Country::pluck('name' , 'id'),
            'user' => auth()->user(),
        ]);
        }
    }


    public function update(ProfileRequest $request, $id)
    {
        $user = User::findorFail($id);
        $data = $request->validated();


        if($request->avatar != null) {
            $path = $request->file('avatar')->store('avatars',);
            $data['avatar']=$path;
        }

        $user->update ($data);
        return redirect()->back();
    }


    public function store_interest(Request $request)
    {

        $data = $request->validate([
            'interest_id' => ['required'],
            'user_id' => ['required']
        ]);
        $user = User::find($data['user_id']);
        $user->interests()->syncWithoutDetaching($data['interest_id']);
        return redirect()->back();
    }
}
