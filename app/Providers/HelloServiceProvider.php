<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        View::extend('hello', function ($attribute, $value, $parameters, $validator) {
            return $value % 2 == 0;
        });
    }
}