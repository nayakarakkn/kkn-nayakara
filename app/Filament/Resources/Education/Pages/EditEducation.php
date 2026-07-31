<?php

namespace App\Filament\Resources\Education\Pages;

use App\Filament\Resources\Education\EducationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEducation extends EditRecord
{
    protected static string $resource = EducationResource::class;

    public function getTitle(): string
    {
        return 'Edit Data Pendidikan';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
