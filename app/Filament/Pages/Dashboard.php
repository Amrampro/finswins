<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\DashboardWidget;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{

    public function getWidgets(): array
    {
        return [
            DashboardWidget::class
        ];
    }
}
