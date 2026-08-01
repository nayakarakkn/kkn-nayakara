<?php

namespace App\Filament\Resources\Facilities\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class FacilityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Fasilitas')
                    ->required(),

                TextInput::make('location')
                    ->label('Lokasi'),

                TextInput::make('operational_hours')
                    ->label('Jam Operasional')
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(3)
                    ->columnSpanFull(),

                TextInput::make('image')
                    ->label('Foto / Gambar (Path atau URL)')
                    ->placeholder('Contoh: images/logo_tangsel.png atau https://...')
                    ->columnSpanFull(),
            ]);
    }
}
