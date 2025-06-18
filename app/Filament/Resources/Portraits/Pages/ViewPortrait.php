<?php

namespace App\Filament\Resources\Portraits\Pages;

use App\Filament\Resources\Portraits\PortraitResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPortrait extends ViewRecord
{
    protected static string $resource = PortraitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
