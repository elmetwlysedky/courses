<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\LessonUser;
use App\Models\User;
use Illuminate\Http\Request;

class LessonUserController extends Controller
{
    public function store( Request $request){

        $data = $request->validate([
            'lesson_id' => ['required'],
            'user_id' => ['required'],

        ]);


        $user = User::find($data['user_id']);
        $user->lessons()->sync($data['lesson_id']);
        return redirect()->back();
    }
}


