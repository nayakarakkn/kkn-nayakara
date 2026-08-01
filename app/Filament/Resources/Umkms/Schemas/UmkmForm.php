<?php

namespace App\Filament\Resources\Umkms\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UmkmForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('business_name')
                    ->label('Nama Usaha')
                    ->required(),

                TextInput::make('owner_name')
                    ->label('Nama Pemilik')
                    ->required(),

                TextInput::make('phone_number')
                    ->label('Nomor Telepon (WhatsApp)')
                    ->tel()
                    ->required(),

                TextInput::make('category')
                    ->label('Kategori (Kuliner/Jasa/dll)'),

                TextInput::make('address')
                    ->label('Alamat/Blok Rumah'),

                Select::make('status')
                    ->label('Status Persetujuan')
                    ->options([
                        'approved' => 'Disetujui (Tampil di Web Publik)',
                        'pending' => 'Menunggu Persetujuan Admin',
                        'rejected' => 'Ditolak',
                    ])
                    ->default('approved')
                    ->required(),

                Textarea::make('description')
                    ->label('Deskripsi Produk/Jasa')
                    ->rows(3)
                    ->columnSpanFull(),

                FileUpload::make('image')
                    ->label('Foto Usaha/Produk')
                    ->image()
                    ->disk('public')
                    ->directory('umkms')
                    ->maxSize(10240)
                    ->columnSpanFull(),
            ]);
    }
}
