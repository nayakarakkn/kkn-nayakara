<?php

namespace Database\Seeders;

use App\Models\Announcement;
use App\Models\Complaint;
use App\Models\Ecotourism;
use App\Models\Education;
use App\Models\Facility;
use App\Models\HealthInfo;
use App\Models\Umkm;
use App\Models\Video;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Truncate existing data for clean reseeding
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Facility::truncate();
        Umkm::truncate();
        Ecotourism::truncate();
        HealthInfo::truncate();
        Education::truncate();
        Announcement::truncate();
        Video::truncate();
        Complaint::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        // 1. Seed UMKM Keranggan
        $umkms = [
            [
                'business_name' => 'Soto Lamongan Keranggan',
                'owner_name' => 'Bapak Agus Setiawan',
                'category' => 'Kuliner & Makanan',
                'phone_number' => '081234567890',
                'address' => 'Jl. Raya Keranggan No. 12',
                'description' => 'Soto ayam kampung gurih dengan koya renyah khas, kuah rempah pilihan segar yang disajikan hangat setiap hari.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Kerajinan Anyaman Bambu Keranggan',
                'owner_name' => 'Ibu Sri Rahayu',
                'category' => 'Kerajinan & Fashion',
                'phone_number' => '081398765432',
                'address' => 'Keranggan RT 02 / RW 01',
                'description' => 'Produk tas tradisional, wadah saji unik, dan hiasan dinding estetik buatan tangan asli perajin lokal Keranggan.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Warung Sembako & Sayur Berkah',
                'owner_name' => 'Ibu Hajah Maryam',
                'category' => 'Retail & Kelontong',
                'phone_number' => '085712345678',
                'address' => 'Keranggan RT 04 / RW 02',
                'description' => 'Menyediakan kebutuhan pokok harian warga, beras kualitas super, minyak goreng, dan sayuran segar langsung dari petani.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Kopi Nusantara Keranggan',
                'owner_name' => 'Mas Dimas Kurniawan',
                'category' => 'Kuliner & Makanan',
                'phone_number' => '081908765432',
                'address' => 'Jl. Ekowisata Keranggan No. 5',
                'description' => 'Aneka sajian kopi seduh manual, es kopi gula aren kekinian, teh herbal segar, dan kudapan gorengan renyah.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Dapur Makanan Tradisional Keranggan',
                'owner_name' => 'Ibu Fatimah',
                'category' => 'Kuliner & Makanan',
                'phone_number' => '082145678901',
                'address' => 'Keranggan RT 01 / RW 03',
                'description' => 'Nasi uduk gurih, kue basah tradisional, klepon pandan manis, dan aneka lauk pauk segar untuk sarapan warga.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Jasa Perbaikan Elektronik & HP',
                'owner_name' => 'Mas Rendy Pratama',
                'category' => 'Jasa & Perbaikan',
                'phone_number' => '087812345678',
                'address' => 'Keranggan RT 03 / RW 02',
                'description' => 'Layanan perbaikan mesin cuci, kulkas, AC rumah, serta servis cepat handphone rusak dengan garansi terpercaya.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Konveksi & Penjahit Busana Keranggan',
                'owner_name' => 'Ibu Nurhayati',
                'category' => 'Kerajinan & Fashion',
                'phone_number' => '081299887766',
                'address' => 'Keranggan RT 05 / RW 01',
                'description' => 'Melayani pemesanan jahit busana keluarga, baju batik, seragam sekolah, serta vermak cepat pakaian tepat waktu.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Percetakan & Fotokopi Keranggan',
                'owner_name' => 'Bapak Heru Santoso',
                'category' => 'Jasa & Perbaikan',
                'phone_number' => '085611223344',
                'address' => 'Jl. Utama Keranggan No. 18',
                'description' => 'Jasa cetak dokumen, jilid skripsi, pembuatan brosur, spanduk banner, dan fotokopi cepat dengan harga bersahabat.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Toko Alat Tulis & Perlengkapan Sekolah',
                'owner_name' => 'Ibu Rina Astuti',
                'category' => 'Retail & Kelontong',
                'phone_number' => '081377665544',
                'address' => 'Keranggan RT 02 / RW 02',
                'description' => 'Menyediakan perlengkapan alat tulis sekolah lengkap, buku pelajaran, mainan edukatif anak, dan buku gambar.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Barber & Potong Rambut Keranggan',
                'owner_name' => 'Mas Ahmad Rizky',
                'category' => 'Jasa & Perbaikan',
                'phone_number' => '089655443322',
                'address' => 'Keranggan RT 03 / RW 01',
                'description' => 'Layanan pangkas rambut pria dewasa dan anak-anak dengan berbagai model terkini, bersih, dan nyaman.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Katering Rumahan Ibu Fatimah',
                'owner_name' => 'Ibu Fatimah Zohra',
                'category' => 'Kuliner & Makanan',
                'phone_number' => '081233445566',
                'address' => 'Keranggan RT 01 / RW 02',
                'description' => 'Menerima pesanan nasi kotak higienis, hidangan prasmanan lezat, dan tumpeng hias untuk syukuran serta acara warga.',
                'status' => 'approved',
            ],
            [
                'business_name' => 'Laundry Sepatu & Pakaian Bersih',
                'owner_name' => 'Mas Fajar Hidayat',
                'category' => 'Jasa & Perbaikan',
                'phone_number' => '087788990011',
                'address' => 'Keranggan RT 04 / RW 01',
                'description' => 'Jasa cuci kiloan wangi tahan lama, dry clean pakaian pesta, cuci karpet masjid, dan perawatan deep clean sepatu.',
                'status' => 'approved',
            ],
        ];

        foreach ($umkms as $data) {
            Umkm::create($data);
        }

        // 2. Seed Facilities Keranggan
        $facilities = [
            [
                'name' => 'Balai Pertemuan Kelurahan Keranggan',
                'location' => 'Keranggan Tengah',
                'operational_hours' => 'Senin - Sabtu (08:00 - 16:00 WIB)',
                'description' => 'Gedung serbaguna fasilitas publik untuk rapat kelurahan, pengajian rutin, tempat musyawarah warga, dan acara kebudayaan.',
            ],
            [
                'name' => 'Lapangan Olahraga & Futsal Keranggan',
                'location' => 'Keranggan RT 03',
                'operational_hours' => 'Setiap Hari (06:00 - 21:00 WIB)',
                'description' => 'Fasilitas olahraga lapangan bulutangkis dan futsal outdoor untuk sarana kumpul kebugaran pemuda dan warga setempat.',
            ],
            [
                'name' => 'Pos Keamanan & Siskamling Utama',
                'location' => 'Pintu Masuk Keranggan',
                'operational_hours' => 'Buka 24 Jam Nonstop',
                'description' => 'Pos penjagaan siskamling 24 jam yang dilengkapi dengan perlengkapan patroli malam, kentongan, dan kontak darurat.',
            ],
            [
                'name' => 'Taman Bacaan Masyarakat Keranggan',
                'location' => 'Keranggan RT 02',
                'operational_hours' => 'Selasa - Minggu (09:00 - 17:00 WIB)',
                'description' => 'Ruang membaca terbuka menyediakan koleksi buku dongeng anak, ensiklopedia umum, dan meja belajar nyaman untuk pelajar.',
            ],
            [
                'name' => 'Masjid Jami\' Keranggan',
                'location' => 'Jl. Utama Keranggan',
                'operational_hours' => 'Setiap Hari (Buka 24 Jam)',
                'description' => 'Masjid utama tempat pelaksanaan sholat berjamaah, sholat Jumat, kajian ilmu agama, dan perayaan hari besar Islam.',
            ],
            [
                'name' => 'Tempat Pengolahan Sampah 3R Keranggan',
                'location' => 'Keranggan RT 05',
                'operational_hours' => 'Senin - Sabtu (07:00 - 15:00 WIB)',
                'description' => 'Fasilitas pemilahan sampah organik & anorganik warga serta pusat produksi pupuk kompos ramah lingkungan.',
            ],
            [
                'name' => 'Musholla Al-Ikhlas Keranggan',
                'location' => 'Keranggan RT 01',
                'operational_hours' => 'Setiap Hari (Buka 24 Jam)',
                'description' => 'Sarana ibadah sholat lima waktu, kegiatan TPA mengaji anak-anak, serta kajian sore untuk warga sekitar.',
            ],
            [
                'name' => 'Posyandu Mawar Keranggan',
                'location' => 'Keranggan RT 04',
                'operational_hours' => 'Rabu Rutin (08:30 - 12:00 WIB)',
                'description' => 'Pusat pelayanan kesehatan ibu dan anak, penimbangan balita rutin, pemberian vitamin, serta pemeriksaan kesehatan lansia.',
            ],
        ];

        foreach ($facilities as $data) {
            Facility::create($data);
        }

        // 3. Seed Ecotourism Keranggan
        $ecotourisms = [
            [
                'title' => 'Ekowisata Sungai Cisadane Keranggan',
                'location' => 'Bantaran Sungai Cisadane Keranggan',
                'description' => 'Kawasan wisata alam bantaran sungai yang asri dengan pemandangan alam, sarana perahu wisata, dan saung kumpul santai.',
            ],
            [
                'title' => 'Taman Hijau & Ruang Terbuka Warga',
                'location' => 'Keranggan RT 02 / RW 01',
                'description' => 'Taman terbuka hijau yang dilengkapi fasilitas tempat duduk rindang di bawah pohon, track jalan santai, dan wahana anak.',
            ],
            [
                'title' => 'Kebun Edukasi Tanaman Obat (TOGA)',
                'location' => 'Keranggan RT 03',
                'description' => 'Kebun percontohan budidaya tanaman obat keluarga seperti jahe, kunyit, temulawak, dan sayuran organik khas Keranggan.',
            ],
            [
                'title' => 'Saung Santai & Gazebo Ekowisata',
                'location' => 'Area Ekowisata Keranggan',
                'description' => 'Fasilitas jajaran saung bambu tepi sungai yang nyaman untuk lokasi santai keluarga, diskusi, dan wisata kuliner lokal.',
            ],
            [
                'title' => 'Area Pembibitan Tanaman & Biopori',
                'location' => 'Keranggan Lingkungan Asri',
                'description' => 'Pusat pembibitan beragam pohon pelindung dan lokasi percontohan pemeliharaan lubang resapan biopori lingkungan.',
            ],
        ];

        foreach ($ecotourisms as $data) {
            Ecotourism::create($data);
        }

        // 4. Seed Health Services Keranggan
        $health_infos = [
            [
                'title' => 'Puskesmas Pembantu Keranggan',
                'type' => 'Puskesmas',
                'location' => 'Jl. Raya Keranggan No. 8',
                'schedule' => 'Senin - Sabtu (08:00 - 15:00 WIB)',
                'contact_number' => '081234567890',
                'description' => 'Pelayanan kesehatan umum dasar, pemeriksaan imunisasi anak, konsultasi gizi, KIA, dan pelayanan obat.',
            ],
            [
                'title' => 'Klinik Pratama Medika Keranggan',
                'type' => 'Klinik 24 Jam',
                'location' => 'Keranggan Utama No. 22',
                'schedule' => 'Buka Setiap Hari (24 Jam)',
                'contact_number' => '081398765432',
                'description' => 'Layanan dokter umum 24 jam, tindakan gawat darurat ringan, tes laboratorium dasar, dan perawatan kesehatan.',
            ],
            [
                'title' => 'Apotek Berkah Medika Keranggan',
                'type' => 'Apotek Resmi',
                'location' => 'Jl. Raya Keranggan No. 15',
                'schedule' => 'Setiap Hari (07:00 - 22:00 WIB)',
                'contact_number' => '085712345678',
                'description' => 'Apotek penyedia obat-obatan lengkap bersertifikasi, suplemen kesehatan, vitamin, dan konsultasi apoteker.',
            ],
            [
                'title' => 'Posyandu Balita & Lansia Mawar',
                'type' => 'Posyandu',
                'location' => 'Sekretariat Posyandu Keranggan',
                'schedule' => 'Rabu Minggu ke-2 (08:30 - 11:30 WIB)',
                'contact_number' => '081908765432',
                'description' => 'Penimbangan dan pencatatan tumbuh kembang balita, pemberian makanan tambahan (PMT), imunisasi, serta cek tensi lansia.',
            ],
            [
                'title' => 'Bidan Praktik Mandiri Ibu Hajah',
                'type' => 'Bidan Praktik',
                'location' => 'Keranggan RT 02 / RW 02',
                'schedule' => 'Setiap Hari (Buka 24 Jam)',
                'contact_number' => '082145678901',
                'description' => 'Pemeriksaan rutin kehamilan, persalinan 24 jam, imunisasi bayi lahir, dan pelayanan konsultasi Keluarga Berencana (KB).',
            ],
            [
                'title' => 'Ambulans Darurat Keranggan',
                'type' => 'Layanan Darurat',
                'location' => 'Pos Utama Keranggan',
                'schedule' => 'Siap Sedia 24 Jam Nonstop',
                'contact_number' => '087812345678',
                'description' => 'Layanan pengangkutan pasien darurat dan siaga rujukan rumah sakit 24 jam secara gratis bagi warga Keranggan.',
            ],
        ];

        foreach ($health_infos as $data) {
            HealthInfo::create($data);
        }

        // 5. Seed Education Keranggan
        $educations = [
            [
                'name' => 'Sekolah Dasar Negeri (SDN) Keranggan',
                'type' => 'Sekolah Dasar',
                'address' => 'Jl. Pendidikan Keranggan No. 3',
                'contact_number' => '081234567800',
                'description' => 'Sekolah dasar negeri unggulan dengan lingkungan asri, sarana laboratorium komputer, perpustakaan, dan guru berpengalaman.',
            ],
            [
                'name' => 'Madrasah Ibtidaiyah (MI) Keranggan',
                'type' => 'Madrasah',
                'address' => 'Keranggan RT 03 / RW 01',
                'contact_number' => '081398765400',
                'description' => 'Layanan pendidikan dasar berkarakter islami yang memadukan kurikulum nasional dan pembentukan akhlak mulia.',
            ],
            [
                'name' => 'TK & PAUD Kasih Ibu Keranggan',
                'type' => 'PAUD / TK',
                'address' => 'Keranggan RT 01 / RW 02',
                'contact_number' => '085712345600',
                'description' => 'Pendidikan anak usia dini dengan konsep belajar sambil bermain yang mengasah kreatifitas, motorik, dan kebersamaan.',
            ],
            [
                'name' => 'Pusat Kegiatan Belajar Masyarakat (PKBM)',
                'type' => 'Pendidikan Kesetaraan',
                'address' => 'Keranggan Tengah No. 10',
                'contact_number' => '081908765400',
                'description' => 'Layanan pendidikan kesetaraan Paket A, B, C serta wadah pelatihan keterampilan vokasi dan wirausaha warga.',
            ],
            [
                'name' => 'Bimbel & Rumah Belajar Pintar Keranggan',
                'type' => 'Bimbingan Belajar',
                'address' => 'Keranggan RT 04 / RW 02',
                'contact_number' => '082145678900',
                'description' => 'Bimbingan belajar siswa matematika, IPA, Bahasa Inggris, dan pendampingan mengerjakan tugas sekolah harian.',
            ],
            [
                'name' => 'Taman Pendidikan Al-Qur\'an (TPA) Al-Ikhlas',
                'type' => 'TPA / Mengaji',
                'address' => 'Musholla Al-Ikhlas Keranggan',
                'contact_number' => '087812345600',
                'description' => 'Pendidikan baca tulis Al-Qur\'an metode iqro, hafalan juz amma, serta pelajaran ibadah praktis anak-anak.',
            ],
        ];

        foreach ($educations as $data) {
            Education::create($data);
        }

        // 6. Seed Announcements Keranggan
        Announcement::create([
            'title' => 'Jadwal Layanan Posyandu Balita & Lansia Bulanan',
            'content' => 'Layanan kesehatan gratis, penimbangan balita, pemberian vitamin A, dan pemeriksaan kesehatan rutin lansia di Posyandu Keranggan.',
            'category' => 'Agenda',
            'event_date' => now()->addDays(5)->setHour(8)->setMinute(0),
            'is_pinned' => true,
            'is_active' => true,
        ]);

        Announcement::create([
            'title' => 'Gotong Royong & Kerja Bakti Kebersihan Lingkungan Keranggan',
            'content' => 'Dihimbau kepada seluruh warga Keranggan untuk berpartisipasi dalam kegiatan kerja bakti pembersihan saluran air dan taman warga.',
            'category' => 'Pengumuman',
            'event_date' => now()->addDays(12)->setHour(7)->setMinute(30),
            'is_pinned' => false,
            'is_active' => true,
        ]);

        Announcement::create([
            'title' => 'Himbauan Kewaspadaan Musim Hujan & Bebas Demam Berdarah',
            'content' => 'Mohon warga Keranggan rutin melakukan Gerakan 3M Plus di sekitar pekarangan rumah untuk mencegah berkembangnya jentik nyamuk Aedes aegypti.',
            'category' => 'Urgent',
            'event_date' => null,
            'is_pinned' => true,
            'is_active' => true,
        ]);

        // 7. Seed Videos Keranggan
        Video::create([
            'youtube_url' => 'LXb3EKWsInQ',
            'title' => 'Video Profil Resmi Ekowisata & Lingkungan Keranggan',
            'category' => 'Profil Wilayah',
            'duration' => '05:20',
            'description' => 'Mengenal lebih dekat pesona Ekowisata Keranggan, Saung Ekowisata Cisadane, dan program kerja KKN Nayakara.',
            'is_active' => true,
        ]);

        Video::create([
            'youtube_url' => 'L_LUpnjgPso',
            'title' => 'Kegiatan Gotong Royong & Produk UMKM Keranggan',
            'category' => 'Kegiatan Warga',
            'duration' => '08:45',
            'description' => 'Liputan suasana kebersamaan warga Keranggan dan ragam produk kuliner serta kerajinan karya usaha lokal.',
            'is_active' => true,
        ]);

        Video::create([
            'youtube_url' => 'tgbNymZ7vqY',
            'title' => 'Profil Fasilitas Publik & Sarana Edukasi Keranggan',
            'category' => 'Fasilitas & Edukasi',
            'duration' => '04:12',
            'description' => 'Eksplorasi fasilitas umum kelurahan, kebun hijau, sarana pendidikan, dan layanan kesehatan masyarakat Keranggan.',
            'is_active' => true,
        ]);

        // 8. Seed Complaints Keranggan
        Complaint::create([
            'name' => 'Bapak Budi Santoso',
            'phone_number' => '081298765432',
            'rt_rw' => 'RT 02 / Keranggan',
            'category' => 'Infrastruktur & Jalan',
            'content' => 'Mohon penerangan lampu jalan di gang RT 02 dekat pos siskamling mati sejak 2 hari lalu. Mohon bantuan perbaikan.',
            'status' => 'pending',
        ]);

        Complaint::create([
            'name' => 'Ibu Siti Rahma',
            'phone_number' => '085712345678',
            'rt_rw' => 'RT 04 / Keranggan',
            'category' => 'Kebersihan',
            'content' => 'Pengangkutan sampah di Bak TPS hari Sabtu kemarin terlewat. Mohon penjadwalan armada pengangkut sampah.',
            'status' => 'in_progress',
            'admin_notes' => 'Sudah dikoordinasikan dengan petugas kebersihan wilayah.',
        ]);
    }
}
