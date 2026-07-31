<?php

namespace App\Filament\Resources\Videos\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VideoForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Judul Video')
                    ->placeholder('Contoh: Video Profil Kegiatan Keranggan')
                    ->required(),

                TextInput::make('category')
                    ->label('Kategori Video')
                    ->placeholder('Contoh: Kegiatan Warga / Profil Wilayah / Dokumenter')
                    ->default('Informasi Warga')
                    ->required(),

                TextInput::make('youtube_url')
                    ->label('Link URL atau ID YouTube')
                    ->placeholder('Contoh: https://www.youtube.com/watch?v=LXb3EKWsInQ atau LXb3EKWsInQ')
                    ->helperText('Anda cukup memasukkan link video YouTube lengkap atau 11 digit ID video.')
                    ->required(),

                Toggle::make('is_active')
                    ->label('Tampilkan di Website')
                    ->default(true),

                Textarea::make('description')
                    ->label('Deskripsi Singkat Video')
                    ->placeholder('Penjelasan singkat tentang isi video...')
                    ->rows(3)
                    ->columnSpanFull(),
            ]);
    }
}
