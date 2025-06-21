<?php

namespace App\Filament\Resources\Galleries\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class GalleryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('published_at')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                FileUpload::make('images')
                    ->image()
                    ->multiple()
                    ->disk("public")
                    ->columnSpanFull(),
            ]);
    }
}
