<x-filament-panels::page>
    @php
        $selectedModule = $this->getSelectedModule();
        $selectedFormat = $this->getSelectedFormat();
        $previewRecords = $this->getPreviewRecords();
        $counts = $this->getModuleCounts();
    @endphp

    <!-- Single Integrated Export Form Card -->
    <x-filament::section icon="heroicon-o-adjustments-horizontal">
        <x-slot name="heading">
            Opsi Laporan & Ekspor Data
        </x-slot>
        <x-slot name="description">
            Pilih modul data dan format dokumen yang ingin Anda unduh atau cetak secara langsung.
        </x-slot>

        <form wire:submit="downloadReport" style="display: flex; flex-direction: column; gap: 1.25rem;">
            {{ $this->form }}

            <div style="display: flex; align-items: center; justify-content: space-between; padding-top: 1rem; border-top: 1px solid #f1f5f9; flex-wrap: wrap; gap: 1rem;">
                <div style="font-size: 13px; color: #64748b;">
                    Total: <strong style="color: #0f172a;">{{ $selectedModule === 'all' ? array_sum($counts) : ($previewRecords ? $previewRecords->count() : 0) }}</strong> baris data siap diekspor
                </div>

                <x-filament::button type="submit" color="success" size="lg" icon="heroicon-o-arrow-down-tray">
                    Unduh / Cetak Laporan ({{ strtoupper($selectedFormat) }})
                </x-filament::button>
            </div>
        </form>
    </x-filament::section>

    <!-- Clean Live Data Preview -->
    <x-filament::section icon="heroicon-o-eye" style="margin-top: 1.5rem;">
        <x-slot name="heading">
            Pratinjau Data Laporan
        </x-slot>

        @if($selectedModule === 'all')
            <div style="overflow-x: auto; border: 1px solid #e2e8f0; border-radius: 12px;">
                <table style="width: 100%; border-collapse: collapse; font-size: 13px; text-align: left;">
                    <thead>
                        <tr style="background: #f8fafc; color: #475569; font-weight: 600; font-size: 12px; text-transform: uppercase;">
                            <th style="padding: 12px 16px; border-bottom: 1px solid #e2e8f0;">Modul Data</th>
                            <th style="padding: 12px 16px; border-bottom: 1px solid #e2e8f0;">Jumlah Record</th>
                            <th style="padding: 12px 16px; border-bottom: 1px solid #e2e8f0;">Status Dokumen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="border-bottom: 1px solid #f1f5f9;">
                            <td style="padding: 12px 16px; font-weight: 600; color: #0f172a;">UMKM Warga</td>
                            <td style="padding: 12px 16px;"><x-filament::badge color="success">{{ $counts['umkm'] }} Usaha</x-filament::badge></td>
                            <td style="padding: 12px 16px; color: #64748b;">Siap Dicetak</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 12px 16px; font-weight: 600; color: #0f172a;">Fasilitas Publik</td>
                            <td style="padding: 12px 16px;"><x-filament::badge color="info">{{ $counts['facilities'] }} Sarana</x-filament::badge></td>
                            <td style="padding: 12px 16px; color: #64748b;">Siap Dicetak</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9;">
                            <td style="padding: 12px 16px; font-weight: 600; color: #0f172a;">Info Kesehatan</td>
                            <td style="padding: 12px 16px;"><x-filament::badge color="danger">{{ $counts['health_infos'] }} Faskes</x-filament::badge></td>
                            <td style="padding: 12px 16px; color: #64748b;">Siap Dicetak</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 12px 16px; font-weight: 600; color: #0f172a;">Sarana Pendidikan</td>
                            <td style="padding: 12px 16px;"><x-filament::badge color="primary">{{ $counts['education'] }} Instansi</x-filament::badge></td>
                            <td style="padding: 12px 16px; color: #64748b;">Siap Dicetak</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9;">
                            <td style="padding: 12px 16px; font-weight: 600; color: #0f172a;">Ekowisata & Taman</td>
                            <td style="padding: 12px 16px;"><x-filament::badge color="success">{{ $counts['ecotourisms'] }} Tempat</x-filament::badge></td>
                            <td style="padding: 12px 16px; color: #64748b;">Siap Dicetak</td>
                        </tr>
                        <tr style="border-bottom: 1px solid #f1f5f9; background: #f8fafc;">
                            <td style="padding: 12px 16px; font-weight: 600; color: #0f172a;">Pengumuman & Agenda</td>
                            <td style="padding: 12px 16px;"><x-filament::badge color="warning">{{ $counts['announcements'] }} Info</x-filament::badge></td>
                            <td style="padding: 12px 16px; color: #64748b;">Siap Dicetak</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        @elseif($previewRecords && $previewRecords->count() > 0)
            <div style="overflow-x: auto; border: 1px solid #e2e8f0; border-radius: 12px;">
                <table style="width: 100%; border-collapse: collapse; font-size: 13px; text-align: left;">
                    <thead>
                        <tr style="background: #f8fafc; color: #475569; font-weight: 600; font-size: 12px; text-transform: uppercase;">
                            <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">No</th>
                            @if($selectedModule === 'umkm')
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Nama Usaha</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Pemilik</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">No. WA</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Kategori</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Status</th>
                            @elseif($selectedModule === 'facilities')
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Nama Fasilitas</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Lokasi</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Jam Operasional</th>
                            @elseif($selectedModule === 'health_infos')
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Nama Faskes</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Jenis</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Jadwal Buka</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">No. Darurat</th>
                            @elseif($selectedModule === 'education')
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Nama Instansi</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Tingkat</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">No. Telepon</th>
                            @elseif($selectedModule === 'ecotourisms')
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Nama Tempat</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Lokasi</th>
                            @elseif($selectedModule === 'announcements')
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Judul</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Kategori</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Tgl Acara</th>
                                <th style="padding: 10px 14px; border-bottom: 1px solid #cbd5e1;">Status</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($previewRecords as $idx => $row)
                        <tr style="border-bottom: 1px solid #f1f5f9; background: {{ $idx % 2 === 0 ? '#ffffff' : '#f8fafc' }};">
                            <td style="padding: 10px 14px; font-weight: 600;">{{ $idx + 1 }}</td>
                            @if($selectedModule === 'umkm')
                                <td style="padding: 10px 14px; font-weight: bold; color: #0f172a;">{{ $row->business_name }}</td>
                                <td style="padding: 10px 14px;">{{ $row->owner_name }}</td>
                                <td style="padding: 10px 14px;">{{ $row->phone_number }}</td>
                                <td style="padding: 10px 14px;"><x-filament::badge color="info">{{ $row->category }}</x-filament::badge></td>
                                <td style="padding: 10px 14px;"><x-filament::badge :color="$row->status === 'approved' ? 'success' : 'warning'">{{ ucfirst($row->status) }}</x-filament::badge></td>
                            @elseif($selectedModule === 'facilities')
                                <td style="padding: 10px 14px; font-weight: bold; color: #0f172a;">{{ $row->name }}</td>
                                <td style="padding: 10px 14px;">{{ $row->location }}</td>
                                <td style="padding: 10px 14px;">{{ $row->operational_hours }}</td>
                            @elseif($selectedModule === 'health_infos')
                                <td style="padding: 10px 14px; font-weight: bold; color: #0f172a;">{{ $row->title }}</td>
                                <td style="padding: 10px 14px;"><x-filament::badge color="danger">{{ $row->type }}</x-filament::badge></td>
                                <td style="padding: 10px 14px;">{{ $row->schedule }}</td>
                                <td style="padding: 10px 14px;">{{ $row->contact_number }}</td>
                            @elseif($selectedModule === 'education')
                                <td style="padding: 10px 14px; font-weight: bold; color: #0f172a;">{{ $row->name }}</td>
                                <td style="padding: 10px 14px;">{{ $row->type }}</td>
                                <td style="padding: 10px 14px;">{{ $row->contact_number }}</td>
                            @elseif($selectedModule === 'ecotourisms')
                                <td style="padding: 10px 14px; font-weight: bold; color: #0f172a;">{{ $row->title }}</td>
                                <td style="padding: 10px 14px;">{{ $row->location }}</td>
                            @elseif($selectedModule === 'announcements')
                                <td style="padding: 10px 14px; font-weight: bold; color: #0f172a;">{{ $row->title }}</td>
                                <td style="padding: 10px 14px;"><x-filament::badge color="warning">{{ $row->category }}</x-filament::badge></td>
                                <td style="padding: 10px 14px;">{{ $row->event_date ? $row->event_date->format('d M Y, H:i') : '-' }}</td>
                                <td style="padding: 10px 14px;"><x-filament::badge :color="$row->is_active ? 'success' : 'gray'">{{ $row->is_active ? 'Aktif' : 'Non-Aktif' }}</x-filament::badge></td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div style="text-align: center; padding: 2rem; background: #f8fafc; border-radius: 12px; border: 1px solid #e2e8f0; color: #64748b; font-size: 13px;">
                Belum ada data tercatat untuk modul ini.
            </div>
        @endif
    </x-filament::section>
</x-filament-panels::page>
