<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class ResidentActivityChart extends ChartWidget
{
    protected static ?int $sort = 2;
    protected ?string $maxHeight = '300px';

    public function getHeading(): string
    {
        return 'Grafik Aktivitas & Kunjungan Portal';
    }

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Kunjungan Warga',
                    'data' => [120, 340, 450, 300, 560, 780, 990],
                    'fill' => 'start',
                    'backgroundColor' => 'rgba(79, 70, 229, 0.2)',
                    'borderColor' => 'rgb(79, 70, 229)',
                ],
            ],
            'labels' => ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
