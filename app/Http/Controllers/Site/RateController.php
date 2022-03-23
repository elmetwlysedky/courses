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

        Rate::create($data);
        return redirect()->back();
    }


    public function update(TeacherRequest $request, $id)
    {
        $rate = Rate::findOrFail($id);
        $data = $request->validated();
        $rate-> update($data);
        return redirect()->back();
    }

}
