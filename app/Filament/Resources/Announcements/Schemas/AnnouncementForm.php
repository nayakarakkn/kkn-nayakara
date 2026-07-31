<?php

namespace App\Filament\Resources\Announcements\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class AnnouncementForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Pengumuman / Agenda')
                    ->required()
                    ->columnSpanFull(),

                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'Pengumuman' => 'Pengumuman Umum',
                        'Agenda' => 'Agenda / Kegiatan Warga',
                        'Urgent' => 'Penting / Darurat',
                    ])
                    ->default('Pengumuman')
                    ->required(),

                DateTimePicker::make('event_date')
                    ->label('Tanggal & Waktu Acara (Jika Ada)'),

                Textarea::make('content')
                    ->label('Isi Detail Pengumuman / Info Kegiatan')
                    ->required()
                    ->rows(4)
                    ->columnSpanFull(),

                Toggle::make('is_pinned')
                    ->label('Sematkan di Atas (Pinned)')
                    ->default(false),

                Toggle::make('is_active')
                    ->label('Tampilkan di Website Publik')
                    ->default(true),
            ]);
    }
}
