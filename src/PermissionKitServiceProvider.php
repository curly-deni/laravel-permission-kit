<?php

namespace Aesis\PermissionKit;

use Composer\InstalledVersions;
use Illuminate\Foundation\Console\AboutCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class PermissionKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-permission-kit');
    }

    protected function registerAbout(): void
    {
        if (!class_exists(InstalledVersions::class) || !class_exists(AboutCommand::class)) {
            return;
        }

        AboutCommand::add('Permission Kit', static fn() => [
            'Author' => 'Danila Mikhalev (danila@dan-mi.ru)',
            'Version' => InstalledVersions::getPrettyVersion('curly-deni/laravel-permission-kit')
        ]);
    }
}
