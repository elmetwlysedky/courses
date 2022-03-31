<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Setting;
use Illuminate\Database\Schema\Builder;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Builder::defaultStringLength(191);

        Paginator::useBootstrap();

        View::composer('*', function ($view) {
            $course = Course::where('active',1)->get();
            $setting = Setting::all();

            $view->with('auth.login', $course ,$setting);
        });



    }
}
