<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use SebastianPopp\LaravelUptimeKumaPush\Jobs\UptimeKumaPush;

it('does not send a request when no push url is configured', function () {
    Config::set('uptime-kuma.push_url', null);
    Http::fake();

    (new UptimeKumaPush)->handle();

    Http::assertNothingSent();
});

it('sends a request to the configured push url', function () {
    $url = 'https://uptime.kuma.pet/api/push/xxxxxxxxxx?status=up&msg=OK&ping=';

    Config::set('uptime-kuma.push_url', $url);
    Http::fake();

    (new UptimeKumaPush)->handle();

    Http::assertSent(fn ($request) => $request->url() === $url);
});
