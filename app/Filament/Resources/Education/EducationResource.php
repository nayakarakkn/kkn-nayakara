<?php

namespace App\Filament\Resources\Education;

use App\Filament\Resources\Education\Pages\CreateEducation;
use App\Filament\Resources\Education\Pages\EditEducation;
use App\Filament\Resources\Education\Pages\ListEducation;
use App\Filament\Resources\Education\Schemas\EducationForm;
use App\Filament\Resources\Education\Tables\EducationTable;
use App\Models\Education;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-academic-cap';
    protected static ?string $navigationLabel = 'Pendidikan';
    protected static ?string $modelLabel = 'Pendidikan';
    protected static ?string $pluralModelLabel = 'Pendidikan';
    protected static string|\UnitEnum|null $navigationGroup = 'Ekonomi & Layanan Warga';
    protected static ?int $navigationSort = 4;

    protected static ?string $recordTitleAttribute = 'name';

    public static function getGloballySearchableAttributes(): array
    {
        return ['name', 'type', 'address', 'contact_number'];
    }

    public static function form(Schema $schema): Schema
    {
        return EducationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return EducationTable::configure($table);
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
            'index' => ListEducation::route('/'),
            'create' => CreateEducation::route('/create'),
            'edit' => EditEducation::route('/{record}/edit'),
        ];
    }
}
