<?php

namespace App\Filament\Resources\TagResource\Widgets;

use App\Models\Tag;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('All Tags', Tag::all()->count()),
        ];
    }
}
