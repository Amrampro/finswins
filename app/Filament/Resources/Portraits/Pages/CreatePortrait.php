<?php

namespace App\Filament\Resources\Portraits\Pages;

use App\Filament\Resources\Portraits\PortraitResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePortrait extends CreateRecord
{
    protected static string $resource = PortraitResource::class;
}
