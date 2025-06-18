<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Portrait;
use App\Models\Team;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardWidget extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Team members', Team::count()),
            Stat::make('Blog Count', Blog::count()),
            Stat::make('Portrait Count', Portrait::count()),
        ];
    }
}
