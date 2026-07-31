<?php

namespace App\Filament\Widgets;

use App\Models\Umkm;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestUmkmsWidget extends BaseWidget
{
    protected static ?int $sort = 4;
    protected int | string | array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Umkm::query()->latest()->limit(5)
            )
            ->heading('Pendaftaran UMKM Terbaru')
            ->columns([
                Tables\Columns\TextColumn::make('business_name')
                    ->label('Nama Usaha')
                    ->weight('bold'),
                Tables\Columns\TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (?string $state): string => match ($state) {
                        'Kuliner' => 'warning',
                        'Jasa' => 'info',
                        'Retail' => 'success',
                        default => 'gray',
                    }),
                Tables\Columns\TextColumn::make('owner_name')
                    ->label('Nama Pemilik')
                    ->description(fn (Umkm $record): string => $record->phone_number ?? '-'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Daftar')
                    ->date('d M Y'),
            ])
            ->paginated(false);
    }
}
