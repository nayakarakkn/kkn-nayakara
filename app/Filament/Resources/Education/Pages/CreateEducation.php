<?php

namespace App\Filament\Resources\Education\Pages;

use App\Filament\Resources\Education\EducationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEducation extends CreateRecord
{
    protected static string $resource = EducationResource::class;

    protected static bool $canCreateAnother = false;

    public function canCreateAnother(): bool
    {
        return false;
    }
}
