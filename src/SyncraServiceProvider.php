<?php

namespace VanDmade\Syncra;

use Illuminate\Support\ServiceProvider;

class SyncraServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->publishes([
            __DIR__.'/../config.php' => config_path('syncra.php'),
            __DIR__.'/../languages/en.php' => $this->app->langPath('en/syncra.php'),
        ]);
    }

}