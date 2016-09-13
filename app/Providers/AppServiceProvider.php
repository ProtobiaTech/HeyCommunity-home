<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Validator;

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
        //
        Validator::extend('domain', function($attribute, $value, $parameters, $validator) {
            if (preg_match('/^([a-z0-9_-]+\.)?[a-z0-9_-]+\.[a-z0-9_-]+$/i', $value)) {
                return $value;
            } else {
                return false;
            }
        });

        //
        //
        Validator::extend('phone', function($attribute, $value, $parameters, $validator) {
            if (preg_match('/^1[34578][0-9]{9}$/', $value)) {
                return $value;
            } else {
                return false;
            }
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
