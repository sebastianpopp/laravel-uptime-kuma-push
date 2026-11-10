<?php

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Config;

function scheduledUptimeKumaPushEvent(): object
{
    return app(Schedule::class)->events()[0];
}

it('does not run the push when no push url is configured', function () {
    Config::set('uptime-kuma.push_url', null);

    expect(scheduledUptimeKumaPushEvent()->filtersPass(app()))->toBeFalsy();
});

it('schedules the push using the configured frequency', function () {
    Config::set('uptime-kuma.push_url', 'https://uptime.kuma.pet/api/push/xxxxxxxxxx');
    Config::set('uptime-kuma.frequency', '*/5 * * * *');

    expect(scheduledUptimeKumaPushEvent()->getExpression())->toBe('*/5 * * * *');
});

it('defaults to every minute when no frequency is configured', function () {
    Config::set('uptime-kuma.push_url', 'https://uptime.kuma.pet/api/push/xxxxxxxxxx');
    Config::set('uptime-kuma.frequency', '* * * * *');

    expect(scheduledUptimeKumaPushEvent()->getExpression())->toBe('* * * * *');
});
