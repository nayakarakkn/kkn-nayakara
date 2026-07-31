<?php

namespace App\Filament\Resources\Education\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EducationTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Instansi/Sekolah')
                    ->searchable()
                    ->weight('bold')
                    ->limit(25),
                TextColumn::make('type')
                    ->label('Tingkat')
                    ->badge()
                    ->searchable(),
                TextColumn::make('contact_number')
                    ->label('No. Telepon')
                    ->searchable(),
                TextColumn::make('address')
                    ->label('Alamat')
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
