<?php

namespace App\Filament\Resources\Facilities\Pages;

use App\Filament\Resources\Facilities\FacilityResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditFacility extends EditRecord
{
    protected static string $resource = FacilityResource::class;

    public function getTitle(): string
    {
        return 'Edit Data Fasilitas';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
