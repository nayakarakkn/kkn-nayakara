<?php

namespace App\Filament\Resources\Complaints\Tables;

use App\Models\Complaint;
use Filament\Actions\Action;
use Filament\Actions\ActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ComplaintsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nama Warga')
                    ->searchable()
                    ->weight('bold')
                    ->limit(20),
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
                        'resolved' => 'success',
                        'in_progress' => 'primary',
                        'pending' => 'warning',
                        'rejected' => 'danger',
                        default => 'gray',
                    })
                    ->formatStateUsing(fn (string $state): string => match ($state) {
                        'resolved' => 'Selesai',
                        'in_progress' => 'Diproses',
                        'pending' => 'Baru',
                        'rejected' => 'Ditolak',
                        default => $state,
                    }),
                TextColumn::make('rt_rw')
                    ->label('RT / Lokasi')
                    ->searchable()
                    ->limit(18)
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Tgl Masuk')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->searchDebounce('150ms')
            ->paginated([5])
            ->defaultPaginationPageOption(5)
            ->recordActions([
                ActionGroup::make([
                    Action::make('process')
                        ->label('Proses')
                        ->icon('heroicon-o-arrow-path')
                        ->color('primary')
                        ->visible(fn (Complaint $record): bool => $record->status === 'pending')
                        ->action(fn (Complaint $record) => $record->update(['status' => 'in_progress'])),
                    Action::make('resolve')
                        ->label('Selesaikan')
                        ->icon('heroicon-o-check-circle')
                        ->color('success')
                        ->visible(fn (Complaint $record): bool => $record->status !== 'resolved')
                        ->action(fn (Complaint $record) => $record->update(['status' => 'resolved'])),
                    Action::make('reject')
                        ->label('Tolak')
                        ->icon('heroicon-o-x-circle')
                        ->color('danger')
                        ->visible(fn (Complaint $record): bool => $record->status !== 'rejected')
                        ->action(fn (Complaint $record) => $record->update(['status' => 'rejected'])),
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
