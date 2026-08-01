<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Keranggan - Informasi Publik' }}</title>
    
    <!-- Meta SEO & OpenGraph -->
    <meta name="description" content="{{ $metaDescription ?? 'Informasi Publik Keranggan. Direktori usaha UMKM, fasilitas publik, layanan kesehatan, pendidikan, dan pengaduan warga.' }}">
    <meta name="keywords" content="Keranggan, Kelurahan Keranggan, UMKM Keranggan, Informasi Publik Keranggan">
    <meta name="author" content="KKN Nayakara">
    <meta property="og:title" content="{{ $title ?? 'Keranggan - Informasi Publik' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Informasi Publik Keranggan.' }}">
    <meta property="og:type" content="website">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Universal Selection & Caret Prevention CSS -->
    <style>
        *:not(input):not(textarea):not(select):not([contenteditable="true"]):not(option) {
            user-select: none !important;
            -webkit-user-select: none !important;
            -moz-user-select: none !important;
            -ms-user-select: none !important;
        }

        *:not(input):not(textarea):not(select):not([contenteditable="true"]):not(option):not(a):not(button):not([role="button"]):not(label):not(svg):not(path) {
            cursor: default !important;
        }

        a, button, [role="button"] {
            cursor: pointer !important;
        }

        input, textarea, select, [contenteditable="true"] {
            cursor: text !important;
            user-select: text !important;
            -webkit-user-select: text !important;
        }
    </style>
</head>
<body class="font-sans antialiased text-slate-800 bg-slate-50 selection:bg-emerald-200 selection:text-emerald-900 flex flex-col min-h-screen relative overflow-x-hidden">
    
    <!-- Global Background Pattern -->
    <div class="fixed inset-0 z-[-1] h-full w-full bg-[radial-gradient(#cbd5e1_1px,transparent_1px)] [background-size:20px_20px] opacity-30"></div>
    
    <!-- Navbar -->
    <div class="sticky top-0 z-50 w-full transition-all duration-300">
        <nav class="w-full bg-white/85 backdrop-blur-2xl border-b border-slate-200/80 shadow-sm relative group/nav">
            <div class="absolute inset-0 bg-gradient-to-r from-emerald-50/40 via-white/20 to-teal-50/40 opacity-50 pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-full h-[2px] bg-gradient-to-r from-emerald-400 to-teal-400 opacity-0 group-hover/nav:opacity-100 transition-opacity duration-700"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
                <div class="flex justify-between h-16 sm:h-20 items-center">
                    <!-- Logo -->
                    <a href="#" class="flex-shrink-0 flex items-center group cursor-pointer">
                        <img src="{{ asset('images/logo_tangsel.png') }}" alt="Logo Tangerang Selatan" class="h-10 w-10 object-contain mr-3 group-hover:scale-105 transition-transform duration-300 flex-shrink-0">
                        <div class="flex flex-col justify-center">
                            <span class="text-2xl font-bold text-slate-900 tracking-tight leading-none">Keranggan</span>
                            <span class="text-[10px] font-bold text-emerald-600 tracking-wider uppercase mt-0.5">Kelurahan Keranggan</span>
                        </div>
                    </a>
                    
                    <!-- Desktop Menu -->
                    <div class="hidden md:flex items-center space-x-2">
                        <!-- 1. Beranda -->
                        <a href="#" data-section="beranda" class="nav-link relative px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 text-emerald-700 bg-emerald-50/80 border border-emerald-100/50 shadow-sm shadow-emerald-50 hover:text-emerald-700 hover:bg-emerald-50/80">
                            Beranda
                            <div class="active-dot absolute -bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 bg-emerald-600 rounded-full transition-opacity duration-300 opacity-100"></div>
                        </a>

                        <!-- 2. UMKM -->
                        <a href="#umkm" data-section="umkm" class="nav-link relative px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 text-slate-600 border border-transparent hover:text-emerald-700 hover:bg-emerald-50/80 hover:border-emerald-100/50">
                            UMKM
                            <div class="active-dot absolute -bottom-1 left-1/2 -translate-x-1/2 w-1 h-1 bg-emerald-600 rounded-full transition-opacity duration-300 opacity-0"></div>
                        </a>

                        <!-- 3. Fasilitas Publik -->
                        <a href="#fasilitas" data-section="fasilitas" class="nav-link relative px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 text-slate-600 border border-transparent hover:text-emerald-700 hover:bg-emerald-50/80 hover:border-emerald-100/50">
                            Fasilitas Publik
                        </a>

                        <!-- 5. Dropdown Layanan & Informasi -->
                        <div class="relative group">
                            <button class="relative px-4 py-2 rounded-xl text-sm font-bold transition-all duration-300 text-slate-600 border border-transparent hover:text-emerald-700 hover:bg-emerald-50/80 hover:border-emerald-100/50 flex items-center">
                                Layanan & Informasi
                                <svg class="w-4 h-4 ml-1 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            
                            <!-- Dropdown Menu items -->
                            <div class="absolute left-0 mt-2 w-64 bg-white border border-slate-200/80 rounded-xl shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 transform origin-top-left scale-95 group-hover:scale-100 z-50 overflow-hidden">
                                <div class="py-2 flex flex-col">
                                    <a href="#pengumuman" class="px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 transition-colors flex items-center whitespace-nowrap">
                                        <svg class="w-4 h-4 mr-2.5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5.882V19.24a1.76 1.76 0 01-3.417.592l-2.147-6.15M18 13a3 3 0 100-6M5.436 13.683A4.001 4.001 0 017 6h1.832c4.1 0 7.625-1.234 9.168-3v14c-1.543-1.766-5.067-3-9.168-3H7a3.988 3.988 0 01-1.564-.317z"></path></svg>
                                        Pengumuman & Agenda
                                    </a>
                                    <a href="#kesehatan" class="px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 transition-colors flex items-center whitespace-nowrap">
                                        <svg class="w-4 h-4 mr-2.5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                                        Kesehatan
                                    </a>
                                    <a href="#pendidikan" class="px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 transition-colors flex items-center whitespace-nowrap">
                                        <svg class="w-4 h-4 mr-2.5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                                        Pendidikan
                                    </a>
                                    <a href="#ekowisata" class="px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 transition-colors flex items-center whitespace-nowrap">
                                        <svg class="w-4 h-4 mr-2.5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                        Ekowisata
                                    </a>
                                    <a href="#video" class="px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 transition-colors flex items-center whitespace-nowrap">
                                        <svg class="w-4 h-4 mr-2.5 text-emerald-600 flex-shrink-0" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                                        Kanal Video / Reels
                                    </a>
                                    <a href="#kampus" class="px-4 py-2.5 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 transition-colors flex items-center whitespace-nowrap">
                                        <svg class="w-4 h-4 mr-2.5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                                        Peta Wilayah
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Hamburger Toggle Button -->
                    <div class="flex items-center md:hidden">
                        <button 
                            onclick="toggleMobileMenu()"
                            class="p-2 rounded-xl text-slate-600 hover:text-emerald-600 hover:bg-emerald-50 focus:outline-none transition-colors"
                            aria-label="Toggle Navigation Menu"
                        >
                            <svg id="hamburger-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                            <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile Drawer -->
            <div id="mobile-menu-drawer" class="hidden md:hidden bg-white/95 backdrop-blur-2xl border-t border-slate-100 px-4 pt-3 pb-6 shadow-xl space-y-2 transition-all duration-300">
                <a href="#" onclick="toggleMobileMenu()" data-section="beranda" class="block px-4 py-2.5 rounded-xl text-sm font-bold text-emerald-700 bg-emerald-50 border border-emerald-100/60">
                    Beranda
                </a>
                <a href="#umkm" onclick="toggleMobileMenu()" data-section="umkm" class="block px-4 py-2.5 rounded-xl text-sm font-bold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">
                    UMKM
                </a>
                <a href="#fasilitas" onclick="toggleMobileMenu()" data-section="fasilitas" class="block px-4 py-2.5 rounded-xl text-sm font-bold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">
                    Fasilitas Publik
                </a>
                <a href="#pengaduan" onclick="toggleMobileMenu()" data-section="pengaduan" class="block px-4 py-2.5 rounded-xl text-sm font-bold text-slate-700 hover:bg-emerald-50 hover:text-emerald-700 transition-colors">
                    Pengaduan Warga
                </a>
                
                <div class="pt-2 border-t border-slate-100 space-y-1">
                    <span class="px-4 text-[11px] font-bold text-slate-400 uppercase tracking-wider block mb-1">Layanan & Informasi</span>
                    <a href="#kesehatan" onclick="toggleMobileMenu()" class="flex items-center px-4 py-2 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 rounded-xl">
                        <svg class="w-4 h-4 mr-2.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                        Kesehatan
                    </a>
                    <a href="#pendidikan" onclick="toggleMobileMenu()" class="flex items-center px-4 py-2 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 rounded-xl">
                        <svg class="w-4 h-4 mr-2.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path></svg>
                        Pendidikan
                    </a>
                    <a href="#ekowisata" onclick="toggleMobileMenu()" class="flex items-center px-4 py-2 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 rounded-xl">
                        <svg class="w-4 h-4 mr-2.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        Ekowisata
                    </a>
                    <a href="#video" onclick="toggleMobileMenu()" class="flex items-center px-4 py-2 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 rounded-xl">
                        <svg class="w-4 h-4 mr-2.5 text-emerald-600" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                        Kanal Video / Reels
                    </a>
                    <a href="#kampus" onclick="toggleMobileMenu()" class="flex items-center px-4 py-2 text-sm font-semibold text-slate-600 hover:bg-emerald-50 hover:text-emerald-700 rounded-xl">
                        <svg class="w-4 h-4 mr-2.5 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0021 18.382V7.618a1 1 0 00-.553-.894L15 4m0 13V4m0 0L9 7"></path></svg>
                        Peta Wilayah
                    </a>
                </div>
            </div>
        </nav>
    </div>

    <main id="beranda" class="flex-grow flex flex-col relative z-0">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-300 border-t border-slate-800 mt-20 pt-16 pb-12 relative overflow-hidden">
        <!-- Subtle Glow Effect -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-3/4 h-24 bg-emerald-500/10 blur-3xl rounded-full pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-slate-800">
                <!-- Col 1: Identity & About -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <img src="{{ asset('images/logo_tangsel.png') }}" alt="Logo Tangerang Selatan" class="h-10 w-10 object-contain flex-shrink-0">
                        <div>
                            <span class="text-xl font-bold text-white tracking-tight">Keranggan</span>
                            <p class="text-[10px] font-semibold text-emerald-400 tracking-wider uppercase">Kelurahan Keranggan</p>
                        </div>
                    </div>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Portal resmi sistem informasi pelayanan publik, direktori usaha UMKM, fasilitas publik, kesehatan, pendidikan, dan panduan wilayah Keranggan.
                    </p>
                    <div class="pt-2 text-xs text-slate-400 space-y-1.5">
                        <p class="flex items-center"><svg class="w-4 h-4 mr-2 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg> Kelurahan Keranggan, Kecamatan Setu, Kota Tangerang Selatan</p>
                        <p class="flex items-center"><svg class="w-4 h-4 mr-2 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg> kkn.nayakara@gmail.com</p>
                    </div>
                </div>

                <!-- Col 2: Navigasi -->
                <div>
                    <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-4 border-l-2 border-emerald-500 pl-3">Navigasi</h4>
                    <ul class="space-y-2.5 text-xs text-slate-400">
                        <li><a href="#beranda" class="hover:text-emerald-400 transition-colors flex items-center"><svg class="w-3 h-3 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg> Beranda Utama</a></li>
                        <li><a href="#umkm" class="hover:text-emerald-400 transition-colors flex items-center"><svg class="w-3 h-3 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg> UMKM</a></li>
                        <li><a href="#fasilitas" class="hover:text-emerald-400 transition-colors flex items-center"><svg class="w-3 h-3 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg> Fasilitas Publik</a></li>
                        <li><a href="#kesehatan" class="hover:text-emerald-400 transition-colors flex items-center"><svg class="w-3 h-3 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg> Kesehatan</a></li>
                        <li><a href="#pendidikan" class="hover:text-emerald-400 transition-colors flex items-center"><svg class="w-3 h-3 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg> Pendidikan</a></li>
                        <li><a href="#ekowisata" class="hover:text-emerald-400 transition-colors flex items-center"><svg class="w-3 h-3 mr-2 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg> Ekowisata</a></li>
                    </ul>
                </div>

                <!-- Col 3: Media Sosial Resmi (@kkn.nayakara) -->
                <div class="lg:col-span-2">
                    <h4 class="text-white text-sm font-bold uppercase tracking-wider mb-4 border-l-2 border-emerald-500 pl-3">Media Sosial Resmi (@kkn.nayakara)</h4>
                    <p class="text-slate-400 text-xs mb-4">Terhubung langsung dengan seluruh kanal media sosial resmi untuk mendapatkan informasi dan berita terbaru:</p>
                    
                    <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                        <!-- Instagram -->
                        <a href="https://www.instagram.com/kkn.nayakara/" target="_blank" class="flex items-center p-2.5 bg-slate-800/80 hover:bg-gradient-to-r hover:from-purple-600 hover:to-pink-600 rounded-xl border border-slate-700/80 text-white text-xs font-semibold transition-all group shadow-sm hover:-translate-y-0.5">
                            <div class="w-7 h-7 rounded-lg bg-pink-500/20 text-pink-400 group-hover:bg-white/20 group-hover:text-white flex items-center justify-center mr-2.5 flex-shrink-0 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                            </div>
                            <div>
                                <span class="block leading-tight">Instagram</span>
                                <span class="text-[10px] text-slate-400 group-hover:text-white/80 font-normal">@kkn.nayakara</span>
                            </div>
                        </a>

                        <!-- TikTok -->
                        <a href="https://www.tiktok.com/@kkn.nayakara" target="_blank" class="flex items-center p-2.5 bg-slate-800/80 hover:bg-slate-700 rounded-xl border border-slate-700/80 text-white text-xs font-semibold transition-all group shadow-sm hover:-translate-y-0.5">
                            <div class="w-7 h-7 rounded-lg bg-pink-500/20 text-pink-300 group-hover:bg-white/20 group-hover:text-white flex items-center justify-center mr-2.5 flex-shrink-0 transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.97v6.62c.01 1.78-.51 3.56-1.52 5.01-1.19 1.72-3.08 2.87-5.18 3.16-2.07.29-4.21-.19-5.91-1.42-1.7-1.22-2.78-3.14-2.97-5.22-.2-2.08.46-4.18 1.83-5.75 1.37-1.57 3.37-2.45 5.46-2.43.32.01.64.03.96.08V13.1c-.27-.06-.55-.09-.83-.09-1.12.01-2.2.49-2.94 1.34-.74.84-.99 2.01-.68 3.1.31 1.09 1.19 1.93 2.29 2.19 1.1.26 2.26-.06 3.03-.84.77-.79 1.09-1.92 1.04-3.02V.02z"/></svg>
                            </div>
                            <div>
                                <span class="block leading-tight">TikTok</span>
                                <span class="text-[10px] text-slate-400 group-hover:text-white/80 font-normal">@kkn.nayakara</span>
                            </div>
                        </a>

                        <!-- Email Contact -->
                        <a href="mailto:kkn.nayakara@gmail.com" class="flex items-center p-2.5 bg-slate-800/80 hover:bg-emerald-600 rounded-xl border border-slate-700/80 text-white text-xs font-semibold transition-all group shadow-sm hover:-translate-y-0.5">
                            <div class="w-7 h-7 rounded-lg bg-emerald-500/20 text-emerald-400 group-hover:bg-white/20 group-hover:text-white flex items-center justify-center mr-2.5 flex-shrink-0 transition-colors">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <div>
                                <span class="block leading-tight">Email Resmi</span>
                                <span class="text-[10px] text-slate-400 group-hover:text-white/80 font-normal">kkn.nayakara</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bottom Copyright Bar -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between text-xs text-slate-500 gap-4">
                <p>&copy; {{ date('Y') }} KKN NAYAKARA. Hak cipta dilindungi undang-undang.</p>
                <div class="flex items-center space-x-4">
                    <a href="mailto:kkn.nayakara@gmail.com" class="hover:text-emerald-400 transition-colors">kkn.nayakara@gmail.com</a>
                    <span class="text-slate-700">•</span>
                    <a href="/admin" class="hover:text-emerald-400 transition-colors text-slate-500 flex items-center gap-1.5 group/adminlink" title="Akses Admin / Pengurus Portal">
                        <svg class="w-3.5 h-3.5 text-slate-500 group-hover/adminlink:text-emerald-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 00-2 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                        Portal Pengurus
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <!-- ScrollSpy & Mobile Toggle & Secret Shortcut Script -->
    <script>
        function toggleMobileMenu() {
            const drawer = document.getElementById('mobile-menu-drawer');
            const burgerIcon = document.getElementById('hamburger-icon');
            const closeIcon = document.getElementById('close-icon');
            if (drawer) {
                drawer.classList.toggle('hidden');
                if (burgerIcon && closeIcon) {
                    burgerIcon.classList.toggle('hidden');
                    closeIcon.classList.toggle('hidden');
                }
            }
        }

        // Secret Shortcut (Ctrl + Shift + A) to open /admin
        document.addEventListener('keydown', (e) => {
            if (e.ctrlKey && e.shiftKey && (e.key === 'A' || e.key === 'a' || e.key === 'L' || e.key === 'l')) {
                e.preventDefault();
                window.location.href = '/admin';
            }
        });

        document.addEventListener('DOMContentLoaded', () => {
            const links = document.querySelectorAll('.nav-link');
            const sections = ['pengumuman', 'umkm', 'fasilitas', 'pengaduan', 'kesehatan', 'pendidikan', 'ekowisata', 'video', 'kampus'].map(id => document.getElementById(id)).filter(el => el !== null);

            function onScroll() {
                let current = '';
                const scrollPosition = window.scrollY + 250;

                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.offsetHeight;
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });

                if (window.scrollY < 150) {
                    current = 'beranda';
                }

                links.forEach(link => {
                    const sectionId = link.getAttribute('data-section');
                    const dot = link.querySelector('.active-dot');

                    if (sectionId === current) {
                        link.classList.remove('text-slate-600', 'border-transparent');
                        link.classList.add('text-emerald-700', 'bg-emerald-50/80', 'border-emerald-100/50', 'shadow-sm', 'shadow-emerald-50');
                        if (dot) dot.classList.replace('opacity-0', 'opacity-100');
                    } else {
                        link.classList.remove('text-emerald-700', 'bg-emerald-50/80', 'border-emerald-100/50', 'shadow-sm', 'shadow-emerald-50');
                        link.classList.add('text-slate-600', 'border-transparent');
                        if (dot) dot.classList.replace('opacity-100', 'opacity-0');
                    }
                });
            }

            window.addEventListener('scroll', onScroll);
            onScroll();
        });
    </script>
</body>
</html>
