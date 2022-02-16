<?php

namespace App\Providers;

use App\Models\Navbar;
use View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }


    public function boot()
    {
        Schema::defaultStringLength(191);
        View::composer('*', function($view)
        {
            $navitem= Navbar::all();
            $view->with('navitem', $navitem);


        });
    }
}
