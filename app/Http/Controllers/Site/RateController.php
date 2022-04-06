<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\RateRequest;
use App\Models\Rate;
use Illuminate\Http\Request;

class RateController extends Controller
{

    public function store(RateRequest $request){

        $data = $request->validated();

        Rate::updateOrCreate([
            'user_id' => $request->user_id,
            'course_id' => $request->course_id
        ],[
            'user_id' => $request->user_id,
            'course_id' => $request->course_id,
            'rate' => $request->rate
        ]);
        return redirect()->back();
    }




}
