<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Interest;
use App\Models\User;
use App\Models\UserInterest;

class UserInterestsController extends Controller
{

    public function index(){
         return view('Dashboard.UserInterests.index',[
             'user' => User::all()
         ]);
    }



    public function create(){
        return view('Dashboard.UserInterests.create',[
            'users'=>User::all(),//pluck('name','id'),
            'interests'=> Interest::all()//pluck('name','id'),
        ]);
    }

    public function store( Request $request){

        $data = $request->validate([
            'interest_id' => ['required'],
            'user_id' => ['required']
        ]);

        $user = User::find($data['user_id']);
        $user->interests()->sync($data['interest_id']);

        return redirect()->route('userInterest.index');
    }

}
