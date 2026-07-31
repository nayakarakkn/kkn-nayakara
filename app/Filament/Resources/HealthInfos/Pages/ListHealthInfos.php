<?php

namespace App\Filament\Resources\HealthInfos\Pages;

use App\Filament\Resources\HealthInfos\HealthInfoResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListHealthInfos extends ListRecords
{
    protected static string $resource = HealthInfoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
