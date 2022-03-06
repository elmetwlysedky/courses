<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules;
use App\Models\Country;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {

        return view('auth.register',[
            'country'=> Country::all()
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' =>['required','string','max:15'],
            'country_id' =>['required','string','max:225'],
            'is_teacher' =>['required'],
            'gender' =>['required','string'],
            'avatar' =>['image','max:2048'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if($request->avatar != null) {

            $path = $request->file('avatar')->store('avatars',);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'country_id' => $request->country_id,
            'is_teacher' => $request->is_teacher,
            'gender' => $request->gender,
            'avatar' => $path,
           'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

//        if($user()->is_teacher() == 1){
//            return view('Site.profile.index');
//        }

        return redirect(RouteServiceProvider::HOME);
    }
}
