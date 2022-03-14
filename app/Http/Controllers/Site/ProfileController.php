<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserInterest;
use Illuminate\Http\Request;
use App\Models\Interest;

class ProfileController extends Controller
{
    public function index()
    {

        if(auth()->user()->is_teacher == 1){
        return view('Site.Profile.teacher', [
            'interest' => Interest::all(),
            'user_interest' => UserInterest::where('user_id', auth()->user()->id)
        ]);

        }else{
            return view('Site.Profile.student', [
            'interest' => Interest::all(),
            'user_interest' => UserInterest::where('user_id', auth()->user()->id)
        ]);
        }
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
