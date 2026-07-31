<?php

namespace App\Filament\Resources\Announcements\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class AnnouncementsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->weight('bold')
                    ->limit(25),
                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'Urgent' => 'danger',
                        'Agenda' => 'warning',
                        default => 'info',
                    }),
                TextColumn::make('event_date')
                    ->label('Tgl Acara')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
                IconColumn::make('is_pinned')
                    ->label('Pinned')
                    ->boolean(),
                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime('d M Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->searchDebounce('150ms')
            ->paginated([5])
            ->defaultPaginationPageOption(5)
            ->recordActions([
                ActionGroup::make([
                    EditAction::make(),
                    DeleteAction::make()
                        ->color('success'),
                ]),
            ])
            ->bulkActions([
                DeleteBulkAction::make()
                    ->label('Hapus yang Dipilih')
                    ->icon('heroicon-m-trash')
                    ->color('success'),
            ]);
    }
}
