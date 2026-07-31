<?php

namespace App\Filament\Resources\Facilities\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FacilitiesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Fasilitas')
                    ->searchable()
                    ->weight('bold')
                    ->limit(25),
                ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->circular(),
                TextColumn::make('location')
                    ->label('Lokasi')
                    ->searchable()
                    ->limit(25),
                TextColumn::make('operational_hours')
                    ->label('Jam Operasional')
                    ->searchable()
                    ->limit(25),
                TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y, H:i')
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
