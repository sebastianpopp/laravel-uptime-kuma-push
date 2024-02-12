<?php

namespace SebastianPopp\LaravelUptimeKumaPush\Console;

use App\Console\Kernel as ConsoleKernel;
use Illuminate\Console\Scheduling\Schedule;
use SebastianPopp\LaravelUptimeKumaPush\Jobs\UptimeKumaPush;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        if (config('uptime-kuma.push_url')) {
            $schedule->job(new UptimeKumaPush)->everyMinute();
        }

        parent::schedule($schedule);
    }
}
