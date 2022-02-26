<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



    Route::get('dashboard/login','App\Http\Controllers\Admin\LoginController@create')->name('dashboard.login');
    Route::post('dashboard/login','App\Http\Controllers\Admin\LoginController@store')->name('admin.login');
    Route::post('dashboard/logout','App\Http\Controllers\Admin\LoginController@destroy')->name('dashboard.logout');


    Route::group(
            [
                'prefix' =>'admin', 'namespace' => 'App\Http\Controllers\Admin' , 'middleware' => 'auth:admin'
            ], function() {

                Route::get('/' , 'HomeController@index')->name('admin.home');

                Route::resource('interest', 'InterestController');




        });
