<?php

namespace EricLagarda\ImageHelpers;

use EricLagarda\ImageHelpers\ImageHelpers;
use Illuminate\Support\ServiceProvider;

class ImageHelpersServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton('image-helpers', function () {
            return new ImageHelpers();
        });
    }
}
