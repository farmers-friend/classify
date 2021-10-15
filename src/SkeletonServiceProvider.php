<?php

namespace Farmers-friend\Classify;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Farmers-friend\Classify\Commands\ClassifyCommand;

class ClassifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('classify')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_classify_table')
            ->hasCommand(ClassifyCommand::class);
    }
}
