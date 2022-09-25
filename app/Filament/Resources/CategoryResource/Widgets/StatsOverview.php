<?php

namespace App\Filament\Resources\CategoryResource\Widgets;

use App\Models\Tag;
use App\Models\Category;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Categories', Category::all()->count()),
        ];
    }
}
