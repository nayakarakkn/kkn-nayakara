<?php

namespace App\Filament\Widgets;

use App\Models\Umkm;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class UmkmCategoryChart extends ChartWidget
{
    protected static ?int $sort = 3;

    protected ?string $maxHeight = '300px';

    public function getHeading(): string
    {
        return 'Distribusi Kategori UMKM Warga';
    }

    protected function getData(): array
    {
        $categories = Umkm::select('category', DB::raw('count(*) as total'))
            ->whereNotNull('category')
            ->groupBy('category')
            ->pluck('total', 'category')
            ->toArray();

        $labels = array_keys($categories);
        $data = array_values($categories);

        if (empty($labels)) {
            $labels = ['Kuliner & Makanan', 'Jasa & Perbaikan', 'Retail & Kelontong', 'Kerajinan & Fashion'];
            $data = [5, 3, 2, 2];
        }

        return [
            'datasets' => [
                [
                    'label' => 'Total Usaha',
                    'data' => $data,
                    'backgroundColor' => [
                        '#10b981',
                        '#3b82f6',
                        '#f59e0b',
                        '#ec4899',
                        '#8b5cf6',
                        '#06b6d4',
                    ],
                    'borderColor' => '#ffffff',
                    'borderWidth' => 2,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
