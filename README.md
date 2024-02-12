# Laravel Uptime Kuma Push

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
