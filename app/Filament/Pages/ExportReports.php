<?php

namespace App\Filament\Pages;

use App\Models\Announcement;
use App\Models\Ecotourism;
use App\Models\Education;
use App\Models\Facility;
use App\Models\HealthInfo;
use App\Models\Umkm;
use BackedEnum;
use Filament\Forms\Components\Select;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Pages\Page;
use Filament\Schemas\Schema;
use Symfony\Component\HttpFoundation\StreamedResponse;

class ExportReports extends Page implements HasForms
{
    use InteractsWithForms;

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-document-chart-bar';

    protected static ?string $navigationLabel = 'Pusat Laporan & Ekspor';

    protected static ?string $title = 'Pusat Laporan & Ekspor Terpusat';

    protected static string|\UnitEnum|null $navigationGroup = 'Laporan & Rekapitulasi';

    protected static ?int $navigationSort = 1;

    protected string $view = 'filament.pages.export-reports';

    public ?string $module = 'all';
    public ?string $format = 'pdf';

    public function mount(): void
    {
        $this->form->fill([
            'module' => 'all',
            'format' => 'pdf',
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('module')
                    ->label('Pilih Modul Data')
                    ->options([
                        'all' => 'Semua Data (Rekapitulasi Lengkap Keranggan)',
                        'umkm' => 'UMKM Warga (Usaha & Kuliner)',
                        'facilities' => 'Fasilitas Publik Lingkungan',
                        'health_infos' => 'Info Kesehatan & Faskes Darurat',
                        'education' => 'Fakultas & Sarana Pendidikan',
                        'ecotourisms' => 'Ekowisata & Taman Publik',
                        'announcements' => 'Pengumuman & Agenda RW',
                    ])
                    ->default('all')
                    ->selectablePlaceholder(false)
                    ->live()
                    ->required(),
                Select::make('format')
                    ->label('Pilih Format Dokumen')
                    ->options([
                        'pdf' => 'Dokumen Cetak / PDF Resmi Berkop Surat (.pdf)',
                        'csv' => 'Excel / Spreadsheet (.csv)',
                    ])
                    ->default('pdf')
                    ->selectablePlaceholder(false)
                    ->live()
                    ->required(),
            ]);
    }

    public function getSelectedModule(): string
    {
        return $this->form->getState()['module'] ?? 'all';
    }

    public function getSelectedFormat(): string
    {
        return $this->form->getState()['format'] ?? 'pdf';
    }

    public function getPreviewRecords()
    {
        $module = $this->getSelectedModule();

        return match ($module) {
            'umkm' => Umkm::latest()->get(),
            'facilities' => Facility::latest()->get(),
            'health_infos' => HealthInfo::latest()->get(),
            'education' => Education::latest()->get(),
            'ecotourisms' => Ecotourism::latest()->get(),
            'announcements' => Announcement::latest()->get(),
            default => null,
        };
    }

    public function getModuleCounts(): array
    {
        return [
            'umkm' => Umkm::count(),
            'facilities' => Facility::count(),
            'health_infos' => HealthInfo::count(),
            'education' => Education::count(),
            'ecotourisms' => Ecotourism::count(),
            'announcements' => Announcement::count(),
        ];
    }

    public function downloadReport()
    {
        $module = $this->getSelectedModule();
        $format = $this->getSelectedFormat();

        if ($format === 'csv') {
            return $this->generateCsv($module);
        }

        return redirect()->route('report.pdf', ['module' => $module]);
    }

    protected function generateCsv(string $module)
    {
        $filename = 'laporan_rw05_' . $module . '_' . date('Y-m-d') . '.csv';

        return new StreamedResponse(function () use ($module) {
            $handle = fopen('php://output', 'w');
            fputs($handle, "\xEF\xBB\xBF"); // UTF-8 BOM

            if ($module === 'all' || $module === 'umkm') {
                fputcsv($handle, ['--- DATA UMKM WARGA ---']);
                fputcsv($handle, ['ID', 'Nama Usaha', 'Pemilik', 'No HP/WA', 'Kategori', 'Status', 'Alamat']);
                foreach (Umkm::all() as $row) {
                    fputcsv($handle, [$row->id, $row->business_name, $row->owner_name, $row->phone_number, $row->category, $row->status, $row->address]);
                }
                fputcsv($handle, []);
            }

            if ($module === 'all' || $module === 'facilities') {
                fputcsv($handle, ['--- DATA FASILITAS PUBLIK ---']);
                fputcsv($handle, ['ID', 'Nama Fasilitas', 'Lokasi', 'Jam Operasional']);
                foreach (Facility::all() as $row) {
                    fputcsv($handle, [$row->id, $row->name, $row->location, $row->operational_hours]);
                }
                fputcsv($handle, []);
            }

            if ($module === 'all' || $module === 'health_infos') {
                fputcsv($handle, ['--- DATA INFO KESEHATAN ---']);
                fputcsv($handle, ['ID', 'Nama Faskes', 'Jenis', 'Jadwal', 'Lokasi', 'No Darurat']);
                foreach (HealthInfo::all() as $row) {
                    fputcsv($handle, [$row->id, $row->title, $row->type, $row->schedule, $row->location, $row->contact_number]);
                }
                fputcsv($handle, []);
            }

            if ($module === 'all' || $module === 'education') {
                fputcsv($handle, ['--- DATA FAKULTAS & PENDIDIKAN ---']);
                fputcsv($handle, ['ID', 'Nama Instansi', 'Tingkat', 'Alamat', 'No Telepon']);
                foreach (Education::all() as $row) {
                    fputcsv($handle, [$row->id, $row->name, $row->type, $row->address, $row->contact_number]);
                }
                fputcsv($handle, []);
            }

            if ($module === 'all' || $module === 'ecotourisms') {
                fputcsv($handle, ['--- DATA EKOWISATA & TAMAN ---']);
                fputcsv($handle, ['ID', 'Nama Tempat', 'Lokasi']);
                foreach (Ecotourism::all() as $row) {
                    fputcsv($handle, [$row->id, $row->title, $row->location]);
                }
                fputcsv($handle, []);
            }

            if ($module === 'all' || $module === 'announcements') {
                fputcsv($handle, ['--- DATA PENGUMUMAN & AGENDA ---']);
                fputcsv($handle, ['ID', 'Judul', 'Kategori', 'Tanggal Acara', 'Pinned', 'Aktif']);
                foreach (Announcement::all() as $row) {
                    fputcsv($handle, [$row->id, $row->title, $row->category, $row->event_date?->format('Y-m-d H:i'), $row->is_pinned ? 'Ya' : 'Tidak', $row->is_active ? 'Ya' : 'Tidak']);
                }
            }

            fclose($handle);
        }, 200, [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => "attachment; filename=\"{$filename}\"",
        ]);
    }
}
