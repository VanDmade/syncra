<?php

namespace VanDmade\Syncra;

use Illuminate\Support\ServiceProvider;

class SyncraServiceProvider extends ServiceProvider
{

    public function boot(): void
    {
        $this->loadMigrationsFrom(__DIR__.'/../migrations');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config.php', 'syncra');
        $this->publishes([
            __DIR__.'/../config.php' => config_path('syncra.php'),
            __DIR__.'/../languages/en.php' => $this->app->langPath('en/syncra.php'),
        ]);
    }

}