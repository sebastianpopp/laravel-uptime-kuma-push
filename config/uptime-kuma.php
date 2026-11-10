<?php

// config for SebastianPopp/LaravelUptimeKumaPush
return [
    'push_url' => env('UPTIME_KUMA_PUSH_URL', null),

    // A standard cron expression, e.g. "*/5 * * * *" for every five minutes.
    'frequency' => env('UPTIME_KUMA_PUSH_FREQUENCY', '* * * * *'),
];
