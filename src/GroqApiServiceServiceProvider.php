<?php

namespace marcusvbda\GroqApiService;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GroqApiServiceServiceProvider extends PackageServiceProvider
{
    public string $name = 'groq-api-service';

    public function configurePackage(Package $package): void
    {
        $package->name($this->name)
            ->hasMigrations([
                'create_groq-api-services-settings'
            ]);
    }

    public function bootingPackage()
    {
        $this->loadMigrationsFrom(__DIR__ . '/database/migrations');

        $this->publishes([
            __DIR__ . '/pages/CustomManagerGroqApiServiceSettings.php' => app_path('Filament/Pages/ManagerGroqApiServiceSettings.php'),
        ], $this->name);
    }
}
