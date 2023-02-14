<?php

namespace Pavons\HelloLaravel;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Pavons\HelloLaravel\Commands\HelloLaravelCommand;

class HelloLaravelServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('hello-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_hello-laravel_table')
            ->hasCommand(HelloLaravelCommand::class);
    }
}
