<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\CategoryResource;
use App\Filament\Resources\CategoryResource\Widgets\StatsOverview;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    // use getFooterWidgets() to add widgets to the bottom of the page
    {
        return [
            StatsOverview::class,
        ];
    }
}
