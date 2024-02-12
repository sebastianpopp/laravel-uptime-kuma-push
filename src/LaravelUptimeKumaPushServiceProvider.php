<?php

namespace SebastianPopp\LaravelUptimeKumaPush;

use Illuminate\Support\ServiceProvider;

class LaravelUptimeKumaPushServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/uptime-kuma.php', 'uptime-kuma'
        );

        $this->publishes([
            __DIR__.'/../config/uptime-kuma.php' => config_path('uptime-kuma.php')
        ], 'uptime-kuma-config');

        $this->app->singleton('sebastianpopp.laravel-uptime-kuma-push.console.kernel', function($app) {
            $dispatcher = $app->make(\Illuminate\Contracts\Events\Dispatcher::class);

            return new \SebastianPopp\LaravelUptimeKumaPush\Console\Kernel($app, $dispatcher);
        });

        $this->app->make('sebastianpopp.laravel-uptime-kuma-push.console.kernel');
    }
}
