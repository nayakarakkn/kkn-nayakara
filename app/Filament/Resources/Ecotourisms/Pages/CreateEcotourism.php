<?php

namespace App\Filament\Resources\Ecotourisms\Pages;

use App\Filament\Resources\Ecotourisms\EcotourismResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEcotourism extends CreateRecord
{
    protected static string $resource = EcotourismResource::class;

    protected static bool $canCreateAnother = false;

    public function canCreateAnother(): bool
    {
        return false;
    }
}
