<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                RichEditor::make('message')
                    ->required(),
                FileUpload::make('avatar')
                    ->image()
                    ->imageEditor()
                    ->imageCropAspectRatio('1:1')
                    ->disk('public')
                    ->required(),
            ]);
    }
}
