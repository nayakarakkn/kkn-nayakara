<?php

namespace App\Filament\Resources\Videos\Pages;

use App\Filament\Resources\Videos\VideoResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVideo extends CreateRecord
{
    protected static string $resource = VideoResource::class;

    protected static bool $canCreateAnother = false;

    public function getTitle(): string
    {
        return 'Tambah Video Baru';
    }

    public function canCreateAnother(): bool
    {
        return false;
    }
}
