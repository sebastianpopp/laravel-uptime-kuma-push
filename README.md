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

Add your push URL to your `.env` file:

```bash
UPTIME_KUMA_PUSH_URL="https://your.uptime.kuma.pet/api/push/xxxxxxxxxx?status=up&msg=OK&ping="
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
