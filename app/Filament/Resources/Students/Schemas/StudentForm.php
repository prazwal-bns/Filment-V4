<?php

namespace App\Filament\Resources\Students\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class StudentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('first_name')
                    ->required(),
                TextInput::make('last_name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DatePicker::make('date_of_birth')
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('address')
                    ->required(),
                TextInput::make('status')
                    ->required()
                    ->default('active'),
                DatePicker::make('admission_date')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('department_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
