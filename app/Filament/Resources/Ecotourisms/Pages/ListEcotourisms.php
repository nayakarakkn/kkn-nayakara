<?php

namespace App\Filament\Resources\Ecotourisms\Pages;

use App\Filament\Resources\Ecotourisms\EcotourismResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEcotourisms extends ListRecords
{
    protected static string $resource = EcotourismResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
