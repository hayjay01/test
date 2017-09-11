<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //

        Schema::defaultStringLength(191);

        \Validator::extend('alpha_spaces', function ($attribute, $value)
        {

        // This will only accept alpha and spaces. 
        // If you want to accept hyphens use: /^[\pL\s-]+$/u.
        return preg_match('/^[0-9\pL\s]+$/u', $value); 

        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
