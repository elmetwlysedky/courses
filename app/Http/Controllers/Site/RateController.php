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

        Rate::updateOrCreate($data);
        return redirect()->back();
    }




}
