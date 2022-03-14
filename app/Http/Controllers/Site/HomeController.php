<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{

    public function __construct()
    {
        $course =  Course::where('active',1)->paginate(9);
        view::share('course' , $course);
    }

    public function index(){
        return view('Site.index');
    }
}
