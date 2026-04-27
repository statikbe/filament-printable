<?php

namespace Statik\FilamentPrintable;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPrintableServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-printable')
            ->hasTranslations();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('filament-printable-styles', __DIR__ . '/../resources/dist/filament-printable.css'),
        ], 'statikbe/filament-printable');
    }
}
