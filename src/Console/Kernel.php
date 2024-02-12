<?php

namespace SebastianPopp\LaravelUptimeKumaPush\Console;

use App\Console\Kernel as ConsoleKernel;
use Illuminate\Console\Scheduling\Schedule;
use SebastianPopp\LaravelUptimeKumaPush\Jobs\UptimeKumaPush;

class Kernel extends ConsoleKernel
{
    protected function schedule(Schedule $schedule): void
    {
        parent::schedule($schedule);

        $schedule->job(new UptimeKumaPush)->everyMinute();
    }
}
