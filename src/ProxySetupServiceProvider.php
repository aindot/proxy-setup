<?php

namespace Aindot\ProxySetup;

use Illuminate\Support\Facades\URL;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasConfigFile();
    }

    public function bootingPackage(): void
    {
        if (config('proxy-setup.https')) {
            URL::forceScheme('https');
        }
    }
}
