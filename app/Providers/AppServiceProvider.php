<?php

namespace App\Providers;

use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->configureModels();
        $this->configureFilament();

        TextColumn::configureUsing(function (TextColumn $column): void {
            $column->label(Str::headline($column->getLabel()));
        });
    }

    /**
     * Configure the models for the application.
     */
    private function configureModels(): void
    {
        Model::preventLazyLoading(! App::isProduction());
    }

    /**
     * Configure the Filament panel for the application.
     */
    private function configureFilament(): void
    {
        \Filament\Resources\Pages\CreateRecord::disableCreateAnother();
    }
}
