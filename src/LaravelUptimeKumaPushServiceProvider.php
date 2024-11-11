<?php

namespace SebastianPopp\LaravelUptimeKumaPush;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\ServiceProvider;
use SebastianPopp\LaravelUptimeKumaPush\Jobs\UptimeKumaPush;

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
    }

    public function boot()
    {
        $this->callAfterResolving(Schedule::class, function (Schedule $schedule) {
            $schedule->job(new UptimeKumaPush)
                ->when(config('uptime-kuma.push_url'))
                ->everyMinute();
        });
    }
}
