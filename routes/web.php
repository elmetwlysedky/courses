<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

//Route::get('/',  function () {
//    return view('Site.index');
//
//});


//Route::get('verify', function () {
//    return view('auth.verify-email');
//
//});

    Route::group(
        [ 'namespace' => 'App\Http\Controllers\Site' ,'middleware'=>'verified'],function() {

        Route::get('/', 'HomeController@index');
    });

require __DIR__.'/auth.php';
