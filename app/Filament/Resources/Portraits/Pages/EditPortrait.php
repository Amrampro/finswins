<?php

namespace App\Filament\Resources\Portraits\Pages;

use App\Filament\Resources\Portraits\PortraitResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPortrait extends EditRecord
{
    protected static string $resource = PortraitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
