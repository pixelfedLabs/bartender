<?php

namespace Pixelfed\Bartender;

use Illuminate\Support\ServiceProvider;

class BartenderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/Bartender.php' => config_path('Bartender.php'),
            ], 'config');

            /*
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'Bartender');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/Bartender'),
            ], 'views');
            */
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'Bartender');
    }
}
