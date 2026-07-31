<?php

namespace App\Filament\Widgets;

use App\Models\Announcement;
use App\Models\Facility;
use App\Models\Umkm;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardStats extends BaseWidget
{
    protected static ?int $sort = 1;

    protected function getStats(): array
    {
        $approvedUmkm = Umkm::where('status', 'approved')->count();
        $pendingUmkm = Umkm::where('status', 'pending')->count();
        $totalFacilities = Facility::count();
        $activeAnnouncements = Announcement::where('is_active', true)->count();

        return [
            Stat::make('UMKM Disetujui', $approvedUmkm)
                ->description('Usaha warga terverifikasi')
                ->descriptionIcon('heroicon-m-building-storefront')
                ->color('success')
                ->chart([5, 8, 12, 18, 25, 30, $approvedUmkm]),

            Stat::make('Pendaftaran Pending', $pendingUmkm)
                ->description($pendingUmkm > 0 ? 'Perlu persetujuan admin' : 'Semua pendaftaran diproses')
                ->descriptionIcon('heroicon-m-clock')
                ->color($pendingUmkm > 0 ? 'warning' : 'gray')
                ->chart([0, 1, 2, 1, 0, 0, $pendingUmkm]),

            Stat::make('Fasilitas Publik', $totalFacilities)
                ->description('Sarana & prasarana Keranggan')
                ->descriptionIcon('heroicon-m-home-modern')
                ->color('info')
                ->chart([2, 5, 8, 12, 16, 20, $totalFacilities]),

            Stat::make('Pengumuman Aktif', $activeAnnouncements)
                ->description('Info & agenda berjalan')
                ->descriptionIcon('heroicon-m-megaphone')
                ->color('primary')
                ->chart([1, 1, 2, 2, 3, 3, $activeAnnouncements]),
        ];
    }
}
