<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Validators\HelloValidator;

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
        $validator = $this->app['validator'];
<<<<<<< HEAD
        $validator->resolver(function ($translator, $data, $rule, $messages) {
            return new HelloValidator($translator, $data, $rule, $messages);
=======
        $validator->resolver(function ($translator, $data, $rules, $messages) {
            return new HelloValidator($translator, $data, $rules, $messages);
>>>>>>> cd2f1cb77871223e7afea36df989212204f86f11
        });
    }
}