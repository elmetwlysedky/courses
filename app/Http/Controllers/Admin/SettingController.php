<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){


        return view('Dashboard.setting.index',[
            'setting' => Setting::all()
        ]);
    }
    public function edit($id){


        return view('Dashboard.Setting.edit',[
            'setting' => Setting:: findOrFail($id)
        ]);

    }
    public function update(SettingRequest $request , $id){

        $sitting = Setting::findOrFail($id);
        $data = $request->validated();

        $sitting ->update($data);
        return redirect()->route('setting.index');

    }
}
