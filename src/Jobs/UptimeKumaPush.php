<?php

namespace SebastianPopp\LaravelUptimeKumaPush\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UptimeKumaPush implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function handle(): void
    {
        $push_url = config('uptime-kuma.push_url');

        if (! $push_url) {
            return;
        }

        @file_get_contents($push_url);
    }
}
