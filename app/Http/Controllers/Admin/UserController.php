<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UpdateUserRequest;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        return view('Dashboard.User.index',[
            'teacher' => User::where('is_teacher',1)->get(),
            'student' => User::where('is_teacher',0)->get(),
            'users'=> User::all(),
        ]);
    }

    public function create(){
        return view('Dashboard.User.create',[
            'country' => Country::pluck('name','id')
        ]);
    }

    public function store(UserRequest $request)
    {
        $data= $request->validated();

        $data ['password']= Hash::make($request->password);

        if($request->avatar != null) {
            $path = $request->file('avatar')->store('avatars',);
            $data['avatar']=$path;
        }
        User:: create($data);
        return redirect()->route('user.index');

    }

    public function show($id)
    {

        return view('Dashboard.User.show',[
        'user' => User::findOrFail($id),
            ]);
    }


    public function edit($id)
    {

        return view('Dashboard.User.edit',[
            'user'=> User::findOrFail($id),
            'country' => Country::pluck('name','id')
        ]);
    }

    public function update(UpdateUserRequest $request, $id)
    {

        $user = User::findorFail($id);
        $data= $request->except(['password']);
        if($request['password']!=null) {
            $data['password'] = Hash::make($request->password);
        }

        if($request->avatar != null) {
            $path = $request->file('avatar')->store('avatars',);
            $data['avatar']=$path;
        }

        $user->update ($data);
        return redirect()->route('user.index');
    }


    public function destroy($id)
    {
        $suer=User::destroy($id);
        return redirect()->back();
    }
}
