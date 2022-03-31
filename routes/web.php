<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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


        $setting = Setting::all();
    view::share('setting',$setting);


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');




    Route::group(
        [ 'namespace' => 'App\Http\Controllers\Site' ,'middleware' => ['auth' ]],function() {

        Route::get('/', 'HomeController@index')->name('main');

        Route::get('profile', 'ProfileController@index')->name('profile');
        Route::post('profile/interest', 'ProfileController@store_interest')->name('user.interest');
        Route::patch('profile/update/{id}', 'ProfileController@update')->name('profile.update');

        ///////////////////////////////
        Route::post('/changePassword','ChangePasswordController@changePasswordPost')->name('changePasswordPost');

        ////////////////////////////////  Route Course  /////////////////////////////////////////

        Route::get('course/intro/{id}','CourseController@intro')->name('course.intro');
        Route::get('course/show/{id}','CourseController@show')->name('site.course.show');
        Route::get('course/create','CourseController@create')->name('site.course.create')->middleware('teacher');
        Route::post('course/store','CourseController@store')->name('site.course.store')->middleware('teacher');
        Route::get('course/edit/{id}','CourseController@edit')->name('site.course.edit')->middleware('teacher');
        Route::get('course/update/{id}','CourseController@update')->name('site.course.update')->middleware('teacher');
        Route::delete('course/destroy/{id}','CourseController@destroy')->name('site.course.destroy')->middleware('teacher');
        Route::get('course/all','CourseController@index')->name('site.course.all');


        //////////////////////////////////  Route lesson ////////////////////////////////////////////

        Route::get('lesson/show/{id}','LessonController@show')->name('site.lesson.show');
        Route::get('lesson/create/{id}','LessonController@create')->name('site.lesson.create')->middleware('teacher');
        Route::post('lesson/store','LessonController@store')->name('site.lesson.store')->middleware('teacher');
        Route::get('lesson/edit/{id}','LessonController@edit')->name('site.lesson.edit')->middleware('teacher');
        Route::get('lesson/update/{id}','LessonController@update')->name('site.lesson.update')->middleware('teacher');
        Route::get('lesson/all','LessonController@index')->name('site.lesson.all');
        Route::get('lesson/destroy/{id}','LessonController@destroy')->name('site.lesson.destroy')->middleware('teacher');

        /////////////////////////////////// Route test ///////////////////////////////////////////////

        Route::get('test/create/{id}','TestController@create')->name('test.create')->middleware('teacher');
        Route::post('test/store','TestController@store')->name('test.store')->middleware('teacher');
        Route::get('test/show/{id}','TestController@show')->name('test.show');
        Route::get('test/edit/{id}','TestController@edit')->name('test.edit')->middleware('teacher');
        Route::get('test/update/{id}','TestController@update')->name('test.update')->middleware('teacher');


        /////////////////////////////////// Route rate ///////////////////////////////////////////////

        Route::post('rate/store','RateController@store')->name('rate.store');
        Route::post('rate/update/{id}','RateController@update')->name('rate.update');

        /////////////////////////////////// Route Notice Course ///////////////////////////////////////////////

        Route::resource('notice','NoticeCourseController');

        /////////////////////////////////// Route Contact ///////////////////////////////////////////////

        Route::resource('contact','ContactController');

        /////////////////////////////////// Route Comment ///////////////////////////////////////////////

        Route::resource('comment','CommentController');

        /////////////////////////////////// Route search ///////////////////////////////////////////////

        Route::get('search','ResaultController@search')->name('search');
        Route::get('course-with-category/{id}','ResaultController@interests')->name('course-with-category');

        /////////////////////////////////// Route about ///////////////////////////////////////////////

        Route::get('about','AboutController@index')->name('about');

        /////////////////////////////////// Route payment ///////////////////////////////////////////////

        Route::get('checkout/{id}' , 'PaymentController@request')->name('course.check');

        /////////////////////////////////  Route end lesson  ///////////////////////////////////////////

        Route::post('end-lesson','LessonUserController@store')->name('end.lesson');




    });

require __DIR__.'/auth.php';
