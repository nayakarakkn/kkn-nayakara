<?php

namespace App\Filament\Resources\Videos;

use App\Filament\Resources\Videos\Pages\CreateVideo;
use App\Filament\Resources\Videos\Pages\EditVideo;
use App\Filament\Resources\Videos\Pages\ListVideos;
use App\Filament\Resources\Videos\Schemas\VideoForm;
use App\Filament\Resources\Videos\Tables\VideoTable;
use App\Models\Video;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;

class VideoResource extends Resource
{
    protected static ?string $model = Video::class;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-video-camera';
    protected static ?string $navigationLabel = 'Kanal Video';
    protected static ?string $modelLabel = 'Video Informasi';
    protected static ?string $pluralModelLabel = 'Kanal Video';
    protected static string|\UnitEnum|null $navigationGroup = 'Ekonomi & Layanan Warga';
    protected static ?int $navigationSort = 6;

    protected static ?string $recordTitleAttribute = 'title';

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'category', 'description'];
    }

    public static function form(Schema $schema): Schema
    {
        return VideoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VideoTable::configure($table);
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
            'index' => ListVideos::route('/'),
            'create' => CreateVideo::route('/create'),
            'edit' => EditVideo::route('/{record}/edit'),
        ];
    }
}
