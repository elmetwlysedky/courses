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





    Route::group(
        [ 'namespace' => 'App\Http\Controllers\Site' ,'middleware' => ['auth','verified' ]],function() {

        Route::get('/', 'HomeController@index');
        Route::get('profile', 'ProfileController@index')->name('profile');
        Route::post('profile', 'ProfileController@store_interest')->name('user.interest');
        Route::post('/changePassword','ChangePasswordController@changePasswordPost')->name('changePasswordPost');


    });

require __DIR__.'/auth.php';
