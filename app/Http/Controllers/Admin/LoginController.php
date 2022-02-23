<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('Dashboard.login');
    }

    public function admin_login(Request  $request){

        $this->validate($request,[
            'email' => 'required|string|email',
            'password' => 'required|string'
        ]);

        if(Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('admin.home');
        }
        return back()->withInput($request->only('email'));
    }
}
