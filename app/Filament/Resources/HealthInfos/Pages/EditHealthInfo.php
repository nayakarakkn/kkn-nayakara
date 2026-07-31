<?php

namespace App\Filament\Resources\HealthInfos\Pages;

use App\Filament\Resources\HealthInfos\HealthInfoResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditHealthInfo extends EditRecord
{
    protected static string $resource = HealthInfoResource::class;

    public function getTitle(): string
    {
        return 'Edit Data Kesehatan';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
