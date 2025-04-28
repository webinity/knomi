<?php

namespace App\Filament\Resources\OpenPositionResource\Pages;

use App\Filament\Resources\OpenPositionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpenPositions extends ListRecords
{
    protected static string $resource = OpenPositionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
