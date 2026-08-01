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

                FileUpload::make('image')
                    ->label('Foto Tempat')
                    ->image()
                    ->disk('public')
                    ->directory('ecotourisms')
                    ->visibility('public')
                    ->shouldFetchFileInformation(false)
                    ->columnSpanFull(),
            ]);
    }
}
