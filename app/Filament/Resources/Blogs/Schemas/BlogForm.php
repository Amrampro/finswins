<?php

namespace App\Filament\Resources\Blogs\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                RichEditor::make('content')
                    ->required(),
                FileUpload::make('poster')
                    ->image()
                    ->imageEditor()
                    ->imageCropAspectRatio("1:1")
                    ->disk('public')
                    ->directory('blog')
                    ->required(),
                Select::make('blog_category_id')
                    ->relationship('blogCategory', 'name')
                    ->createOptionForm([
                        TextInput::make('name')
                        ->required()
                    ])
                    ->required(),
            ])->columns(1);
    }
}
