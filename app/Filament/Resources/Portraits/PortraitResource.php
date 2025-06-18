<?php

namespace App\Filament\Resources\Portraits;

use App\Enums\FilamentNavigationEnum;
use App\Filament\Resources\Portraits\Pages\CreatePortrait;
use App\Filament\Resources\Portraits\Pages\EditPortrait;
use App\Filament\Resources\Portraits\Pages\ListPortraits;
use App\Filament\Resources\Portraits\Pages\ViewPortrait;
use App\Filament\Resources\Portraits\Schemas\PortraitForm;
use App\Filament\Resources\Portraits\Schemas\PortraitInfolist;
use App\Filament\Resources\Portraits\Tables\PortraitsTable;
use App\Models\Portrait;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class PortraitResource extends Resource
{
    protected static ?string $model = Portrait::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::Tag;
    protected static string | UnitEnum | null $navigationGroup = FilamentNavigationEnum::ADMINISTRATION;

    public static function form(Schema $schema): Schema
    {
        return PortraitForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PortraitInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PortraitsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPortraits::route('/'),
            //'create' => CreatePortrait::route('/create'),
            'view' => ViewPortrait::route('/{record}'),
            'edit' => EditPortrait::route('/{record}/edit'),
        ];
    }
}
