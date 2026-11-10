# Laravel Uptime Kuma Push

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sebastianpopp/laravel-uptime-kuma-push.svg?style=flat-square)](https://packagist.org/packages/sebastianpopp/laravel-uptime-kuma-push)
[![Tests](https://img.shields.io/github/actions/workflow/status/sebastianpopp/laravel-uptime-kuma-push/tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/sebastianpopp/laravel-uptime-kuma-push/actions/workflows/tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/sebastianpopp/laravel-uptime-kuma-push.svg?style=flat-square)](https://packagist.org/packages/sebastianpopp/laravel-uptime-kuma-push)
[![Plumb score](https://plumbphp.dev/badges/sebastianpopp/laravel-uptime-kuma-push/composite.svg)](https://plumbphp.dev/sebastianpopp/laravel-uptime-kuma-push)

Automatically push uptime checks to [Uptime Kuma](https://uptime.kuma.pet/).

## Installation

You can install the package via composer:

```bash
composer require sebastianpopp/laravel-uptime-kuma-push
```

You can optionally publish the config file with:

```bash
php artisan vendor:publish --tag="uptime-kuma-config"
```

This is the contents of the published config file:

```php
return [
    'push_url' => env('UPTIME_KUMA_PUSH_URL', null),

    // A standard cron expression, e.g. "*/5 * * * *" for every five minutes.
    'frequency' => env('UPTIME_KUMA_PUSH_FREQUENCY', '* * * * *'),
];
```

Add your push URL to your `.env` file:

```bash
UPTIME_KUMA_PUSH_URL="https://your.uptime.kuma.pet/api/push/xxxxxxxxxx?status=up&msg=OK&ping="
```

By default the push is scheduled every minute. You can change this by setting the
`UPTIME_KUMA_PUSH_FREQUENCY` environment variable to any standard
[cron expression](https://crontab.guru/), e.g.:

```bash
UPTIME_KUMA_PUSH_FREQUENCY="*/5 * * * *"
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
