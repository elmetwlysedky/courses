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
        [ 'namespace' => 'App\Http\Controllers\Site' ,'middleware' => ['auth' ]],function() {

        Route::get('/', 'HomeController@index')->name('main');

        Route::get('profile', 'ProfileController@index')->name('profile');
        Route::post('profile/interest', 'ProfileController@store_interest')->name('user.interest');
        ///////////////////////////////
        Route::post('/changePassword','ChangePasswordController@changePasswordPost')->name('changePasswordPost');
        ////////////////////////////////
        Route::get('course/intro/{id}','CourseController@intro')->name('course.intro');
        Route::get('course/create','CourseController@create')->name('site.course.create')->middleware('teacher');
        Route::post('course/store','CourseController@store')->name('site.course.store')->middleware('teacher');
        Route::get('course/edit/{id}','CourseController@edit')->name('site.course.edit')->middleware('teacher');
        Route::get('course/update/{id}','CourseController@update')->name('site.course.update')->middleware('teacher');
        Route::get('course/all','CourseController@index')->name('site.course.all');


    });

require __DIR__.'/auth.php';
