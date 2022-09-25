<?php

namespace App\Filament\Resources\TagResource\Pages;

use Filament\Pages\Actions;
use App\Filament\Resources\TagResource;
use Filament\Resources\Pages\ListRecords;
use App\Filament\Resources\TagResource\Widgets\StatsOverview;

class ListTags extends ListRecords
{
    protected static string $resource = TagResource::class;

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
