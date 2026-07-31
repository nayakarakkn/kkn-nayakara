<?php

namespace App\Filament\Resources\Facilities\Pages;

use App\Filament\Resources\Facilities\FacilityResource;
use Filament\Resources\Pages\CreateRecord;

class CreateFacility extends CreateRecord
{
    protected static string $resource = FacilityResource::class;

    protected static bool $canCreateAnother = false;

    public function canCreateAnother(): bool
    {
        return false;
    }
}
