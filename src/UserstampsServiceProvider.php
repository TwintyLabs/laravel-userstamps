<?php

namespace TwintyLabs\Userstamps;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use TwintyLabs\Userstamps\Database\Schema\Macros\UserstampsMacro;

class UserstampsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('laravel-userstamps')->hasConfigFile('userstamps');
    }

    public function bootingPackage(): void
    {
        (new UserstampsMacro)->register();
    }
}
