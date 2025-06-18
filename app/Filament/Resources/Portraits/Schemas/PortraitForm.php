<?php

namespace App\Filament\Resources\Portraits\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class PortraitForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                FileUpload::make('image')
                    ->image()
                    ->required()
                    ->imageEditor()
                    ->imageCropAspectRatio("9:10")
                    ->disk('public'),
                RichEditor::make('description'),
            ])->columns(1);
    }
}
