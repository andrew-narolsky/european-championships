<?php

namespace App\Providers;

use App\Services\Localization\Localization;
use Illuminate\Support\ServiceProvider;

class LocalizationServiceProvider extends ServiceProvider
{
    public function register() : void
    {
        $this->app->singleton('Localization', function($app) {
            return new Localization();
        });
    }

    public function boot() : void
    {
        //
    }
}
