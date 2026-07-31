<?php

namespace App\Filament\Resources\Umkms\Pages;

use App\Filament\Resources\Umkms\UmkmResource;
use Filament\Resources\Pages\CreateRecord;

class CreateUmkm extends CreateRecord
{
    protected static string $resource = UmkmResource::class;
    
    protected static bool $canCreateAnother = false;

    public function canCreateAnother(): bool
    {
        return false;
    }
}
