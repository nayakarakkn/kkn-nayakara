<?php

namespace App\Filament\Resources\HealthInfos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HealthInfoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Nama Fasilitas Kesehatan / Info')
                    ->required(),

                TextInput::make('type')
                    ->label('Jenis Layanan (Klinik/Apotek/Bidan)')
                    ->required(),

                TextInput::make('location')
                    ->label('Lokasi'),

                TextInput::make('contact_number')
                    ->label('Nomor Telepon/Darurat')
                    ->tel(),

                TextInput::make('schedule')
                    ->label('Jadwal Buka/Operasional')
                    ->columnSpanFull(),

                Textarea::make('description')
                    ->label('Keterangan Tambahan')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
