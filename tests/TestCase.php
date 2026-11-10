<?php

namespace SebastianPopp\LaravelUptimeKumaPush\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use SebastianPopp\LaravelUptimeKumaPush\LaravelUptimeKumaPushServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelUptimeKumaPushServiceProvider::class,
        ];
    }
}
