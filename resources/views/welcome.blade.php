<x-layout>
    <!-- Hero Section -->
    <div id="beranda" class="relative bg-slate-50 overflow-hidden pt-12 pb-24 lg:pt-20 lg:pb-32">
        <!-- Radial Gradient background glow -->
        <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 via-slate-50 to-teal-500/10 pointer-events-none"></div>
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-emerald-400/20 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 -left-24 w-96 h-96 bg-teal-400/20 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:grid lg:grid-cols-12 lg:gap-16 items-center">
                <!-- Text Content -->
                <div class="lg:col-span-6 text-center lg:text-left mb-16 lg:mb-0">
                    <div class="inline-flex items-center px-4 py-2 rounded-full bg-white shadow-sm border border-emerald-200/80 mb-6">
                        <span class="flex h-2.5 w-2.5 relative mr-2.5">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-emerald-500"></span>
                        </span>
                        <span class="text-xs font-bold text-emerald-800 tracking-wider uppercase">Kelurahan Keranggan</span>
                    </div>
                    
                    <h1 class="text-4xl tracking-tight font-extrabold text-slate-900 sm:text-5xl lg:text-5xl leading-[1.18] mb-6">
                        Pusat Informasi Publik <span class="text-transparent bg-clip-text bg-gradient-to-r from-emerald-600 to-teal-500">Kelurahan Keranggan</span>
                    </h1>
                    
                    <p class="text-base text-slate-600 sm:text-lg mb-8 leading-relaxed">
                        Selamat datang di <strong class="font-bold text-slate-900">Kelurahan Keranggan</strong>. Wadah informasi terpadu untuk menemukan direktori usaha UMKM, fasilitas umum, layanan kesehatan, pendidikan, hingga peta lokasi wilayah Keranggan.
                    </p>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-10">
                        <a href="#umkm" class="inline-flex items-center justify-center px-8 py-3.5 text-base font-bold text-white transition-all duration-300 bg-emerald-600 rounded-2xl hover:bg-emerald-700 hover:shadow-lg hover:shadow-emerald-600/30 hover:-translate-y-0.5 group">
                            Jelajahi UMKM
                            <svg class="w-5 h-5 ml-2 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </a>
                        <a href="#fasilitas" class="inline-flex items-center justify-center px-8 py-3.5 border border-slate-300/80 text-base font-bold rounded-2xl text-slate-700 bg-white hover:bg-slate-100 transition-all shadow-xs hover:-translate-y-0.5">
                            Fasilitas Publik
                        </a>
                    </div>

                    <!-- Live Quick Stats Badges -->
                    <div class="pt-6 border-t border-slate-200/80 grid grid-cols-3 gap-4 text-center lg:text-left">
                        <div>
                            <div class="text-2xl font-black text-slate-900">{{ $umkms->count() }}+</div>
                            <div class="text-xs font-semibold text-slate-500 mt-0.5">UMKM</div>
                        </div>
                        <div>
                            <div class="text-2xl font-black text-emerald-600">{{ $facilities->count() }}+</div>
                            <div class="text-xs font-semibold text-slate-500 mt-0.5">Fasilitas Publik</div>
                        </div>
                        <div>
                            <div class="text-2xl font-black text-slate-900">24/7</div>
                            <div class="text-xs font-semibold text-slate-500 mt-0.5">Akses Online</div>
                        </div>
                    </div>
                </div>
                
                <!-- Hero Image Showcase -->
                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white aspect-[4/3] lg:aspect-auto lg:h-[480px] bg-slate-100 group">
                        <img src="/images/bg_uin.jpeg" alt="Gedung UIN Jakarta" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700" onerror="this.src='/images/bg_uin.jpeg'">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-black/20"></div>

                        <!-- Top Right Active Tag -->
                        <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-md px-4 py-2 rounded-2xl shadow-md border border-white/60 flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-500 animate-pulse"></span>
                            <span class="text-xs font-bold text-slate-800">Sistem Aktif & Terintegrasi</span>
                        </div>

                        <!-- Floating Glassmorphism Overlay Card -->
                        <div class="absolute bottom-6 left-6 right-6 bg-white/95 backdrop-blur-md p-5 rounded-2xl shadow-xl border border-white/80 flex items-center justify-between gap-4">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 rounded-xl bg-emerald-600 text-white flex items-center justify-center flex-shrink-0 shadow-md">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-slate-900 text-base leading-tight">Keranggan</h4>
                                    <p class="text-xs font-semibold text-emerald-600 mt-0.5">Pusat Informasi Terpadu</p>
                                </div>
                            </div>
                            <a href="#kampus" class="hidden sm:inline-flex items-center px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-bold text-xs rounded-xl transition-all shadow-xs">
                                Lihat Peta
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Navigation Icons Bar (6 Categories Grid) -->
    <div class="py-12 bg-white relative z-20 border-y border-slate-200/80 shadow-xs">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-8">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">AKSES CEPAT LAYANAN UTAMA</span>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-4">
                @php
                    $navs = [
                        ['id' => '#umkm', 'icon' => 'M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z', 'label' => 'UMKM', 'color' => 'bg-emerald-50 text-emerald-600 border-emerald-100'],
                        ['id' => '#fasilitas', 'icon' => 'M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4', 'label' => 'Fasilitas Publik', 'color' => 'bg-teal-50 text-teal-600 border-teal-100'],
                        ['id' => '#kesehatan', 'icon' => 'M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z', 'label' => 'Kesehatan', 'color' => 'bg-rose-50 text-rose-600 border-rose-100'],
                        ['id' => '#pendidikan', 'icon' => 'M12 14l9-5-9-5-9 5 9 5z', 'label' => 'Pendidikan', 'color' => 'bg-sky-50 text-sky-600 border-sky-100'],
                        ['id' => '#ekowisata', 'icon' => 'M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z', 'label' => 'Ekowisata', 'color' => 'bg-amber-50 text-amber-600 border-amber-100'],
                        ['id' => '#kampus', 'icon' => 'M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7', 'label' => 'Peta Wilayah', 'color' => 'bg-indigo-50 text-indigo-600 border-indigo-100'],
                    ];
                @endphp
                @foreach($navs as $nav)
                <a href="{{ $nav['id'] }}" class="bg-slate-50/80 rounded-2xl p-4 border border-slate-200/80 hover:border-emerald-500 hover:bg-white hover:shadow-lg transition-all duration-300 text-center group cursor-pointer hover:-translate-y-1 flex flex-col items-center justify-center">
                    <div class="w-12 h-12 rounded-2xl flex items-center justify-center mb-3 border {{ $nav['color'] }} group-hover:scale-110 transition-transform duration-300 shadow-xs">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="{{ $nav['icon'] }}"></path></svg>
                    </div>
                    <h3 class="font-bold text-xs text-slate-800 group-hover:text-emerald-600 transition-colors">{{ $nav['label'] }}</h3>
                </a>
                @endforeach
            </div>
        </div>
    </div>

    <!-- 0. Pengumuman & Agenda RW Section -->
    <div id="pengumuman" class="py-16 bg-white relative border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-10">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-teal-200 bg-teal-50 text-teal-800 font-semibold text-xs mb-3 shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-teal-500 mr-2 animate-ping"></span>
                    Informasi & Kegiatan Keranggan
                </span>
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl mb-3">Pengumuman & <span class="text-teal-600">Agenda Keranggan</span></h2>
                <p class="text-slate-500 text-sm max-w-lg mx-auto">Update pengumuman resmi, jadwal kegiatan, dan informasi penting seputar wilayah Keranggan.</p>
            </div>

            @if(session('success_submission'))
            <div class="max-w-3xl mx-auto mb-8 p-4 rounded-2xl bg-emerald-50 border border-emerald-200 text-emerald-800 flex items-start gap-3 shadow-md">
                <svg class="w-6 h-6 text-emerald-600 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <div>
                    <h4 class="font-bold text-sm">Berhasil Terkirim!</h4>
                    <p class="text-xs text-emerald-700 mt-0.5">{{ session('success_submission') }}</p>
                </div>
            </div>
            @endif

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @forelse($announcements as $item)
                <div class="bg-slate-50 rounded-2xl p-6 border border-slate-200/80 shadow-xs hover:shadow-md transition-all flex flex-col justify-between relative group">
                    @if($item->is_pinned)
                    <div class="absolute -top-3 right-4 bg-emerald-600 text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-sm flex items-center gap-1">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 24 24"><path d="M16 12V4h1V2H7v2h1v8l-2 2v2h5.2v6h1.6v-6H18v-2l-2-2z"/></svg>
                        Sematkan
                    </div>
                    @endif
                    <div>
                        <div class="flex items-center gap-2 mb-3">
                            <span class="px-2.5 py-1 rounded-lg text-xs font-bold 
                                @if($item->category === 'Urgent') bg-red-100 text-red-700 
                                @elseif($item->category === 'Agenda') bg-amber-100 text-amber-800 
                                @else bg-teal-100 text-teal-800 @endif">
                                {{ $item->category }}
                            </span>
                            @if($item->event_date)
                            <span class="text-xs font-semibold text-slate-500 flex items-center gap-1">
                                <svg class="w-3.5 h-3.5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                {{ $item->event_date->format('d M Y, H:i') }} WIB
                            </span>
                            @endif
                        </div>
                        <h3 class="text-lg font-bold text-slate-900 mb-2 group-hover:text-emerald-600 transition-colors">{{ $item->title }}</h3>
                        <p class="text-xs text-slate-600 leading-relaxed mb-4 line-clamp-4">{{ $item->content }}</p>
                    </div>
                    <div class="pt-3 border-t border-slate-200/60 text-[11px] text-slate-400 flex items-center justify-between">
                        <span>Diterbitkan: {{ $item->created_at->format('d M Y') }}</span>
                        <span class="font-semibold text-slate-500">Pengurus Keranggan</span>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-8 bg-slate-50 rounded-2xl border border-slate-200/80">
                    <p class="text-slate-500 text-sm">Belum ada pengumuman aktif saat ini.</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>

    <!-- 1. UMKM Section -->
    <div id="umkm" class="py-20 bg-slate-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-10">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-emerald-200 bg-emerald-50 text-emerald-700 font-semibold text-xs mb-3 shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 mr-2 animate-pulse"></span>
                    Ekonomi Lokal ({{ $umkms->count() }} Usaha UMKM Terverifikasi)
                </span>
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl mb-3">UMKM <span class="text-emerald-600">Keranggan</span></h2>
                <p class="text-slate-500 text-sm max-w-lg mx-auto">Temukan dan dukung ragam usaha kuliner, jasa, hingga kerajinan buatan warga di lingkungan kita.</p>
                
                <div class="mt-4">
                    <button onclick="openUmkmModal()" class="inline-flex items-center justify-center px-6 py-2.5 bg-emerald-600 hover:bg-emerald-700 text-white font-bold text-xs rounded-xl transition-all shadow-sm hover:shadow-emerald-600/30">
                        <svg class="w-4 h-4 mr-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Daftarkan UMKM Saya
                    </button>
                </div>
            </div>

            @php
                $categories = $umkms->pluck('category')->unique()->filter()->values();
            @endphp

            <!-- Search & Filter Bar Container -->
            <div class="max-w-2xl mx-auto mb-10 space-y-4">
                <!-- Search Input Bar -->
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input 
                        type="text" 
                        id="umkm-search-input"
                        oninput="filterUmkm()"
                        placeholder="Cari nama usaha, pemilik, atau kata kunci..." 
                        class="w-full pl-11 pr-10 py-3.5 bg-white border border-slate-200 rounded-2xl text-sm font-medium text-slate-800 placeholder-slate-400 shadow-sm focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all"
                    >
                    <button 
                        id="umkm-clear-btn"
                        onclick="clearUmkmSearch()"
                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 hidden"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>

                <!-- Category Filter Pills -->
                <div class="flex flex-wrap items-center justify-center gap-2">
                    <button 
                        onclick="selectUmkmCategory('all', this)"
                        class="umkm-cat-btn active px-4 py-2 rounded-xl text-xs font-bold transition-all bg-emerald-600 text-white shadow-sm"
                        data-cat="all"
                    >
                        Semua ({{ $umkms->count() }})
                    </button>
                    @foreach($categories as $cat)
                    <button 
                        onclick="selectUmkmCategory('{{ $cat }}', this)"
                        class="umkm-cat-btn px-4 py-2 rounded-xl text-xs font-bold transition-all bg-white text-slate-600 border border-slate-200 hover:bg-slate-100"
                        data-cat="{{ $cat }}"
                    >
                        {{ $cat }} ({{ $umkms->where('category', $cat)->count() }})
                    </button>
                    @endforeach
                </div>
            </div>

            <!-- UMKM Grid Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="umkm-grid">
                @forelse($umkms as $umkm)
                @php
                    $cleanPhone = preg_replace('/[^0-9]/', '', $umkm->phone_number);
                    if (str_starts_with($cleanPhone, '0')) {
                        $cleanPhone = '62' . substr($cleanPhone, 1);
                    }
                @endphp
                <div 
                    class="umkm-card bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-xl transition-all group flex flex-col h-full hover:-translate-y-1"
                    data-name="{{ strtolower($umkm->business_name) }}"
                    data-owner="{{ strtolower($umkm->owner_name) }}"
                    data-desc="{{ strtolower($umkm->description) }}"
                    data-category="{{ $umkm->category }}"
                >
                    <div class="relative h-56 overflow-hidden bg-slate-100">
                        <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ $umkm->image ? asset('storage/'.$umkm->image) : '/images/bg_uin.jpeg' }}" alt="{{ $umkm->business_name }}" onerror="this.onerror=null;this.src='/images/bg_uin.jpeg';">
                        <div class="absolute top-4 left-4">
                            <span class="bg-white/90 backdrop-blur-sm px-3 py-1.5 rounded-lg text-xs font-semibold text-emerald-700 shadow-sm">{{ $umkm->category }}</span>
                        </div>
                    </div>
                    <div class="p-6 flex-grow flex flex-col bg-white">
                        <h3 class="text-xl font-bold text-slate-900 mb-2">{{ $umkm->business_name }}</h3>
                        <p class="text-slate-500 text-sm mb-4 line-clamp-3">{{ $umkm->description }}</p>
                        <div class="flex-grow">
                            <p class="font-semibold text-slate-900 mb-1 text-sm">{{ $umkm->owner_name }}</p>
                            <p class="text-xs text-slate-500 mb-4">{{ $umkm->address ?? 'Wilayah RW' }}</p>
                        </div>
                        <div class="w-full flex items-center justify-between px-4 py-2.5 bg-slate-50 text-slate-600 font-semibold rounded-xl text-xs border border-slate-100">
                            <span class="flex items-center gap-1.5 text-slate-500">
                                <svg class="w-4 h-4 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Informasi Usaha Lokal
                            </span>
                            <span class="text-emerald-700 font-bold">Keranggan</span>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12 bg-white rounded-2xl border border-slate-100 shadow-sm">
                    <p class="text-slate-500">Belum ada UMKM yang ditambahkan.</p>
                </div>
                @endforelse

                <!-- Empty Search Result Message -->
                <div id="umkm-empty-search" class="col-span-full text-center py-12 bg-white rounded-2xl border border-slate-100 shadow-sm hidden">
                    <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <p class="text-slate-600 font-semibold text-base mb-1">Tidak ada UMKM yang ditemukan</p>
                    <p class="text-slate-400 text-sm">Coba gunakan kata kunci pencarian yang lain atau pilih kategori lain.</p>
                </div>
            </div>

            <!-- Single Dynamic Toggle Button (Load More / Show Less) -->
            <div id="umkm-pagination-container" class="mt-12 text-center hidden">
                <button 
                    id="umkm-toggle-btn"
                    onclick="handleUmkmToggle()" 
                    class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-emerald-200 text-emerald-700 font-semibold rounded-2xl hover:bg-emerald-600 hover:text-white hover:border-emerald-600 shadow-sm transition-all duration-300 group hover:-translate-y-0.5"
                >
                    <span id="umkm-toggle-text">Tampilkan Bisnis Lainnya</span>
                    <svg id="umkm-toggle-icon" class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Script for Live Filter & Single Toggle UMKM -->
    <script>
        let visibleLimit = 6;
        const defaultBatchSize = 6;

        function filterUmkm() {
            const input = document.getElementById('umkm-search-input');
            const clearBtn = document.getElementById('umkm-clear-btn');
            const query = input ? input.value.toLowerCase().trim() : '';
            const activeBtn = document.querySelector('.umkm-cat-btn.active');
            const selectedCategory = activeBtn ? activeBtn.getAttribute('data-cat') : 'all';
            const cards = document.querySelectorAll('.umkm-card');
            
            if (clearBtn) {
                clearBtn.classList.toggle('hidden', query.length === 0);
            }

            let matchingCards = [];
            cards.forEach(card => {
                const name = card.getAttribute('data-name') || '';
                const owner = card.getAttribute('data-owner') || '';
                const desc = card.getAttribute('data-desc') || '';
                const cat = card.getAttribute('data-category') || '';

                const matchesSearch = !query || name.includes(query) || owner.includes(query) || desc.includes(query);
                const matchesCat = selectedCategory === 'all' || cat === selectedCategory;

                if (matchesSearch && matchesCat) {
                    matchingCards.push(card);
                } else {
                    card.style.display = 'none';
                }
            });

            // Handle pagination batching
            const isFiltering = query.length > 0 || selectedCategory !== 'all';
            const limit = isFiltering ? matchingCards.length : visibleLimit;

            matchingCards.forEach((card, index) => {
                if (index < limit) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            // Update empty search message
            const emptyMsg = document.getElementById('umkm-empty-search');
            if (emptyMsg) {
                emptyMsg.classList.toggle('hidden', matchingCards.length > 0 || cards.length === 0);
            }

            // Single Toggle Button State Update
            const pagCtn = document.getElementById('umkm-pagination-container');
            const toggleText = document.getElementById('umkm-toggle-text');
            const toggleIcon = document.getElementById('umkm-toggle-icon');

            if (pagCtn && toggleText && toggleIcon) {
                if (isFiltering || matchingCards.length <= defaultBatchSize) {
                    pagCtn.classList.add('hidden');
                } else {
                    pagCtn.classList.remove('hidden');
                    if (visibleLimit < matchingCards.length) {
                        // State 1: Show More (all remaining)
                        const remaining = matchingCards.length - visibleLimit;
                        toggleText.textContent = `Tampilkan ${remaining} Usaha Lainnya`;
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                    } else {
                        // State 2: Show Less
                        toggleText.textContent = 'Tampilkan Lebih Sedikit';
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>';
                    }
                }
            }
        }

        function handleUmkmToggle() {
            const input = document.getElementById('umkm-search-input');
            const query = input ? input.value.toLowerCase().trim() : '';
            const activeBtn = document.querySelector('.umkm-cat-btn.active');
            const selectedCategory = activeBtn ? activeBtn.getAttribute('data-cat') : 'all';
            const cards = document.querySelectorAll('.umkm-card');

            let matchingCards = [];
            cards.forEach(card => {
                const name = card.getAttribute('data-name') || '';
                const owner = card.getAttribute('data-owner') || '';
                const desc = card.getAttribute('data-desc') || '';
                const cat = card.getAttribute('data-category') || '';
                const matchesSearch = !query || name.includes(query) || owner.includes(query) || desc.includes(query);
                const matchesCat = selectedCategory === 'all' || cat === selectedCategory;

                if (matchesSearch && matchesCat) {
                    matchingCards.push(card);
                }
            });

            if (visibleLimit < matchingCards.length) {
                // Expand all at once in 1 click
                visibleLimit = matchingCards.length;
                filterUmkm();
            } else {
                // Collapse back to initial batch in 1 click
                visibleLimit = defaultBatchSize;
                filterUmkm();
                const section = document.getElementById('umkm');
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            }
        }

        function selectUmkmCategory(cat, element) {
            visibleLimit = defaultBatchSize;
            document.querySelectorAll('.umkm-cat-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-emerald-600', 'text-white', 'shadow-sm');
                btn.classList.add('bg-white', 'text-slate-600', 'border', 'border-slate-200', 'hover:bg-slate-100');
            });

            element.classList.add('active', 'bg-emerald-600', 'text-white', 'shadow-sm');
            element.classList.remove('bg-white', 'text-slate-600', 'border', 'border-slate-200', 'hover:bg-slate-100');

            filterUmkm();
        }

        function clearUmkmSearch() {
            const input = document.getElementById('umkm-search-input');
            if (input) {
                input.value = '';
                visibleLimit = defaultBatchSize;
                filterUmkm();
                input.focus();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            filterUmkm();
        });
    </script>

    <!-- 2. Fasilitas Section -->
    <div id="fasilitas" class="py-20 bg-white relative border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-10">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-emerald-200 bg-emerald-50 text-emerald-700 font-semibold text-xs mb-3 shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 mr-2 animate-pulse"></span>
                    Sarana Warga ({{ $facilities->count() }} Fasilitas Publik)
                </span>
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl mb-3">Fasilitas & <span class="text-emerald-600">Sarana Publik</span></h2>
                <p class="text-slate-500 text-sm max-w-lg mx-auto">Informasi tempat umum, balai warga, lapangan olahraga, hingga sarana publik lingkungan.</p>
            </div>
            
            <!-- Search Input Bar -->
            <div class="max-w-xl mx-auto mb-10">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input 
                        type="text" 
                        id="fasilitas-search-input"
                        oninput="filterFasilitas()"
                        placeholder="Cari nama fasilitas, lokasi, atau deskripsi..." 
                        class="w-full pl-11 pr-10 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-medium text-slate-800 placeholder-slate-400 shadow-sm focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all"
                    >
                    <button 
                        id="fasilitas-clear-btn"
                        onclick="clearFasilitasSearch()"
                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 hidden"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>

            <div class="space-y-12" id="fasilitas-list">
                @forelse($facilities as $index => $facility)
                <div 
                    class="fasilitas-card flex flex-col lg:flex-row {{ $index % 2 !== 0 ? 'lg:flex-row-reverse' : '' }} items-center gap-8 group"
                    data-name="{{ strtolower($facility->name) }}"
                    data-desc="{{ strtolower($facility->description) }}"
                    data-location="{{ strtolower($facility->location ?? '') }}"
                >
                    <div class="w-full lg:w-1/2">
                        <div class="rounded-2xl overflow-hidden shadow-sm border border-slate-100 aspect-video bg-slate-100">
                            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105" src="{{ $facility->image ? asset('storage/'.$facility->image) : '/images/bg_uin.jpeg' }}" alt="{{ $facility->name }}" onerror="this.onerror=null;this.src='/images/bg_uin.jpeg';">
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 flex flex-col justify-center">
                        <h3 class="text-2xl font-bold text-slate-900 mb-3">{{ $facility->name }}</h3>
                        <p class="text-slate-500 text-base leading-relaxed mb-6">{{ $facility->description }}</p>
                        <div class="bg-slate-50 rounded-2xl p-5 border border-slate-100">
                            <div class="flex items-center mb-3">
                                <svg class="w-5 h-5 text-emerald-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                <span class="text-sm text-slate-700">{{ $facility->location ?? 'Wilayah RW' }}</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-emerald-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <span class="text-sm text-slate-700">{{ $facility->operational_hours ?? 'Buka & Tersedia' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center py-12 bg-slate-50 rounded-2xl border border-slate-100 shadow-sm">
                    <p class="text-slate-500">Belum ada fasilitas publik yang ditambahkan.</p>
                </div>
                @endforelse

                <!-- Empty Search Result Message -->
                <div id="fasilitas-empty-search" class="text-center py-12 bg-slate-50 rounded-2xl border border-slate-100 shadow-sm hidden">
                    <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <p class="text-slate-600 font-semibold text-base mb-1">Tidak ada fasilitas yang ditemukan</p>
                    <p class="text-slate-400 text-sm">Coba masukkan kata kunci pencarian yang lain.</p>
                </div>
            </div>

            <!-- Single Dynamic Toggle Button for Fasilitas -->
            <div id="fasilitas-pagination-container" class="mt-12 text-center hidden">
                <button 
                    id="fasilitas-toggle-btn"
                    onclick="handleFasilitasToggle()" 
                    class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-emerald-200 text-emerald-700 font-semibold rounded-2xl hover:bg-emerald-600 hover:text-white hover:border-emerald-600 shadow-sm transition-all duration-300 group hover:-translate-y-0.5"
                >
                    <span id="fasilitas-toggle-text">Tampilkan Fasilitas Lainnya</span>
                    <svg id="fasilitas-toggle-icon" class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Script for Live Filter & Single Toggle Fasilitas -->
    <script>
        let visibleLimitFasilitas = 3;
        const defaultBatchFasilitas = 3;

        function filterFasilitas() {
            const input = document.getElementById('fasilitas-search-input');
            const clearBtn = document.getElementById('fasilitas-clear-btn');
            const query = input ? input.value.toLowerCase().trim() : '';
            const cards = document.querySelectorAll('.fasilitas-card');
            
            if (clearBtn) {
                clearBtn.classList.toggle('hidden', query.length === 0);
            }

            let matchingCards = [];
            cards.forEach(card => {
                const name = card.getAttribute('data-name') || '';
                const desc = card.getAttribute('data-desc') || '';
                const loc = card.getAttribute('data-location') || '';

                const matchesSearch = !query || name.includes(query) || desc.includes(query) || loc.includes(query);

                if (matchesSearch) {
                    matchingCards.push(card);
                } else {
                    card.style.display = 'none';
                }
            });

            const isFiltering = query.length > 0;
            const limit = isFiltering ? matchingCards.length : visibleLimitFasilitas;

            matchingCards.forEach((card, index) => {
                if (index < limit) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            const emptyMsg = document.getElementById('fasilitas-empty-search');
            if (emptyMsg) {
                emptyMsg.classList.toggle('hidden', matchingCards.length > 0 || cards.length === 0);
            }

            const pagCtn = document.getElementById('fasilitas-pagination-container');
            const toggleText = document.getElementById('fasilitas-toggle-text');
            const toggleIcon = document.getElementById('fasilitas-toggle-icon');

            if (pagCtn && toggleText && toggleIcon) {
                if (isFiltering || matchingCards.length <= defaultBatchFasilitas) {
                    pagCtn.classList.add('hidden');
                } else {
                    pagCtn.classList.remove('hidden');
                    if (visibleLimitFasilitas < matchingCards.length) {
                        const remaining = matchingCards.length - visibleLimitFasilitas;
                        toggleText.textContent = `Tampilkan ${remaining} Fasilitas Lainnya`;
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                    } else {
                        toggleText.textContent = 'Tampilkan Lebih Sedikit';
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>';
                    }
                }
            }
        }

        function handleFasilitasToggle() {
            const input = document.getElementById('fasilitas-search-input');
            const query = input ? input.value.toLowerCase().trim() : '';
            const cards = document.querySelectorAll('.fasilitas-card');

            let matchingCards = [];
            cards.forEach(card => {
                const name = card.getAttribute('data-name') || '';
                const desc = card.getAttribute('data-desc') || '';
                const loc = card.getAttribute('data-location') || '';
                if (!query || name.includes(query) || desc.includes(query) || loc.includes(query)) {
                    matchingCards.push(card);
                }
            });

            if (visibleLimitFasilitas < matchingCards.length) {
                // Expand all remaining in 1 click
                visibleLimitFasilitas = matchingCards.length;
                filterFasilitas();
            } else {
                // Collapse back to initial batch in 1 click
                visibleLimitFasilitas = defaultBatchFasilitas;
                filterFasilitas();
                const section = document.getElementById('fasilitas');
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            }
        }

        function clearFasilitasSearch() {
            const input = document.getElementById('fasilitas-search-input');
            if (input) {
                input.value = '';
                visibleLimitFasilitas = defaultBatchFasilitas;
                filterFasilitas();
                input.focus();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            filterFasilitas();
        });
    </script>

    <!-- 3. Kesehatan Section -->
    <div class="w-full h-px bg-gradient-to-r from-transparent via-emerald-400/30 via-slate-300/60 to-transparent"></div>
    <div id="kesehatan" class="py-24 lg:py-28 bg-slate-50/90 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-10">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-emerald-200/80 bg-emerald-50 text-emerald-700 font-semibold text-xs mb-3 shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 mr-2 animate-pulse"></span>
                    Layanan Kesehatan ({{ $health_infos->count() }} Layanan Terdaftar)
                </span>
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl mb-3">Kesehatan <span class="text-emerald-600">Keranggan</span></h2>
                <p class="text-slate-500 text-sm max-w-lg mx-auto">Lokasi puskesmas, klinik, apotek, dan nomor darurat penting di sekitar wilayah Keranggan.</p>
            </div>
            
            <!-- Search Input Bar -->
            <div class="max-w-xl mx-auto mb-10">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input 
                        type="text" 
                        id="kesehatan-search-input"
                        oninput="filterKesehatan()"
                        placeholder="Cari fasilitas kesehatan, nama tempat, atau lokasi..." 
                        class="w-full pl-11 pr-10 py-3.5 bg-white border border-slate-200 rounded-2xl text-sm font-medium text-slate-800 placeholder-slate-400 shadow-sm focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all"
                    >
                    <button 
                        id="kesehatan-clear-btn"
                        onclick="clearKesehatanSearch()"
                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 hidden"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="kesehatan-grid">
                @forelse($health_infos as $health)
                <div 
                    class="kesehatan-card bg-white rounded-2xl p-6 shadow-sm border border-slate-200/80 hover:shadow-lg transition-all flex flex-col h-full hover:-translate-y-1"
                    data-title="{{ strtolower($health->title) }}"
                    data-desc="{{ strtolower($health->description) }}"
                    data-type="{{ strtolower($health->type) }}"
                    data-location="{{ strtolower($health->location) }}"
                >
                    <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center text-emerald-600 mb-4 shadow-xs">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                    </div>
                    <span class="text-xs font-semibold bg-slate-100 text-slate-700 px-3 py-1 rounded-md mb-3 inline-block border border-slate-200/50 w-fit">{{ $health->type }}</span>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">{{ $health->title }}</h3>
                    <p class="text-slate-500 text-sm mb-4 line-clamp-3 leading-relaxed">{{ $health->description }}</p>
                    <div class="space-y-2 mt-auto pt-4 border-t border-slate-100">
                        <div class="flex text-sm"><strong class="w-20 text-slate-700">Lokasi:</strong><span class="text-slate-500 truncate">{{ $health->location }}</span></div>
                        <div class="flex text-sm"><strong class="w-20 text-slate-700">Jadwal:</strong><span class="text-slate-500">{{ $health->schedule }}</span></div>
                        @if($health->contact_number)
                        @php
                            $cleanContact = preg_replace('/[^0-9]/', '', $health->contact_number);
                            if (str_starts_with($cleanContact, '0')) {
                                $cleanContact = '62' . substr($cleanContact, 1);
                            }
                        @endphp
                        <div class="flex text-sm items-center justify-between">
                            <strong class="w-20 text-slate-700">Kontak:</strong>
                            <a href="https://wa.me/{{ $cleanContact }}?text=Halo%20{{ urlencode($health->title) }},%20saya%20warga%20RW%2005%20butuh%20informasi%20layanan" target="_blank" class="text-emerald-600 font-semibold hover:underline flex items-center gap-1">
                                <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981z"/></svg>
                                {{ $health->contact_number }}
                            </a>
                        </div>
                        @endif
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12 bg-white rounded-2xl border border-slate-200/80 shadow-sm">
                    <p class="text-slate-500">Belum ada layanan kesehatan yang ditambahkan.</p>
                </div>
                @endempty

                <!-- Empty Search Result Message -->
                <div id="kesehatan-empty-search" class="col-span-full text-center py-12 bg-white rounded-2xl border border-slate-200/80 shadow-sm hidden">
                    <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <p class="text-slate-600 font-semibold text-base mb-1">Tidak ada layanan kesehatan yang ditemukan</p>
                    <p class="text-slate-400 text-sm">Coba masukkan kata kunci pencarian yang lain.</p>
                </div>
            </div>

            <!-- Single Dynamic Toggle Button for Kesehatan -->
            <div id="kesehatan-pagination-container" class="mt-12 text-center hidden">
                <button 
                    id="kesehatan-toggle-btn"
                    onclick="handleKesehatanToggle()" 
                    class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-emerald-200 text-emerald-700 font-semibold rounded-2xl hover:bg-emerald-600 hover:text-white hover:border-emerald-600 shadow-sm transition-all duration-300 group hover:-translate-y-0.5"
                >
                    <span id="kesehatan-toggle-text">Tampilkan Layanan Lainnya</span>
                    <svg id="kesehatan-toggle-icon" class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Script for Live Filter & Single Toggle Kesehatan -->
    <script>
        let visibleLimitKesehatan = 3;
        const defaultBatchKesehatan = 3;

        function filterKesehatan() {
            const input = document.getElementById('kesehatan-search-input');
            const clearBtn = document.getElementById('kesehatan-clear-btn');
            const query = input ? input.value.toLowerCase().trim() : '';
            const cards = document.querySelectorAll('.kesehatan-card');
            
            if (clearBtn) {
                clearBtn.classList.toggle('hidden', query.length === 0);
            }

            let matchingCards = [];
            cards.forEach(card => {
                const title = card.getAttribute('data-title') || '';
                const desc = card.getAttribute('data-desc') || '';
                const type = card.getAttribute('data-type') || '';
                const loc = card.getAttribute('data-location') || '';

                const matchesSearch = !query || title.includes(query) || desc.includes(query) || type.includes(query) || loc.includes(query);

                if (matchesSearch) {
                    matchingCards.push(card);
                } else {
                    card.style.display = 'none';
                }
            });

            const isFiltering = query.length > 0;
            const limit = isFiltering ? matchingCards.length : visibleLimitKesehatan;

            matchingCards.forEach((card, index) => {
                if (index < limit) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            const emptyMsg = document.getElementById('kesehatan-empty-search');
            if (emptyMsg) {
                emptyMsg.classList.toggle('hidden', matchingCards.length > 0 || cards.length === 0);
            }

            const pagCtn = document.getElementById('kesehatan-pagination-container');
            const toggleText = document.getElementById('kesehatan-toggle-text');
            const toggleIcon = document.getElementById('kesehatan-toggle-icon');

            if (pagCtn && toggleText && toggleIcon) {
                if (isFiltering || matchingCards.length <= defaultBatchKesehatan) {
                    pagCtn.classList.add('hidden');
                } else {
                    pagCtn.classList.remove('hidden');
                    if (visibleLimitKesehatan < matchingCards.length) {
                        const remaining = matchingCards.length - visibleLimitKesehatan;
                        toggleText.textContent = `Tampilkan ${remaining} Layanan Lainnya`;
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                    } else {
                        toggleText.textContent = 'Tampilkan Lebih Sedikit';
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>';
                    }
                }
            }
        }

        function handleKesehatanToggle() {
            const input = document.getElementById('kesehatan-search-input');
            const query = input ? input.value.toLowerCase().trim() : '';
            const cards = document.querySelectorAll('.kesehatan-card');

            let matchingCards = [];
            cards.forEach(card => {
                const title = card.getAttribute('data-title') || '';
                const desc = card.getAttribute('data-desc') || '';
                const type = card.getAttribute('data-type') || '';
                const loc = card.getAttribute('data-location') || '';
                if (!query || title.includes(query) || desc.includes(query) || type.includes(query) || loc.includes(query)) {
                    matchingCards.push(card);
                }
            });

            if (visibleLimitKesehatan < matchingCards.length) {
                visibleLimitKesehatan = matchingCards.length;
                filterKesehatan();
            } else {
                visibleLimitKesehatan = defaultBatchKesehatan;
                filterKesehatan();
                const section = document.getElementById('kesehatan');
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            }
        }

        function clearKesehatanSearch() {
            const input = document.getElementById('kesehatan-search-input');
            if (input) {
                input.value = '';
                visibleLimitKesehatan = defaultBatchKesehatan;
                filterKesehatan();
                input.focus();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            filterKesehatan();
        });
    </script>

    <!-- 4. Pendidikan Section -->
    <div class="w-full h-px bg-gradient-to-r from-transparent via-slate-300 to-transparent"></div>
    <div id="pendidikan" class="py-24 lg:py-28 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-10">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-emerald-200/80 bg-emerald-50 text-emerald-700 font-semibold text-xs mb-3 shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 mr-2 animate-pulse"></span>
                    Pendidikan & Edukasi ({{ $educations->count() }} Sarana Pendidikan)
                </span>
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl mb-3">Pendidikan & <span class="text-emerald-600">Sarana Belajar</span></h2>
                <p class="text-slate-500 text-sm max-w-lg mx-auto">Direktori sekolah, kampus, pusat belajar, dan sarana edukasi di wilayah Keranggan.</p>
            </div>

            <!-- Search Input Bar -->
            <div class="max-w-xl mx-auto mb-10">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input 
                        type="text" 
                        id="pendidikan-search-input"
                        oninput="filterPendidikan()"
                        placeholder="Cari nama sekolah, tempat belajar, atau alamat..." 
                        class="w-full pl-11 pr-10 py-3.5 bg-slate-50 border border-slate-200 rounded-2xl text-sm font-medium text-slate-800 placeholder-slate-400 shadow-sm focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all"
                    >
                    <button 
                        id="pendidikan-clear-btn"
                        onclick="clearPendidikanSearch()"
                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 hidden"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6" id="pendidikan-grid">
                @forelse($educations as $edu)
                <div 
                    class="pendidikan-card flex bg-slate-50/80 rounded-2xl p-6 border border-slate-200/80 hover:shadow-md transition-all items-start h-full"
                    data-name="{{ strtolower($edu->name) }}"
                    data-type="{{ strtolower($edu->type) }}"
                    data-desc="{{ strtolower($edu->description) }}"
                    data-address="{{ strtolower($edu->address) }}"
                >
                    <div class="w-12 h-12 bg-white rounded-xl flex items-center justify-center text-emerald-600 mr-4 shadow-sm border border-slate-200/60 flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                    </div>
                    <div class="flex-grow flex flex-col justify-between h-full">
                        <div>
                            <div class="flex flex-col sm:flex-row sm:items-center gap-2 mb-2">
                                <h3 class="text-lg font-bold text-slate-900">{{ $edu->name }}</h3>
                                <span class="bg-emerald-100 text-emerald-700 text-[10px] font-bold px-2 py-0.5 rounded-md w-fit border border-emerald-200/60">{{ $edu->type }}</span>
                            </div>
                            <p class="text-slate-500 text-sm mb-3 leading-relaxed">{{ $edu->description }}</p>
                        </div>
                        <div class="pt-2 border-t border-slate-200/40 mt-auto">
                            <div class="flex items-center text-xs text-slate-600 mb-1">
                                <svg class="w-4 h-4 mr-2 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                                {{ $edu->address }}
                            </div>
                            @if($edu->contact_number)
                            <div class="flex items-center text-xs text-slate-600">
                                <svg class="w-4 h-4 mr-2 text-emerald-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                {{ $edu->contact_number }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12 bg-slate-50/80 rounded-2xl border border-slate-200/80 shadow-sm">
                    <p class="text-slate-500">Belum ada tempat pendidikan yang ditambahkan.</p>
                </div>
                @endforelse

                <!-- Empty Search Result Message -->
                <div id="pendidikan-empty-search" class="col-span-full text-center py-12 bg-slate-50/80 rounded-2xl border border-slate-200/80 shadow-sm hidden">
                    <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <p class="text-slate-600 font-semibold text-base mb-1">Tidak ada tempat pendidikan yang ditemukan</p>
                    <p class="text-slate-400 text-sm">Coba masukkan kata kunci pencarian yang lain.</p>
                </div>
            </div>

            <!-- Single Dynamic Toggle Button for Pendidikan -->
            <div id="pendidikan-pagination-container" class="mt-12 text-center hidden">
                <button 
                    id="pendidikan-toggle-btn"
                    onclick="handlePendidikanToggle()" 
                    class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-emerald-200 text-emerald-700 font-semibold rounded-2xl hover:bg-emerald-600 hover:text-white hover:border-emerald-600 shadow-sm transition-all duration-300 group hover:-translate-y-0.5"
                >
                    <span id="pendidikan-toggle-text">Tampilkan Tempat Lainnya</span>
                    <svg id="pendidikan-toggle-icon" class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Script for Live Filter & Single Toggle Pendidikan -->
    <script>
        let visibleLimitPendidikan = 4;
        const defaultBatchPendidikan = 4;

        function filterPendidikan() {
            const input = document.getElementById('pendidikan-search-input');
            const clearBtn = document.getElementById('pendidikan-clear-btn');
            const query = input ? input.value.toLowerCase().trim() : '';
            const cards = document.querySelectorAll('.pendidikan-card');
            
            if (clearBtn) {
                clearBtn.classList.toggle('hidden', query.length === 0);
            }

            let matchingCards = [];
            cards.forEach(card => {
                const name = card.getAttribute('data-name') || '';
                const type = card.getAttribute('data-type') || '';
                const desc = card.getAttribute('data-desc') || '';
                const addr = card.getAttribute('data-address') || '';

                const matchesSearch = !query || name.includes(query) || type.includes(query) || desc.includes(query) || addr.includes(query);

                if (matchesSearch) {
                    matchingCards.push(card);
                } else {
                    card.style.display = 'none';
                }
            });

            const isFiltering = query.length > 0;
            const limit = isFiltering ? matchingCards.length : visibleLimitPendidikan;

            matchingCards.forEach((card, index) => {
                if (index < limit) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            const emptyMsg = document.getElementById('pendidikan-empty-search');
            if (emptyMsg) {
                emptyMsg.classList.toggle('hidden', matchingCards.length > 0 || cards.length === 0);
            }

            const pagCtn = document.getElementById('pendidikan-pagination-container');
            const toggleText = document.getElementById('pendidikan-toggle-text');
            const toggleIcon = document.getElementById('pendidikan-toggle-icon');

            if (pagCtn && toggleText && toggleIcon) {
                if (isFiltering || matchingCards.length <= defaultBatchPendidikan) {
                    pagCtn.classList.add('hidden');
                } else {
                    pagCtn.classList.remove('hidden');
                    if (visibleLimitPendidikan < matchingCards.length) {
                        const remaining = matchingCards.length - visibleLimitPendidikan;
                        toggleText.textContent = `Tampilkan ${remaining} Tempat Lainnya`;
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                    } else {
                        toggleText.textContent = 'Tampilkan Lebih Sedikit';
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>';
                    }
                }
            }
        }

        function handlePendidikanToggle() {
            const input = document.getElementById('pendidikan-search-input');
            const query = input ? input.value.toLowerCase().trim() : '';
            const cards = document.querySelectorAll('.pendidikan-card');

            let matchingCards = [];
            cards.forEach(card => {
                const name = card.getAttribute('data-name') || '';
                const type = card.getAttribute('data-type') || '';
                const desc = card.getAttribute('data-desc') || '';
                const addr = card.getAttribute('data-address') || '';
                if (!query || name.includes(query) || type.includes(query) || desc.includes(query) || addr.includes(query)) {
                    matchingCards.push(card);
                }
            });

            if (visibleLimitPendidikan < matchingCards.length) {
                visibleLimitPendidikan = matchingCards.length;
                filterPendidikan();
            } else {
                visibleLimitPendidikan = defaultBatchPendidikan;
                filterPendidikan();
                const section = document.getElementById('pendidikan');
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            }
        }

        function clearPendidikanSearch() {
            const input = document.getElementById('pendidikan-search-input');
            if (input) {
                input.value = '';
                visibleLimitPendidikan = defaultBatchPendidikan;
                filterPendidikan();
                input.focus();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            filterPendidikan();
        });
    </script>

    <!-- 5. Ekowisata Section -->
    <div id="ekowisata" class="py-20 bg-slate-50 relative border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-10">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-emerald-200 bg-emerald-50 text-emerald-700 font-semibold text-xs mb-3 shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 mr-2 animate-pulse"></span>
                    Lingkungan Hijau ({{ $ecotourisms->count() }} Taman & Ekowisata)
                </span>
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl mb-3">Ekowisata & <span class="text-emerald-600">Taman Publik</span></h2>
                <p class="text-slate-500 text-sm max-w-lg mx-auto">Kawasan hijau, taman warga, dan ruang terbuka asri di wilayah Keranggan.</p>
            </div>
            
            <!-- Search Input Bar -->
            <div class="max-w-xl mx-auto mb-10">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-slate-400">
                        <svg class="w-5 h-5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    </div>
                    <input 
                        type="text" 
                        id="ekowisata-search-input"
                        oninput="filterEkowisata()"
                        placeholder="Cari nama taman, lokasi, atau kata kunci..." 
                        class="w-full pl-11 pr-10 py-3.5 bg-white border border-slate-200 rounded-2xl text-sm font-medium text-slate-800 placeholder-slate-400 shadow-sm focus:outline-none focus:border-emerald-500 focus:ring-2 focus:ring-emerald-500/20 transition-all"
                    >
                    <button 
                        id="ekowisata-clear-btn"
                        onclick="clearEkowisataSearch()"
                        class="absolute inset-y-0 right-0 pr-4 flex items-center text-slate-400 hover:text-slate-600 hidden"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6" id="ekowisata-grid">
                @forelse($ecotourisms as $eco)
                <div 
                    class="ekowisata-card bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 hover:shadow-lg transition-all group flex flex-col h-full hover:-translate-y-1"
                    data-title="{{ strtolower($eco->title) }}"
                    data-desc="{{ strtolower($eco->description) }}"
                    data-location="{{ strtolower($eco->location) }}"
                >
                    <div class="h-48 relative overflow-hidden bg-slate-100">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" src="{{ $eco->image ? asset('storage/'.$eco->image) : '/images/bg_uin.jpeg' }}" alt="{{ $eco->title }}" onerror="this.onerror=null;this.src='/images/bg_uin.jpeg';">
                    </div>
                    <div class="p-5 bg-white flex flex-col flex-grow">
                        <h3 class="text-lg font-bold text-slate-900 mb-1">{{ $eco->title }}</h3>
                        <p class="text-emerald-600 text-xs flex items-center font-medium mb-3"><svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg> {{ $eco->location }}</p>
                        <p class="text-slate-500 text-sm line-clamp-3 leading-relaxed mt-auto">{{ $eco->description }}</p>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12 bg-white rounded-2xl border border-slate-100 shadow-sm">
                    <p class="text-slate-500">Belum ada lokasi ekowisata yang ditambahkan.</p>
                </div>
                @endforelse

                <!-- Empty Search Result Message -->
                <div id="ekowisata-empty-search" class="col-span-full text-center py-12 bg-white rounded-2xl border border-slate-100 shadow-sm hidden">
                    <svg class="w-12 h-12 mx-auto text-slate-300 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                    <p class="text-slate-600 font-semibold text-base mb-1">Tidak ada taman/ekowisata yang ditemukan</p>
                    <p class="text-slate-400 text-sm">Coba masukkan kata kunci pencarian yang lain.</p>
                </div>
            </div>

            <!-- Single Dynamic Toggle Button for Ekowisata -->
            <div id="ekowisata-pagination-container" class="mt-12 text-center hidden">
                <button 
                    id="ekowisata-toggle-btn"
                    onclick="handleEkowisataToggle()" 
                    class="inline-flex items-center justify-center px-8 py-3.5 bg-white border border-emerald-200 text-emerald-700 font-semibold rounded-2xl hover:bg-emerald-600 hover:text-white hover:border-emerald-600 shadow-sm transition-all duration-300 group hover:-translate-y-0.5"
                >
                    <span id="ekowisata-toggle-text">Tampilkan Taman Lainnya</span>
                    <svg id="ekowisata-toggle-icon" class="w-4 h-4 ml-2 transition-transform duration-300 group-hover:translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Script for Live Filter & Single Toggle Ekowisata -->
    <script>
        let visibleLimitEkowisata = 3;
        const defaultBatchEkowisata = 3;

        function filterEkowisata() {
            const input = document.getElementById('ekowisata-search-input');
            const clearBtn = document.getElementById('ekowisata-clear-btn');
            const query = input ? input.value.toLowerCase().trim() : '';
            const cards = document.querySelectorAll('.ekowisata-card');
            
            if (clearBtn) {
                clearBtn.classList.toggle('hidden', query.length === 0);
            }

            let matchingCards = [];
            cards.forEach(card => {
                const title = card.getAttribute('data-title') || '';
                const desc = card.getAttribute('data-desc') || '';
                const loc = card.getAttribute('data-location') || '';

                const matchesSearch = !query || title.includes(query) || desc.includes(query) || loc.includes(query);

                if (matchesSearch) {
                    matchingCards.push(card);
                } else {
                    card.style.display = 'none';
                }
            });

            const isFiltering = query.length > 0;
            const limit = isFiltering ? matchingCards.length : visibleLimitEkowisata;

            matchingCards.forEach((card, index) => {
                if (index < limit) {
                    card.style.display = 'flex';
                } else {
                    card.style.display = 'none';
                }
            });

            const emptyMsg = document.getElementById('ekowisata-empty-search');
            if (emptyMsg) {
                emptyMsg.classList.toggle('hidden', matchingCards.length > 0 || cards.length === 0);
            }

            const pagCtn = document.getElementById('ekowisata-pagination-container');
            const toggleText = document.getElementById('ekowisata-toggle-text');
            const toggleIcon = document.getElementById('ekowisata-toggle-icon');

            if (pagCtn && toggleText && toggleIcon) {
                if (isFiltering || matchingCards.length <= defaultBatchEkowisata) {
                    pagCtn.classList.add('hidden');
                } else {
                    pagCtn.classList.remove('hidden');
                    if (visibleLimitEkowisata < matchingCards.length) {
                        const remaining = matchingCards.length - visibleLimitEkowisata;
                        toggleText.textContent = `Tampilkan ${remaining} Taman Lainnya`;
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>';
                    } else {
                        toggleText.textContent = 'Tampilkan Lebih Sedikit';
                        toggleIcon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>';
                    }
                }
            }
        }

        function handleEkowisataToggle() {
            const input = document.getElementById('ekowisata-search-input');
            const query = input ? input.value.toLowerCase().trim() : '';
            const cards = document.querySelectorAll('.ekowisata-card');

            let matchingCards = [];
            cards.forEach(card => {
                const title = card.getAttribute('data-title') || '';
                const desc = card.getAttribute('data-desc') || '';
                const loc = card.getAttribute('data-location') || '';
                if (!query || title.includes(query) || desc.includes(query) || loc.includes(query)) {
                    matchingCards.push(card);
                }
            });

            if (visibleLimitEkowisata < matchingCards.length) {
                visibleLimitEkowisata = matchingCards.length;
                filterEkowisata();
            } else {
                visibleLimitEkowisata = defaultBatchEkowisata;
                filterEkowisata();
                const section = document.getElementById('ekowisata');
                if (section) {
                    section.scrollIntoView({ behavior: 'smooth' });
                }
            }
        }

        function clearEkowisataSearch() {
            const input = document.getElementById('ekowisata-search-input');
            if (input) {
                input.value = '';
                visibleLimitEkowisata = defaultBatchEkowisata;
                filterEkowisata();
                input.focus();
            }
        }

        document.addEventListener('DOMContentLoaded', () => {
            filterEkowisata();
        });
    </script>

    <!-- 6. Video Terbaru Section -->
    <div id="video" class="py-24 lg:py-28 bg-white relative border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12">
                <div>
                    <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-pink-200 bg-pink-50 text-pink-700 font-semibold text-xs mb-3 shadow-xs">
                        <svg class="w-4 h-4 mr-1.5 text-pink-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        Instagram Reels & Dokumentasi Video
                    </span>
                    <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl">Kanal Video & <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-600">Reels Keranggan</span></h2>
                    <p class="text-slate-500 text-sm mt-2 max-w-lg">Saksikan tayangan dokumenter, Instagram Reels KKN Nayakara, dan video seputar kegiatan wilayah Keranggan.</p>
                </div>
                <a href="https://www.instagram.com/kkn.nayakara/" target="_blank" class="mt-4 md:mt-0 inline-flex items-center px-5 py-2.5 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white font-semibold rounded-xl transition-all shadow-sm text-sm hover:-translate-y-0.5">
                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    Lihat Instagram Reels @kkn.nayakara
                </a>
            </div>

            @php
                $firstVideo = $videos->first();
                $firstId = $firstVideo ? $firstVideo->youtube_id : 'LXb3EKWsInQ';
                $firstTitle = $firstVideo ? $firstVideo->title : 'Video Profil Resmi Lingkungan Warga';
                $firstCat = $firstVideo ? $firstVideo->category : 'Profil Wilayah';
                $firstDesc = $firstVideo ? ($firstVideo->description ?? '') : '';
            @endphp

            @if($videos->count() > 0)
            <!-- Interactive Video Theater Layout -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-stretch">
                <!-- Left: Main Video Player -->
                <div class="lg:col-span-2 bg-slate-900 rounded-3xl p-4 sm:p-5 shadow-xl border border-slate-800 flex flex-col justify-between">
                    <div class="relative w-full rounded-2xl overflow-hidden aspect-video bg-black shadow-2xl border border-slate-800/80">
                        <iframe 
                            id="main-youtube-iframe"
                            class="absolute top-0 left-0 w-full h-full"
                            src="https://www.youtube.com/embed/{{ $firstId }}?rel=0" 
                            title="{{ $firstTitle }}" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="mt-5 px-2">
                        <div class="flex items-center gap-3 mb-2">
                            <span id="main-video-category" class="bg-red-600/90 text-white text-[11px] font-bold px-3 py-1 rounded-full shadow-xs">
                                {{ $firstCat }}
                            </span>
                            <span class="text-slate-400 text-xs flex items-center font-medium">
                                <svg class="w-3.5 h-3.5 mr-1 text-slate-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                Video Pilihan
                            </span>
                        </div>
                        <h3 id="main-video-title" class="text-xl font-bold text-white mb-2 leading-snug">
                            {{ $firstTitle }}
                        </h3>
                        <p id="main-video-desc" class="text-slate-400 text-sm leading-relaxed line-clamp-2">
                            {{ $firstDesc }}
                        </p>
                    </div>
                </div>

                <!-- Right: Scrollable Playlist Selection Grid -->
                <div class="flex flex-col justify-start">
                    <div class="flex items-center justify-between mb-3">
                        <h4 class="text-xs font-bold text-slate-500 uppercase tracking-wider flex items-center">
                            <svg class="w-4 h-4 mr-1.5 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path></svg>
                            Daftar Putar Video
                        </h4>
                        <span class="bg-red-100 text-red-700 text-[11px] font-bold px-2.5 py-0.5 rounded-full border border-red-200">
                            {{ $videos->count() }} Video
                        </span>
                    </div>

                    <div class="max-h-[480px] overflow-y-auto pr-1 space-y-3 scrollbar-thin scrollbar-thumb-slate-300 scrollbar-track-slate-100">
                        @foreach($videos as $index => $video)
                        <div 
                            onclick="switchMainVideo('{{ $video->youtube_id }}', '{{ addslashes($video->title) }}', '{{ addslashes($video->category) }}', '{{ addslashes($video->description ?? '') }}', this)"
                            class="video-thumb-card cursor-pointer rounded-2xl p-3 border transition-all duration-300 flex items-center gap-3.5 group {{ $index === 0 ? 'border-red-500 bg-red-50/40 ring-2 ring-red-500/20' : 'border-slate-200/80 bg-white hover:bg-slate-50 hover:border-slate-300' }}"
                        >
                            <div class="relative w-28 h-20 rounded-xl overflow-hidden bg-slate-200 flex-shrink-0 shadow-xs">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" src="https://img.youtube.com/vi/{{ $video->youtube_id }}/hqdefault.jpg" alt="{{ $video->title }}">
                                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/10 transition-colors flex items-center justify-center">
                                    <div class="w-8 h-8 rounded-full bg-red-600 text-white flex items-center justify-center shadow-md group-hover:scale-110 transition-transform">
                                        <svg class="w-4 h-4 ml-0.5" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow min-w-0">
                                <span class="text-[10px] font-bold text-red-600 block mb-0.5 uppercase tracking-wider">{{ $video->category }}</span>
                                <h5 class="text-xs font-bold text-slate-900 line-clamp-2 leading-snug group-hover:text-red-600 transition-colors">{{ $video->title }}</h5>
                                <p class="text-[10px] text-slate-400 mt-1 truncate">Klik untuk memutar</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @else
            <div class="text-center py-12 bg-slate-50 rounded-2xl border border-slate-200/80 shadow-sm">
                <p class="text-slate-500">Belum ada video yang ditambahkan oleh Admin.</p>
            </div>
            @endif
        </div>
    </div>

    <!-- Script for Interactive Video Switcher -->
    <script>
        function switchMainVideo(videoId, title, category, desc, element) {
            const mainIframe = document.getElementById('main-youtube-iframe');
            const mainTitle = document.getElementById('main-video-title');
            const mainCategory = document.getElementById('main-video-category');
            const mainDesc = document.getElementById('main-video-desc');

            if (mainIframe) mainIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
            if (mainTitle) mainTitle.textContent = title;
            if (mainCategory) mainCategory.textContent = category;
            if (mainDesc) mainDesc.textContent = desc;

            document.querySelectorAll('.video-thumb-card').forEach(card => {
                card.classList.remove('border-red-500', 'bg-red-50/40', 'ring-2', 'ring-red-500/20');
                card.classList.add('border-slate-200/80', 'bg-white');
            });

            if (element) {
                element.classList.remove('border-slate-200/80', 'bg-white');
                element.classList.add('border-red-500', 'bg-red-50/40', 'ring-2', 'ring-red-500/20');
            }
        }
    </script>

    <!-- 7. Peta Kampus Section -->
    <div id="kampus" class="py-24 lg:py-28 bg-slate-50 relative border-t border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-10">
                <span class="inline-flex items-center px-4 py-1.5 rounded-full border border-emerald-200 bg-emerald-50 text-emerald-700 font-semibold text-xs mb-3 shadow-xs">
                    <span class="w-2 h-2 rounded-full bg-emerald-500 mr-2 animate-pulse"></span>
                    Peta & Navigasi Wilayah
                </span>
                <h2 class="text-3xl font-bold text-slate-900 sm:text-4xl mb-3">Peta Lokasi & <span class="text-emerald-600">Navigasi Wilayah</span></h2>
                <p class="text-slate-500 text-sm max-w-lg mx-auto">Pilih lokasi di bawah ini untuk melihat peta interaktif dan petunjuk arah perjalanan.</p>
            </div>

            @php
                $campusLocations = [
                    [
                        'id' => 'ekowisata_keranggan',
                        'name' => 'Ekowisata Keranggan',
                        'tag' => 'Saung & Bantaran Sungai Cisadane',
                        'address' => 'Jl. Ekowisata Keranggan, Keranggan',
                        'hours' => 'Setiap Hari (08:00 - 17:00 WIB)',
                        'transport' => 'Akses Kendaraan Roda 2 & Roda 4 via Jl. Raya Keranggan',
                        'maps_url' => 'https://maps.google.com/?q=Ekowisata+Keranggan',
                        'embed_url' => 'https://www.google.com/maps?q=Ekowisata+Keranggan&output=embed',
                    ],
                    [
                        'id' => 'kelurahan_keranggan',
                        'name' => 'Kantor Kelurahan Keranggan',
                        'tag' => 'Pusat Pelayanan Publik Keranggan',
                        'address' => 'Jl. Raya Keranggan, Keranggan',
                        'hours' => 'Senin - Jumat (08:00 - 16:00 WIB)',
                        'transport' => 'Akses Jalur Utama Keranggan',
                        'maps_url' => 'https://maps.google.com/?q=Kelurahan+Keranggan',
                        'embed_url' => 'https://www.google.com/maps?q=Kelurahan+Keranggan&output=embed',
                    ],
                    [
                        'id' => 'puskesmas_keranggan',
                        'name' => 'Puskesmas Pembantu Keranggan',
                        'tag' => 'Pusat Pelayanan Kesehatan',
                        'address' => 'Jl. Utama Keranggan No. 8',
                        'hours' => 'Senin - Sabtu (08:00 - 15:00 WIB)',
                        'transport' => 'Satu Kompleks Balai Pertemuan Keranggan',
                        'maps_url' => 'https://maps.google.com/?q=Puskesmas+Keranggan',
                        'embed_url' => 'https://www.google.com/maps?q=Puskesmas+Keranggan&output=embed',
                    ],
                ];
            @endphp

            <!-- Campus Location Tab Switchers -->
            <div class="flex flex-wrap items-center justify-center gap-3 mb-10">
                @foreach($campusLocations as $index => $loc)
                <button 
                    onclick="switchCampusMap('{{ addslashes($loc['name']) }}', '{{ addslashes($loc['tag']) }}', '{{ addslashes($loc['address']) }}', '{{ addslashes($loc['hours']) }}', '{{ addslashes($loc['transport']) }}', '{{ $loc['maps_url'] }}', '{{ $loc['embed_url'] }}', this)"
                    class="campus-tab-btn px-5 py-2.5 rounded-2xl text-xs font-bold transition-all flex items-center gap-2 {{ $index === 0 ? 'bg-emerald-600 text-white shadow-sm' : 'bg-white text-slate-600 border border-slate-200/80 hover:bg-slate-100' }}"
                >
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                    {{ $loc['name'] }}
                </button>
                @endforeach
            </div>

            <!-- Map Container with Glassmorphism Overlay Card -->
            <div class="bg-white rounded-3xl p-4 border border-slate-200/80 shadow-xl relative overflow-hidden">
                <!-- Floating Info Overlay (Desktop) -->
                <div class="absolute top-8 left-8 z-20 hidden md:block w-80 bg-white/95 backdrop-blur-md p-6 rounded-2xl shadow-xl border border-slate-200/80">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 rounded-xl bg-emerald-50 text-emerald-600 flex items-center justify-center flex-shrink-0 border border-emerald-100">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                        </div>
                        <div>
                            <h4 id="map-campus-name" class="font-bold text-slate-900 text-base leading-tight">{{ $campusLocations[0]['name'] }}</h4>
                            <span id="map-campus-tag" class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider mt-0.5 block">{{ $campusLocations[0]['tag'] }}</span>
                        </div>
                    </div>

                    <div class="space-y-3 text-xs text-slate-600 mb-5">
                        <div class="flex items-start">
                            <svg class="w-4 h-4 text-emerald-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                            <span id="map-campus-address" class="leading-relaxed">{{ $campusLocations[0]['address'] }}</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-emerald-500 mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span id="map-campus-hours">{{ $campusLocations[0]['hours'] }}</span>
                        </div>
                        <div class="flex items-start">
                            <svg class="w-4 h-4 text-emerald-500 mr-2 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                            <span id="map-campus-transport" class="leading-relaxed">{{ $campusLocations[0]['transport'] }}</span>
                        </div>
                    </div>

                    <a id="map-campus-btn" href="{{ $campusLocations[0]['maps_url'] }}" target="_blank" class="w-full inline-flex items-center justify-center py-3 px-4 text-center bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl transition-all text-xs shadow-sm">
                        Petunjuk Arah di Google Maps
                        <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>

                <!-- Google Maps Embedded Iframe -->
                <div class="w-full h-[450px] rounded-2xl overflow-hidden bg-slate-100 relative z-10 border border-slate-100 shadow-inner">
                    <iframe 
                        id="campus-map-iframe"
                        width="100%" 
                        height="100%" 
                        frameborder="0" 
                        style="border:0"
                        src="{{ $campusLocations[0]['embed_url'] }}" 
                        allowfullscreen>
                    </iframe>
                </div>

                <!-- Mobile Info Card Overlay -->
                <div class="mt-5 md:hidden bg-slate-50 p-5 rounded-2xl border border-slate-200/80 space-y-3">
                    <div>
                        <h4 class="font-bold text-slate-900 text-base leading-tight">{{ $campusLocations[0]['name'] }}</h4>
                        <span class="text-[10px] font-bold text-emerald-600 uppercase tracking-wider mt-0.5 block">{{ $campusLocations[0]['tag'] }}</span>
                    </div>
                    <p class="text-slate-600 text-xs leading-relaxed">
                        {{ $campusLocations[0]['address'] }}
                    </p>
                    <a id="map-campus-btn-mobile" href="{{ $campusLocations[0]['maps_url'] }}" target="_blank" class="flex justify-center items-center w-full py-3 bg-emerald-600 hover:bg-emerald-700 text-white font-semibold rounded-xl transition-colors text-xs shadow-sm">
                        Buka di Google Maps <svg class="w-4 h-4 ml-1.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Script for Interactive Campus Map Switcher -->
    <script>
        function switchCampusMap(name, tag, address, hours, transport, mapsUrl, embedUrl, element) {
            const iframe = document.getElementById('campus-map-iframe');
            const nameEl = document.getElementById('map-campus-name');
            const tagEl = document.getElementById('map-campus-tag');
            const addressEl = document.getElementById('map-campus-address');
            const hoursEl = document.getElementById('map-campus-hours');
            const transportEl = document.getElementById('map-campus-transport');
            const btnEl = document.getElementById('map-campus-btn');
            const btnMobileEl = document.getElementById('map-campus-btn-mobile');

            if (iframe) iframe.src = embedUrl;
            if (nameEl) nameEl.textContent = name;
            if (tagEl) tagEl.textContent = tag;
            if (addressEl) addressEl.textContent = address;
            if (hoursEl) hoursEl.textContent = hours;
            if (transportEl) transportEl.textContent = transport;
            if (btnEl) btnEl.href = mapsUrl;
            if (btnMobileEl) btnMobileEl.href = mapsUrl;

            document.querySelectorAll('.campus-tab-btn').forEach(btn => {
                btn.classList.remove('bg-emerald-600', 'text-white', 'shadow-sm');
                btn.classList.add('bg-white', 'text-slate-600', 'border', 'border-slate-200/80', 'hover:bg-slate-100');
            });

            if (element) {
                element.classList.remove('bg-white', 'text-slate-600', 'border', 'border-slate-200/80', 'hover:bg-slate-100');
                element.classList.add('bg-emerald-600', 'text-white', 'shadow-sm');
            }
        }
    </script>

    <!-- Modal Form "Daftarkan UMKM Saya" (Warga) -->
    <div id="umkm-modal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-slate-950/70 backdrop-blur-sm flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl max-w-xl w-full p-6 sm:p-8 shadow-2xl relative border border-slate-100 transform transition-all">
            <button onclick="closeUmkmModal()" class="absolute top-5 right-5 text-slate-400 hover:text-slate-600 p-2 rounded-xl hover:bg-slate-100 transition-colors">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>

            <div class="mb-6">
                <span class="px-3 py-1 bg-emerald-50 text-emerald-700 text-xs font-bold rounded-full border border-emerald-200">Formulir Pendaftaran UMKM</span>
                <h3 class="text-2xl font-bold text-slate-900 mt-2">Daftarkan UMKM</h3>
                <p class="text-xs text-slate-500 mt-1">Isi informasi usaha Anda. Pengurus akan meninjau dan mengaktifkan UMKM Anda secepatnya.</p>
            </div>

            <form action="{{ route('umkm.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Nama Usaha <span class="text-red-500">*</span></label>
                        <input type="text" name="business_name" required placeholder="Contoh: Warung Berkah Kopi" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:bg-white transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Nama Pemilik <span class="text-red-500">*</span></label>
                        <input type="text" name="owner_name" required placeholder="Nama Anda" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:bg-white transition-colors">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Nomor WhatsApp <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone_number" required placeholder="081234567890" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:bg-white transition-colors">
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-slate-700 mb-1">Kategori Usaha</label>
                        <select name="category" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:bg-white transition-colors">
                            <option value="Kuliner & Makanan">Kuliner & Makanan</option>
                            <option value="Jasa & Perbaikan">Jasa & Perbaikan</option>
                            <option value="Retail & Kelontong">Retail & Kelontong</option>
                            <option value="Kerajinan & Fashion">Kerajinan & Fashion</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Alamat / RT / Blok Rumah</label>
                    <input type="text" name="address" placeholder="Contoh: Keranggan RT 03 / RW 01, No. 12" class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:bg-white transition-colors">
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Deskripsi Ringkas Produk/Jasa</label>
                    <textarea name="description" rows="3" placeholder="Penjelasan singkat menu makanan, layanan, atau produk yang Anda jual..." class="w-full px-3.5 py-2.5 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-emerald-500 focus:bg-white transition-colors"></textarea>
                </div>

                <div>
                    <label class="block text-xs font-bold text-slate-700 mb-1">Foto Tempat / Produk Usaha</label>
                    <input type="file" name="image" accept="image/*" class="w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-xl file:border-0 file:text-xs file:font-semibold file:bg-emerald-50 file:text-emerald-700 hover:file:bg-emerald-100 transition-colors">
                </div>

                <div class="pt-3 flex items-center justify-end gap-3 border-t border-slate-100">
                    <button type="button" onclick="closeUmkmModal()" class="px-5 py-2.5 text-xs font-bold text-slate-600 hover:bg-slate-100 rounded-xl transition-colors">Batal</button>
                    <button type="submit" class="px-6 py-2.5 text-xs font-bold text-white bg-emerald-600 hover:bg-emerald-700 rounded-xl shadow-sm transition-all hover:shadow-emerald-600/30">Kirim Pendaftaran</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openUmkmModal() {
            document.getElementById('umkm-modal').classList.remove('hidden');
        }
        function closeUmkmModal() {
            document.getElementById('umkm-modal').classList.add('hidden');
        }
    </script>
</x-layout>
