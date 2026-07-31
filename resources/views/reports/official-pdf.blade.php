<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Rekapitulasi Data Keranggan - {{ date('d M Y') }}</title>
    <style>
        @page {
            size: A4 portrait;
            margin: 1.5cm;
        }
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 11pt;
            color: #1e293b;
            line-height: 1.4;
            background: #ffffff;
            margin: 0;
            padding: 20px;
        }
        .header-kop {
            text-align: center;
            border-bottom: 3px double #000;
            padding-bottom: 12px;
            margin-bottom: 20px;
        }
        .header-kop h2 {
            margin: 0;
            font-size: 16pt;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .header-kop h3 {
            margin: 2px 0;
            font-size: 13pt;
            font-weight: bold;
            color: #059669;
        }
        .header-kop p {
            margin: 2px 0;
            font-size: 9pt;
            color: #64748b;
        }
        .title-doc {
            text-align: center;
            margin-bottom: 20px;
        }
        .title-doc h4 {
            margin: 0;
            font-size: 12pt;
            text-transform: uppercase;
            text-decoration: underline;
        }
        .title-doc p {
            margin: 3px 0 0 0;
            font-size: 9pt;
            color: #64748b;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 25px;
            font-size: 9.5pt;
        }
        th, td {
            border: 1px solid #cbd5e1;
            padding: 7px 10px;
            text-align: left;
        }
        th {
            background-color: #f1f5f9;
            font-weight: bold;
            color: #0f172a;
            text-transform: uppercase;
            font-size: 8.5pt;
        }
        tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .section-title {
            font-size: 11pt;
            font-weight: bold;
            margin: 15px 0 8px 0;
            color: #047857;
            border-bottom: 1px solid #a7f3d0;
            padding-bottom: 4px;
        }
        .ttd-container {
            margin-top: 40px;
            float: right;
            width: 230px;
            text-align: center;
        }
        .ttd-space {
            height: 70px;
        }
        .btn-print-bar {
            background: #f8fafc;
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
            margin-bottom: 20px;
        }
        .btn-print {
            background: #059669;
            color: white;
            border: none;
            padding: 8px 18px;
            font-size: 13px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
        }
        @media print {
            .btn-print-bar {
                display: none !important;
            }
            body {
                padding: 0;
            }
        }
    </style>
</head>
<body>

    <div class="btn-print-bar">
        <button onclick="window.print()" class="btn-print">🖨️ Cetak / Simpan ke PDF</button>
        <span style="font-size: 12px; color: #64748b; margin-left: 10px;">Tips: Pilih "Save as PDF" di dialog cetak browser Anda.</span>
    </div>

    <!-- Official Kop Surat -->
    <div class="header-kop">
        <h2>PENGURUS KELURAHAN KERANGGAN</h2>
        <h3>PORTAL INFORMASI PUBLIK KERANGGAN</h3>
        <p>Keranggan, Jakarta Timur | Contact: kkn.nayakara@gmail.com</p>
    </div>

    <!-- Document Header Title -->
    <div class="title-doc">
        <h4>LAPORAN REKAPITULASI DATA PORTAL INFORMASI PUBLIK KERANGGAN</h4>
        <p>Tanggal Cetak: {{ date('d F Y') }} WIB | KKN Nayakara Keranggan</p>
    </div>

    @if($module === 'all' || $module === 'announcements')
    <!-- Modul Pengumuman -->
    <div class="section-title">1. DATA PENGUMUMAN & AGENDA WARGA</div>
    <table>
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 35%;">Judul Pengumuman / Agenda</th>
                <th style="width: 15%;">Kategori</th>
                <th style="width: 25%;">Tanggal Acara</th>
                <th style="width: 20%;">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($announcements as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $item->title }}</strong></td>
                <td>{{ $item->category }}</td>
                <td>{{ $item->event_date ? $item->event_date->format('d M Y, H:i') : '-' }}</td>
                <td>{{ $item->is_active ? 'Aktif' : 'Non-Aktif' }} {{ $item->is_pinned ? '(Pinned)' : '' }}</td>
            </tr>
            @empty
            <tr><td colspan="5" style="text-align: center; color: #94a3b8;">Belum ada data pengumuman.</td></tr>
            @endforelse
        </tbody>
    </table>
    @endif

    @if($module === 'all' || $module === 'umkm')
    <!-- Modul UMKM -->
    <div class="section-title">2. DATA DIREKTORI UMKM WARGA</div>
    <table>
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 30%;">Nama Usaha</th>
                <th style="width: 20%;">Nama Pemilik</th>
                <th style="width: 15%;">No. WhatsApp</th>
                <th style="width: 15%;">Kategori</th>
                <th style="width: 15%;">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse($umkms as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $item->business_name }}</strong></td>
                <td>{{ $item->owner_name }}</td>
                <td>{{ $item->phone_number }}</td>
                <td>{{ $item->category }}</td>
                <td>{{ ucfirst($item->status) }}</td>
            </tr>
            @empty
            <tr><td colspan="6" style="text-align: center; color: #94a3b8;">Belum ada data UMKM.</td></tr>
            @endforelse
        </tbody>
    </table>
    @endif

    @if($module === 'all' || $module === 'facilities')
    <!-- Modul Fasilitas -->
    <div class="section-title">3. DATA FASILITAS PUBLIK LINGKUNGAN</div>
    <table>
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 35%;">Nama Fasilitas</th>
                <th style="width: 35%;">Lokasi / Alamat</th>
                <th style="width: 25%;">Jam Operasional</th>
            </tr>
        </thead>
        <tbody>
            @forelse($facilities as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $item->name }}</strong></td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->operational_hours }}</td>
            </tr>
            @empty
            <tr><td colspan="4" style="text-align: center; color: #94a3b8;">Belum ada data fasilitas.</td></tr>
            @endforelse
        </tbody>
    </table>
    @endif

    @if($module === 'all' || $module === 'health_infos')
    <!-- Modul Info Kesehatan -->
    <div class="section-title">4. DATA LAYANAN KESEHATAN & DARURAT</div>
    <table>
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 30%;">Nama Faskes / Klinik</th>
                <th style="width: 15%;">Jenis</th>
                <th style="width: 25%;">Jadwal Buka</th>
                <th style="width: 25%;">No. Kontak Darurat</th>
            </tr>
        </thead>
        <tbody>
            @forelse($health_infos as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $item->title }}</strong></td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->schedule }}</td>
                <td>{{ $item->contact_number }}</td>
            </tr>
            @empty
            <tr><td colspan="5" style="text-align: center; color: #94a3b8;">Belum ada data kesehatan.</td></tr>
            @endforelse
        </tbody>
    </table>
    @endif

    @if($module === 'all' || $module === 'education')
    <!-- Modul Pendidikan -->
    <div class="section-title">5. DATA SARANA PENDIDIKAN & FAKULTAS</div>
    <table>
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 40%;">Nama Instansi / Sekolah</th>
                <th style="width: 20%;">Tingkat</th>
                <th style="width: 35%;">No. Telepon / Kontak</th>
            </tr>
        </thead>
        <tbody>
            @forelse($educations as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $item->name }}</strong></td>
                <td>{{ $item->type }}</td>
                <td>{{ $item->contact_number }}</td>
            </tr>
            @empty
            <tr><td colspan="4" style="text-align: center; color: #94a3b8;">Belum ada data pendidikan.</td></tr>
            @endforelse
        </tbody>
    </table>
    @endif

    @if($module === 'all' || $module === 'ecotourisms')
    <!-- Modul Ekowisata -->
    <div class="section-title">6. DATA EKOWISATA & TAMAN PUBLIK</div>
    <table>
        <thead>
            <tr>
                <th style="width: 5%;">No</th>
                <th style="width: 45%;">Nama Tempat Ekowisata</th>
                <th style="width: 50%;">Lokasi Lingkungan</th>
            </tr>
        </thead>
        <tbody>
            @forelse($ecotourisms as $index => $item)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td><strong>{{ $item->title }}</strong></td>
                <td>{{ $item->location }}</td>
            </tr>
            @empty
            <tr><td colspan="3" style="text-align: center; color: #94a3b8;">Belum ada data ekowisata.</td></tr>
            @endforelse
        </tbody>
    </table>
    @endif

    <!-- Official Signature Section -->
    <div class="ttd-container">
        <p>Jakarta, {{ date('d F Y') }}<br>Mengetahui,<br><strong>Pengurus Kelurahan Keranggan</strong></p>
        <div class="ttd-space"></div>
        <p><u>( Pengurus Keranggan )</u><br><span style="font-size: 8.5pt; color: #64748b;">Kelurahan Keranggan, Jakarta Timur</span></p>
    </div>

</body>
</html>
