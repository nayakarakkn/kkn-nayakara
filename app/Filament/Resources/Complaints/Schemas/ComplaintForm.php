<?php

namespace App\Filament\Resources\Complaints\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class ComplaintForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Warga')
                    ->required(),

                TextInput::make('phone_number')
                    ->label('No. WhatsApp')
                    ->required(),

                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'Infrastruktur & Jalan' => 'Infrastruktur & Jalan',
                        'Kebersihan' => 'Kebersihan',
                        'Keamanan' => 'Keamanan',
                        'Layanan Publik' => 'Layanan Publik',
                        'Lainnya' => 'Lainnya',
                    ])
                    ->required(),

                Select::make('status')
                    ->label('Status Laporan')
                    ->options([
                        'pending' => 'Baru (Menunggu)',
                        'in_progress' => 'Sedang Diproses',
                        'resolved' => 'Selesai',
                        'rejected' => 'Ditolak',
                    ])
                    ->required(),

                TextInput::make('rt_rw')
                    ->label('RT / Alamat Rumah')
                    ->columnSpanFull(),

                Textarea::make('content')
                    ->label('Isi Laporan / Aspirasi Warga')
                    ->required()
                    ->rows(3)
                    ->columnSpanFull(),

                Textarea::make('admin_notes')
                    ->label('Catatan Tindak Lanjut Pengurus Keranggan')
                    ->placeholder('Catatan atau progres penanganan oleh pengurus...')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
