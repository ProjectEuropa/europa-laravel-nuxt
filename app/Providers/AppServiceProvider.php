<?php

namespace App\Providers;

use Illuminate\Routing\UrlGenerator;
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
    public function boot(UrlGenerator $url)
    {
        if (in_array(config('app.env'), ['production', 'staging'], true)) {
            $url->forceScheme('https');
        }
    }
}
