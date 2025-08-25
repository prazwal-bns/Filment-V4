<?php

namespace App\Filament\Resources\Teachers\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TeacherForm
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
                TextInput::make('phone')
                    ->tel(),
                Textarea::make('address')
                    ->columnSpanFull(),
                DatePicker::make('date_of_birth')
                    ->required(),
                DatePicker::make('hire_date')
                    ->required(),
                TextInput::make('qualification')
                    ->required(),
                Textarea::make('specialization')
                    ->columnSpanFull(),
                TextInput::make('status')
                    ->required()
                    ->default('active'),
                Textarea::make('bio')
                    ->columnSpanFull(),
                TextInput::make('department_id')
                    ->numeric(),
            ]);
    }
}
