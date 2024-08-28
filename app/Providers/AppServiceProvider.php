<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        Validator::extend('max_words', function($attribute, $value, $parameters, $validator) {
            $maxWords = (int)$parameters[0];
            return str_word_count($value) <= $maxWords;
        });
    
        Validator::extend('min_words', function($attribute, $value, $parameters, $validator) {
            $minWords = (int)$parameters[0];
            return str_word_count($value) >= $minWords;
        });
    }
}
