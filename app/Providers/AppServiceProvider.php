<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;
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
        Paginator::useBootstrap();
        view()->composer('apps.frontapp', function($view){
            $view->with('mainmenus', DB::table('main_menus')->orderBy('id', 'asc')->distinct()->get());
            $view->with('submenus', DB::table('sub_menus')->orderBy('id', 'asc')->distinct()->get());
            $view->with('routes', DB::table('routes')->orderBy('id', 'asc')->distinct()->get());
        });
    }
}
