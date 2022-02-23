<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $date = Carbon::now()->toDateTimeString();
        return view('Site.index',compact('date'));
    }
}
