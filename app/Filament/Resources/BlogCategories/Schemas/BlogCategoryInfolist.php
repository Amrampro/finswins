<?php

namespace App\Filament\Resources\BlogCategories\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class BlogCategoryInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}
