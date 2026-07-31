<?php

namespace App\Filament\Resources\Ecotourisms\Pages;

use App\Filament\Resources\Ecotourisms\EcotourismResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEcotourism extends EditRecord
{
    protected static string $resource = EcotourismResource::class;

    public function getTitle(): string
    {
        return 'Edit Data Ekowisata';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
