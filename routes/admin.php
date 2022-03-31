<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



    Route::get('dashboard/login','App\Http\Controllers\Admin\LoginController@create')->name('dashboard.login');
    Route::post('dashboard/login','App\Http\Controllers\Admin\LoginController@store')->name('admin.login');
    Route::get('dashboard/logout','App\Http\Controllers\Admin\LoginController@destroy')->name('dashboard.logout');


    Route::group(
            [
                'prefix' =>'admin', 'namespace' => 'App\Http\Controllers\Admin' , 'middleware' => 'auth:admin'
            ], function() {

            Route::get('main' , 'HomeController@index')->name('admin.home');

            Route::resource('interest', 'InterestController');
            Route::resource('country', 'CountryController');
            Route::resource('user', 'UserController');
            Route::resource('userInterest', 'UserInterestsController');
            Route::resource('teacher', 'TeacherController');
            Route::resource('course', 'CourseController');
            Route::get('course-active','ActiveCourseController@active')->name('course-active');
            Route::get('course-un-active','ActiveCourseController@unactive')->name('course-un_active');
            Route::put('course-status/{id}','ActiveCourseController@status')->name('course-status');
            Route::resource('lesson', 'LessonController');
            Route::resource('course-user','CourseUserController');
            Route::put('course-user-status/{id}','CourseUserController@status')->name('course-user-status');

            Route::get('setting' , 'SettingController@index')->name('setting.index');
            Route::get('setting/edit/{id}', 'SettingController@edit')->name('setting.edit');
            Route::post('setting/update/{id}', 'SettingController@update')->name('setting.update');



    });
