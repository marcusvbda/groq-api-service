<?php

namespace marcusvbda\GroqApiService;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GroqApiServiceServiceProvider extends PackageServiceProvider
{
    public string $name = 'groq-api-service';

    public function configurePackage(Package $package): void
    {
        $package->name($this->name);
    }

    public function bootingPackage()
    {
        $this->loadMigrationsFrom(__DIR__ . '/migrations');

        $this->publishes([
            __DIR__ . '/pages/CustomManagerGroqApiServiceSettings.php' => app_path('Filament/Pages/ManagerGroqApiServiceSettings.php'),
            __DIR__ . '/migrations/create_groq-api-services-settings.php.php' => database_path("migrations/2025_08_04_223444_reate_groq-api-services-settings.php"),
        ], $this->name);
    }
}
