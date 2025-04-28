<?php

namespace App\Filament\Resources\OpenPositionResource\Pages;

use App\Filament\Resources\OpenPositionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOpenPosition extends EditRecord
{
    protected static string $resource = OpenPositionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
