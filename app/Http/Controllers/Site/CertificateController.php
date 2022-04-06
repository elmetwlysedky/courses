<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CertificateController extends Controller
{
    public function download($id){

        return view('Site.Certificate.index',[
            'course' => Course::findOrFail($id),
            'date' => Carbon::createFromDate()
        ]);

    }
}
