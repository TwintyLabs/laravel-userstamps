<?php

namespace TwintyLabs\Userstamps\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use TwintyLabs\Userstamps\UserstampsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app): array
    {
        return [UserstampsServiceProvider::class];
    }
}
