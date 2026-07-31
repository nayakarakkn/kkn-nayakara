<x-filament-panels::page>
    @php
        $selectedModule = $this->getSelectedModule();
        $selectedFormat = $this->getSelectedFormat();
        $previewRecords = $this->getPreviewRecords();
        $counts = $this->getModuleCounts();
    @endphp

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1rem; margin-bottom: 1.5rem;">
        <x-filament::section>
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <div style="width: 42px; height: 42px; border-radius: 12px; background: #ecfdf5; color: #059669; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; border: 1px solid #a7f3d0;">
                    📂
                </div>
                <div>
                    <div style="font-size: 11px; color: #64748b; font-weight: 600; text-transform: uppercase;">Modul Terpilih</div>
                    <div style="font-size: 14px; font-weight: bold; color: #0f172a; margin-top: 2px;">
                        @if($selectedModule === 'all') Rekapitulasi Lengkap Keranggan
                        @elseif($selectedModule === 'umkm') UMKM
                        @elseif($selectedModule === 'facilities') Fasilitas Publik
                        @elseif($selectedModule === 'health_infos') Kesehatan
                        @elseif($selectedModule === 'education') Pendidikan
                        @elseif($selectedModule === 'ecotourisms') Ekowisata
                        @elseif($selectedModule === 'announcements') Pengumuman & Agenda
                        @endif
                    </div>
                </div>
            </div>
        </x-filament::section>

        <x-filament::section>
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <div style="width: 42px; height: 42px; border-radius: 12px; background: #eff6ff; color: #2563eb; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; border: 1px solid #bfdbfe;">
                    📄
                </div>
                <div>
                    <div style="font-size: 11px; color: #64748b; font-weight: 600; text-transform: uppercase;">Format Berkas</div>
                    <div style="font-size: 14px; font-weight: bold; color: #0f172a; margin-top: 2px;">
                        @if($selectedFormat === 'pdf') PDF Berkop Surat (.pdf)
                        @else Excel Spreadsheet (.csv)
                        @endif
                    </div>
                </div>
            </div>
        </x-filament::section>

        <x-filament::section>
            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <div style="width: 42px; height: 42px; border-radius: 12px; background: #fffbeb; color: #d97706; display: flex; align-items: center; justify-content: center; font-size: 20px; font-weight: bold; border: 1px solid #fde68a;">
                    📊
                </div>
                <div>
                    <div style="font-size: 11px; color: #64748b; font-weight: 600; text-transform: uppercase;">Total Baris Data</div>
                    <div style="font-size: 14px; font-weight: bold; color: #0f172a; margin-top: 2px;">
                        @if($selectedModule === 'all') {{ array_sum($counts) }} Baris Data
                        @elseif($previewRecords) {{ $previewRecords->count() }} Baris Data
                        @else 0 Baris Data
                        @endif
                    </div>
                </div>
            </div>
        </x-filament::section>
    </div>

    <!-- Configuration Form Section -->
    <x-filament::section icon="heroicon-o-adjustments-horizontal">
        <x-slot name="heading">
            Pilih Modul & Format Laporan
        </x-slot>
        <x-slot name="description">
            Pilih jenis data yang ingin diekspor. Tabel pratinjau di bawah akan menyesuaikan secara otomatis.
        </x-slot>

        <form wire:submit="downloadReport" style="display: flex; flex-direction: column; gap: 1.25rem;">
            {{ $this->form }}

            <div style="display: flex; justify-content: flex-end; padding-top: 1rem; border-top: 1px solid #f1f5f9;">
                <x-filament::button type="submit" color="success" size="lg" icon="heroicon-o-arrow-down-tray">
                    Unduh / Cetak Laporan ({{ strtoupper($selectedFormat) }})
                </x-filament::button>
            </div>
        </form>
    </x-filament::section>

    <!-- Preview Table Section -->
    <x-filament::section icon="heroicon-o-eye" style="margin-top: 1.5rem;">
        <x-slot name="heading">
            Pratinjau Live Data Laporan
        </x-slot>
        <x-slot name="description">
            Tabel di bawah ini menampilkan pratinjau data aktual yang akan diunduh/dicetak.
        </x-slot>

        @if($selectedModule === 'all')
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 1rem; padding: 0.5rem 0;">
                <div style="background: #f8fafc; padding: 1rem; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <div style="font-size: 12px; color: #64748b; font-weight: 500;">UMKM Warga</div>
                    <div style="font-size: 20px; font-weight: bold; color: #0f172a; margin-top: 4px;">{{ $counts['umkm'] }} Usaha</div>
                </div>
                <div style="background: #f8fafc; padding: 1rem; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <div style="font-size: 12px; color: #64748b; font-weight: 500;">Fasilitas Publik</div>
                    <div style="font-size: 20px; font-weight: bold; color: #0f172a; margin-top: 4px;">{{ $counts['facilities'] }} Sarana</div>
                </div>
                <div style="background: #f8fafc; padding: 1rem; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <div style="font-size: 12px; color: #64748b; font-weight: 500;">Info Kesehatan</div>
                    <div style="font-size: 20px; font-weight: bold; color: #0f172a; margin-top: 4px;">{{ $counts['health_infos'] }} Faskes</div>
                </div>
                <div style="background: #f8fafc; padding: 1rem; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <div style="font-size: 12px; color: #64748b; font-weight: 500;">Pendidikan</div>
                    <div style="font-size: 20px; font-weight: bold; color: #0f172a; margin-top: 4px;">{{ $counts['education'] }} Instansi</div>
                </div>
                <div style="background: #f8fafc; padding: 1rem; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <div style="font-size: 12px; color: #64748b; font-weight: 500;">Ekowisata</div>
                    <div style="font-size: 20px; font-weight: bold; color: #0f172a; margin-top: 4px;">{{ $counts['ecotourisms'] }} Tempat</div>
                </div>
                <div style="background: #f8fafc; padding: 1rem; border-radius: 12px; border: 1px solid #e2e8f0;">
                    <div style="font-size: 12px; color: #64748b; font-weight: 500;">Pengumuman & Agenda</div>
                    <div style="font-size: 20px; font-weight: bold; color: #0f172a; margin-top: 4px;">{{ $counts['announcements'] }} Info</div>
                </div>
            </div>
            <div style="font-size: 12px; color: #64748b; font-style: italic; margin-top: 0.75rem;">
                *Mode Rekapitulasi Lengkap akan merangkum dan mengekspor seluruh 6 modul data di atas dalam 1 dokumen resmi.
            </div>
        @elseif($previewRecords && $previewRecords->count() > 0)
            <div style="overflow-x: auto; border: 1px solid #e2e8f0; border-radius: 12px; margin-top: 0.5rem;">
                <table style="width: 100%; border-collapse: collapse; font-size: 13px; text-align: left;">
                    <thead>
                        <tr style="background: #f1f5f9; color: #334155; font-weight: bold; font-size: 11px; text-transform: uppercase;">
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
