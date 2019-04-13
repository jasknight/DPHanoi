<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

use Validator;

class ValidatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('is_identity_card', function ($attribute, $value, $parameters)
        {
            $re = '/^\d+$/';
            return preg_match($re, $value, $matches, PREG_OFFSET_CAPTURE, 0);
        });
    }
}
