<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Interest;

class ProfileController extends Controller
{
    public function index()
    {

        return view('Site.Profile.index', [
            'interest' => Interest::all()
        ]);
    }

    public function store_interest(Request $request)
    {


        $data = $request->validate([
            'interest_id' => ['required'],
            'user_id' => ['required']
        ]);


        $user = User::find($data['user_id']);

        $user->interests()->sync($data['interest_id']);


        dd($user->interests);

    }
}
