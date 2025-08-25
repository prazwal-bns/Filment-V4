<?php

namespace App\Filament\Resources\Courses\Schemas;

use App\Models\Department;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class CourseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Course Information')
                    ->schema([
                        TextInput::make('course_title')
                            ->required(),
                        TextInput::make('credit_hours')
                            ->required()
                            ->numeric(),
                        Textarea::make('description')
                            ->columnSpanFull(),
                        Select::make('department_id')
                            ->relationship('department', 'name')
                            ->required(),
                    ])
                    ->columnSpanFull(),
            ]);
    }
}
