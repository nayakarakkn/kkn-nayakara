<?php

namespace App\Filament\Resources\Ecotourisms;

use App\Filament\Resources\Ecotourisms\Pages\CreateEcotourism;
use App\Filament\Resources\Ecotourisms\Pages\EditEcotourism;
use App\Filament\Resources\Ecotourisms\Pages\ListEcotourisms;
use App\Filament\Resources\Ecotourisms\Schemas\EcotourismForm;
use App\Filament\Resources\Ecotourisms\Tables\EcotourismsTable;
use App\Models\Ecotourism;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EcotourismResource extends Resource
{
    protected static ?string $model = Ecotourism::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-map';
    protected static ?string $navigationLabel = 'Ekowisata';
    protected static ?string $modelLabel = 'Ekowisata';
    protected static ?string $pluralModelLabel = 'Ekowisata';
    protected static string|\UnitEnum|null $navigationGroup = 'Ekonomi & Layanan Warga';
    protected static ?int $navigationSort = 5;

    protected static ?string $recordTitleAttribute = 'title';

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'location'];
    }

    public static function form(Schema $schema): Schema
    {
        return EcotourismForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EcotourismsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListEcotourisms::route('/'),
            'create' => CreateEcotourism::route('/create'),
            'edit' => EditEcotourism::route('/{record}/edit'),
        ];
    }
}
