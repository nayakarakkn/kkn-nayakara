<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Instansi/Sekolah')
                    ->required(),

                TextInput::make('type')
                    ->label('Tingkat Pendidikan (TK/SD/SMP/SMA)')
                    ->required(),

                TextInput::make('address')
                    ->label('Alamat Lengkap'),

                TextInput::make('contact_number')
                    ->label('Nomor Telepon')
                    ->tel(),

                Textarea::make('description')
                    ->label('Deskripsi/Informasi Tambahan')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
