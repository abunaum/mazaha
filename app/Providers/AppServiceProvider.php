<?php

namespace App\Providers;

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
        View::share('nama_panel', config('setting.nama_panel'));
        View::share('title_panel', config('setting.title_panel'));
        View::share('url_panel', config('setting.url_panel'));
    }
}
