<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Filament\Tables\Table;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        @ini_set('max_execution_time', '300');
        @ini_set('memory_limit', '512M');

        Table::configureUsing(function (Table $table): void {
            $table
                ->paginated([5])
                ->defaultPaginationPageOption(5);
        });
    }
}
