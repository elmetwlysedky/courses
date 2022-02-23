<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



    Route::get('dashboard/admin/login','App\Http\Controllers\Admin\LoginController@login')->name('dashboard.login');
    Route::post('dashboard/admin/login','App\Http\Controllers\Admin\LoginController@admin_login')->name('admin.login');

    Route::group(
        [
            'prefix' =>'admin', 'namespace' => 'App\Http\Controllers\Admin' , 'middleware' => 'auth:admin'
        ], function() {

            Route::get('/' , 'HomeController@index')->name('admin.home');

            Route::resource('interest', 'InterestController');




    });
