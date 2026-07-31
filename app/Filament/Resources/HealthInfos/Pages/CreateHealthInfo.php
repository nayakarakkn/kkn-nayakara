<?php

namespace App\Filament\Resources\HealthInfos\Pages;

use App\Filament\Resources\HealthInfos\HealthInfoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateHealthInfo extends CreateRecord
{
    protected static string $resource = HealthInfoResource::class;

    protected static bool $canCreateAnother = false;

    public function canCreateAnother(): bool
    {
        return false;
    }
}
