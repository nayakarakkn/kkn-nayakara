<?php

namespace App\Filament\Resources\Umkms\Pages;

use App\Filament\Resources\Umkms\UmkmResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditUmkm extends EditRecord
{
    protected static string $resource = UmkmResource::class;

    public function getTitle(): string
    {
        return 'Edit Data UMKM';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
