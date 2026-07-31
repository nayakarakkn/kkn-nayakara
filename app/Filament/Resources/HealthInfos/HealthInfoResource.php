<?php

namespace App\Filament\Resources\HealthInfos;

use App\Filament\Resources\HealthInfos\Pages\CreateHealthInfo;
use App\Filament\Resources\HealthInfos\Pages\EditHealthInfo;
use App\Filament\Resources\HealthInfos\Pages\ListHealthInfos;
use App\Filament\Resources\HealthInfos\Schemas\HealthInfoForm;
use App\Filament\Resources\HealthInfos\Tables\HealthInfosTable;
use App\Models\HealthInfo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class HealthInfoResource extends Resource
{
    protected static ?string $model = HealthInfo::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-heart';
    protected static ?string $navigationLabel = 'Kesehatan';
    protected static ?string $modelLabel = 'Kesehatan';
    protected static ?string $pluralModelLabel = 'Kesehatan';
    protected static string|\UnitEnum|null $navigationGroup = 'Ekonomi & Layanan Warga';
    protected static ?int $navigationSort = 3;

    protected static ?string $recordTitleAttribute = 'title';

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'type', 'location', 'contact_number'];
    }

    public static function form(Schema $schema): Schema
    {
        return HealthInfoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return HealthInfosTable::configure($table);
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
            'index' => ListHealthInfos::route('/'),
            'create' => CreateHealthInfo::route('/create'),
            'edit' => EditHealthInfo::route('/{record}/edit'),
        ];
    }
}
