<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TeamForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('role')
                    ->required(),
                Select::make('team_category_id')
                    ->createOptionForm([
                        TextInput::make('name')
                            ->required(),
                    ])
                    ->relationship('teamCategory', 'name')
                    ->required(),
            ]);
    }
}
