<?php

namespace App\Filament\Resources\Umkms\Tables;

use App\Models\Umkm;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UmkmsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('business_name')
                    ->label('Nama Usaha')
                    ->searchable()
                    ->weight('bold')
                    ->limit(22),
                TextColumn::make('owner_name')
                    ->label('Pemilik')
                    ->searchable()
                    ->limit(16),
                TextColumn::make('phone_number')
                    ->label('No. WA')
                    ->searchable(),
                TextColumn::make('category')
                    ->label('Kategori')
                    ->badge()
                    ->color('info')
                    ->searchable(),
                TextColumn::make('status')
                    ->label('Status')
                    ->badge()
                    ->color(fn (string $state): string => match ($state) {
                        'approved' => 'success',
                        'pending' => 'warning',
                        'rejected' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'approved' => 'Disetujui',
                        'pending' => 'Pending',
                        'rejected' => 'Ditolak',
                        default => $state,
                    }),
                ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->circular(),
                TextColumn::make('address')
                    ->label('Alamat')
                    ->searchable()
                    ->limit(20)
                    ->toggleable(isToggledHiddenByDefault: true),
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
                    Action::make('approve')
                        ->label('Setujui')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->visible(fn (Umkm $record): bool => $record->status !== 'approved')
                        ->action(fn (Umkm $record) => $record->update(['status' => 'approved'])),
                    Action::make('reject')
                        ->label('Tolak')
                        ->icon('heroicon-o-x-circle')
                        ->color('warning')
                        ->visible(fn (Umkm $record): bool => $record->status !== 'rejected')
                        ->action(fn (Umkm $record) => $record->update(['status' => 'rejected'])),
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
