<?php

namespace App\Filament\Configurations;

use Filament\Actions\CreateAction as BaseCreateAction;
use Illuminate\Support\Str;

class ComponentGlobalConfiguration
{
    public static function configure(): void
    {
        // Create Action Label Capitalize
        BaseCreateAction::configureUsing(function (BaseCreateAction $createAction) {
            $createAction->label(function () use ($createAction) {
                return __('filament-actions::create.single.label', [
                    'label' => Str::headline($createAction->getModelLabel() ?? ''),
                ]);
            });

            $createAction->modalHeading(function () use ($createAction) {
                return __('filament-actions::create.single.modal.heading', [
                    'label' => Str::headline($createAction->getModelLabel() ?? ''),
                ]);
            });
        });
    }
}
