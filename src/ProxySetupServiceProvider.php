<?php

namespace Aindot\ProxySetup;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Aindot\ProxySetup\Commands\ProxySetupCommand;

class ProxySetupServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('proxy-setup')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_proxy_setup_table')
            ->hasCommand(ProxySetupCommand::class);
    }
}
