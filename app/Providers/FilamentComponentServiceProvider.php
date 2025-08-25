<?php

namespace App\Providers;

use App\Filament\Configurations\ComponentGlobalConfiguration;
use Illuminate\Support\ServiceProvider;

class FilamentComponentServiceProvider extends ServiceProvider
{

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        ComponentGlobalConfiguration::configure();
    }
}
