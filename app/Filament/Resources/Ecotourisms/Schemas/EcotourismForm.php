<?php

namespace App\Filament\Resources\Ecotourisms\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EcotourismForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Nama Tempat')
                    ->required()
                    ->maxLength(255),

                TextInput::make('location')
                    ->label('Lokasi/Alamat')
                    ->maxLength(255),

                Textarea::make('description')
                    ->label('Deskripsi Lengkap')
                    ->rows(3)
                    ->columnSpanFull(),

                TextInput::make('image')
                    ->label('Foto Tempat (Path atau URL)')
                    ->placeholder('Contoh: images/logo_tangsel.png atau https://...')
                    ->columnSpanFull(),
            ]);
    }
}
