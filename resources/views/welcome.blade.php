<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SD Negeri 1 Suka Cita Purwokerto - Sekolah Dasar Ramah Anak & Berprestasi</title>

    <!-- Meta SEO & Friendly description -->
    <meta name="description" content="SD Negeri 1 Suka Cita Purwokerto adalah sekolah dasar ramah anak berakreditasi A dengan kurikulum merdeka, pembelajaran bilingual, robotika cilik, dan pembentukan karakter mulia.">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23f59e0b'><path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'/></svg>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-amber-50/40 text-slate-800 font-sans antialiased overflow-x-hidden selection:bg-sky-500 selection:text-white">

    <!-- ================= TOP ANNOUNCEMENT BAR ================= -->
    <div class="bg-gradient-to-r from-sky-600 via-blue-600 to-indigo-600 text-white text-xs sm:text-sm py-2 px-4 shadow-xs">
        <div class="max-w-7xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-1.5 sm:gap-4 text-center sm:text-left">
            <div class="flex items-center gap-2 justify-center flex-wrap">
                <span class="bg-amber-400 text-slate-900 font-extrabold px-2 py-0.5 rounded-full text-[10px] sm:text-xs tracking-wider animate-pulse">BARU</span>
                <span>🎒 <strong>PPDB 2026/2027 Gelombang 1</strong> Telah Dibuka! Dapatkan Diskon Biaya Pendaftaran 25%.</span>
            </div>
            <div class="flex items-center gap-3 sm:gap-4 text-xs font-semibold shrink-0">
                <a href="{{ url('/pendaftaran') }}" class="underline hover:text-amber-200 transition font-bold flex items-center gap-1">
                    <span>Daftar Sekarang</span> &rarr;
                </a>
                <span class="opacity-40">|</span>

                <a href="https://wa.me/6281234567890?text=Halo%20Admin%20SD%20Negeri%201%20Suka%20Cita%20Purwokerto,%20saya%20ingin%20tanya%20informasi%20sekolah" target="_blank" class="hover:text-amber-200 transition flex items-center gap-1.5">
                    <i data-lucide="phone-call" class="w-3.5 h-3.5 text-amber-300"></i> Hotline: (0281) 632145
                </a>
            </div>
        </div>
    </div>

    <!-- ================= FLOATING STICKY NAVBAR ================= -->
    <header class="sticky top-2 sm:top-3 z-50 px-3 sm:px-6">
        <nav class="max-w-7xl mx-auto glass-card rounded-2xl sm:rounded-3xl shadow-lg border border-white/70 px-3.5 sm:px-5 py-2.5 sm:py-3 flex items-center justify-between transition-all">
            <!-- Brand Logo -->
            <a href="#" class="flex items-center gap-2.5 sm:gap-3 group sound-click shrink-0 min-w-0">
                <div class="w-10 h-10 sm:w-11 sm:h-11 rounded-2xl bg-gradient-to-br from-amber-400 via-orange-400 to-rose-400 flex items-center justify-center text-white shadow-md shadow-orange-300/40 group-hover:scale-105 transition-transform shrink-0">
                    <i data-lucide="graduation-cap" class="w-5 h-5 sm:w-6 sm:h-6"></i>
                </div>
                <div class="min-w-0">
                    <div class="flex items-center gap-1.5">
                        <span class="font-heading text-sm sm:text-base xl:text-lg font-bold text-sky-800 tracking-tight leading-none whitespace-nowrap block sm:hidden">
                            SDN 1 Suka Cita
                        </span>
                        <span class="font-heading text-sm sm:text-base xl:text-lg font-bold text-sky-800 tracking-tight leading-none whitespace-nowrap hidden sm:block">
                            SD Negeri 1 Suka Cita Purwokerto
                        </span>
                        <span class="text-amber-500 text-xs sm:text-sm animate-wiggle shrink-0 inline-block">✨</span>
                    </div>
                    <p class="text-[10px] xl:text-[11px] font-medium text-slate-500 leading-none mt-1 hidden sm:block">
                        Sekolah Dasar Ramah Anak & Kurikulum Unggul
                    </p>
                    <p class="text-[10px] font-medium text-slate-500 leading-none mt-1 block sm:hidden">
                        Purwokerto • Ramah Anak
                    </p>
                </div>
            </a>

            <!-- Desktop Navigation Links (Pill Style, Compact & Elegant) -->
            <div class="hidden lg:flex items-center gap-1 xl:gap-1.5 bg-slate-100/70 p-1 rounded-full border border-slate-200/60 shadow-inner">
                <a href="#beranda" class="sound-click px-3 py-1.5 rounded-full text-xs font-semibold text-slate-700 hover:text-sky-700 hover:bg-white transition-all shadow-xs">Beranda</a>
                <a href="#sambutan" class="sound-click px-3 py-1.5 rounded-full text-xs font-semibold text-slate-600 hover:text-sky-700 hover:bg-white transition-all">Profil</a>
                <a href="#program" class="sound-click px-3 py-1.5 rounded-full text-xs font-semibold text-slate-600 hover:text-sky-700 hover:bg-white transition-all">Program</a>
                <a href="#fasilitas" class="sound-click px-3 py-1.5 rounded-full text-xs font-semibold text-slate-600 hover:text-sky-700 hover:bg-white transition-all">Fasilitas</a>
                <a href="#guru" class="sound-click px-3 py-1.5 rounded-full text-xs font-semibold text-slate-600 hover:text-sky-700 hover:bg-white transition-all">Guru</a>
                <a href="#prestasi" class="sound-click px-3 py-1.5 rounded-full text-xs font-semibold text-slate-600 hover:text-sky-700 hover:bg-white transition-all">Prestasi</a>
                <a href="#faq" class="sound-click px-3 py-1.5 rounded-full text-xs font-semibold text-slate-600 hover:text-sky-700 hover:bg-white transition-all">FAQ</a>
            </div>

            <!-- Right Actions (Sound Toggle + CTA + Mobile Hamburger) -->
            <div class="flex items-center gap-2 sm:gap-2.5 shrink-0">
                <!-- Sound Toggle Button -->
                <button id="sound-toggle" title="Suara Efek Interaktif (On/Off)" class="w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-slate-100 hover:bg-amber-100 text-slate-600 hover:text-amber-600 transition flex items-center justify-center shadow-xs shrink-0 cursor-pointer" aria-label="Toggle Sound">
                    <i id="sound-icon" data-lucide="volume-2" class="w-4 h-4 sm:w-4.5 sm:h-4.5"></i>
                </button>

                <!-- CTA Button -->
                <a href="{{ url('/pendaftaran') }}" class="sound-click hidden sm:inline-flex items-center gap-1.5 sm:gap-2 bg-gradient-to-r from-emerald-500 via-teal-500 to-sky-600 hover:from-emerald-600 hover:to-sky-700 text-white font-heading font-bold text-xs sm:text-sm px-4 sm:px-5 py-2 sm:py-2.5 rounded-full shadow-md shadow-emerald-500/25 hover:shadow-lg hover:shadow-emerald-500/40 hover:-translate-y-0.5 transition-all shrink-0">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5 sm:w-4 sm:h-4 text-amber-300"></i>
                    <span>Daftar PPDB</span>
                </a>

                <!-- Mobile Hamburger Button -->
                <button id="mobile-menu-btn" class="lg:hidden w-9 h-9 sm:w-10 sm:h-10 rounded-xl bg-slate-100 text-slate-700 hover:bg-slate-200 flex items-center justify-center transition shrink-0 cursor-pointer" aria-label="Menu Mobile">
                    <i data-lucide="menu" class="w-5 h-5"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden lg:hidden max-w-7xl mx-auto mt-2 glass-card rounded-2xl shadow-xl p-3.5 border border-white/70 space-y-2 animate-fadeIn">
            <div class="grid grid-cols-2 gap-1.5 text-xs font-semibold text-slate-700">
                <a href="#beranda" class="mobile-link flex items-center gap-2 p-2 rounded-xl hover:bg-sky-50 hover:text-sky-700 transition">
                    <i data-lucide="home" class="w-4 h-4 text-sky-500"></i>
                    <span>Beranda</span>
                </a>
                <a href="#sambutan" class="mobile-link flex items-center gap-2 p-2 rounded-xl hover:bg-sky-50 hover:text-sky-700 transition">
                    <i data-lucide="user-check" class="w-4 h-4 text-sky-500"></i>
                    <span>Profil</span>
                </a>
                <a href="#program" class="mobile-link flex items-center gap-2 p-2 rounded-xl hover:bg-sky-50 hover:text-sky-700 transition">
                    <i data-lucide="sparkles" class="w-4 h-4 text-amber-500"></i>
                    <span>Program</span>
                </a>
                <a href="#fasilitas" class="mobile-link flex items-center gap-2 p-2 rounded-xl hover:bg-sky-50 hover:text-sky-700 transition">
                    <i data-lucide="building-2" class="w-4 h-4 text-emerald-500"></i>
                    <span>Fasilitas</span>
                </a>
                <a href="#guru" class="mobile-link flex items-center gap-2 p-2 rounded-xl hover:bg-sky-50 hover:text-sky-700 transition">
                    <i data-lucide="users" class="w-4 h-4 text-indigo-500"></i>
                    <span>Guru</span>
                </a>
                <a href="#prestasi" class="mobile-link flex items-center gap-2 p-2 rounded-xl hover:bg-sky-50 hover:text-sky-700 transition">
                    <i data-lucide="trophy" class="w-4 h-4 text-amber-500"></i>
                    <span>Prestasi</span>
                </a>
                <a href="#faq" class="mobile-link flex items-center gap-2 p-2 rounded-xl hover:bg-sky-50 hover:text-sky-700 transition">
                    <i data-lucide="help-circle" class="w-4 h-4 text-purple-500"></i>
                    <span>FAQ</span>
                </a>
                <a href="{{ route('admin.login') }}" class="mobile-link flex items-center gap-2 p-2 rounded-xl hover:bg-sky-50 hover:text-sky-700 transition">
                    <i data-lucide="lock" class="w-4 h-4 text-slate-400"></i>
                    <span>Portal Admin</span>
                </a>
            </div>
            <div class="pt-2 border-t border-slate-100">
                <a href="{{ url('/pendaftaran') }}" class="mobile-link w-full flex items-center justify-center gap-2 bg-gradient-to-r from-emerald-500 via-teal-500 to-sky-600 hover:from-emerald-600 hover:to-sky-700 text-white font-heading font-bold py-2.5 px-4 rounded-xl shadow-md transition text-xs sm:text-sm">
                    <i data-lucide="sparkles" class="w-4 h-4 text-amber-300"></i>
                    <span>Daftar Siswa Baru (PPDB Online)</span>
                </a>
            </div>
        </div>

    </header>

    <!-- ================= HERO SECTION DENGAN 3D INTERAKTIF ================= -->
    <section id="beranda" class="relative pt-8 pb-16 lg:pt-14 lg:pb-24 overflow-hidden">
        <!-- Playful Background Blobs -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-sky-200/50 rounded-full blur-3xl pointer-events-none -z-10 animate-float"></div>
        <div class="absolute top-1/2 -right-24 w-96 h-96 bg-amber-200/50 rounded-full blur-3xl pointer-events-none -z-10 animate-float-reverse"></div>
        <div class="absolute -bottom-20 left-1/3 w-80 h-80 bg-rose-200/40 rounded-full blur-3xl pointer-events-none -z-10"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">
                
                <!-- Left Hero Text & CTA -->
                <div class="lg:col-span-7 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-amber-100 border border-amber-300 text-amber-900 text-xs sm:text-sm font-semibold shadow-sm">
                        <span class="w-2.5 h-2.5 rounded-full bg-amber-500 animate-ping"></span>
                        <span>⭐ Sekolah Penggerak & Ramah Anak Unggulan</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-heading font-extrabold text-slate-900 leading-tight">
                        Tempat Terbaik Tumbuh 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 via-cyan-500 to-emerald-500">Cerdas</span>, 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-amber-500 via-orange-500 to-rose-500">Ceria</span>, & 
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-pink-500">Berakhlak Mulia!</span>
                    </h1>

                    <p class="text-base sm:text-lg text-slate-600 font-normal leading-relaxed max-w-2xl mx-auto lg:mx-0">
                        Menghadirkan lingkungan belajar yang aman, penuh kasih sayang, dan menginspirasi rasa ingin tahu. Dilengkapi pembelajaran berbasis proyek, bilingual foundation, sains alam, dan teknologi ramah anak.
                    </p>

                    <!-- CTA Action Buttons -->
                    <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4 pt-2">
                        <a href="{{ url('/pendaftaran') }}" class="sound-click w-full sm:w-auto inline-flex items-center justify-center gap-3 bg-gradient-to-r from-sky-500 via-blue-600 to-indigo-600 hover:from-sky-600 hover:to-indigo-700 text-white font-heading font-bold text-base px-8 py-4 rounded-2xl shadow-xl shadow-sky-500/30 hover:shadow-2xl hover:shadow-sky-500/50 hover:-translate-y-1 transition-all">
                            <i data-lucide="user-plus" class="w-5 h-5"></i>
                            <span>Daftar Siswa Baru (PPDB Bertahap)</span>
                        </a>

                        <a href="#fasilitas" class="sound-click w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-50 text-slate-700 font-heading font-semibold text-base px-7 py-4 rounded-2xl border-2 border-slate-200 shadow-sm hover:shadow-md hover:border-sky-300 transition-all">
                            <i data-lucide="compass" class="w-5 h-5 text-sky-500"></i>
                            <span>Jelajahi Fasilitas</span>
                        </a>
                    </div>

                    <!-- Trust Badges -->
                    <div class="pt-4 border-t border-slate-200/80 flex flex-wrap items-center justify-center lg:justify-start gap-4 sm:gap-6 text-xs sm:text-sm font-semibold text-slate-600">
                        <div class="flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center"><i data-lucide="check" class="w-3.5 h-3.5"></i></span>
                            <span>Akreditasi A Unggul (BAN-S/M)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-sky-100 text-sky-600 flex items-center justify-center"><i data-lucide="check" class="w-3.5 h-3.5"></i></span>
                            <span>Kurikulum Merdeka Plus</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-600 flex items-center justify-center"><i data-lucide="check" class="w-3.5 h-3.5"></i></span>
                            <span>Sekolah Inklusif Ramah Anak</span>
                        </div>
                    </div>
                </div>

                <!-- Right 3D Interactive Canvas Playground -->
                <div class="lg:col-span-5 relative">
                    <div class="relative w-full aspect-square max-w-[480px] mx-auto rounded-3xl bg-gradient-to-b from-sky-100/60 via-amber-50/40 to-emerald-100/60 p-2 shadow-2xl border-4 border-white">
                        
                        <!-- The Live Three.js WebGL Container -->
                        <div id="hero-3d-canvas" class="w-full h-full rounded-2xl cursor-grab active:cursor-grabbing overflow-hidden relative" title="Putar atau klik objek 3D!">
                            <!-- 3D Interactive Helper Tooltip -->
                            <div class="absolute bottom-3 left-1/2 -translate-x-1/2 bg-slate-900/80 backdrop-blur-md text-white text-[11px] font-medium px-3.5 py-1.5 rounded-full flex items-center gap-2 shadow-lg pointer-events-none animate-pulse">
                                <i data-lucide="mouse-pointer-click" class="w-3.5 h-3.5 text-amber-400"></i>
                                <span>Gerakkan kursor atau klik objek 3D!</span>
                            </div>
                        </div>

                        <!-- Floating Micro Badge 1 -->
                        <div class="absolute -top-4 -left-4 glass-card rounded-2xl p-3 shadow-xl border border-white flex items-center gap-3 animate-float pointer-events-none">
                            <div class="w-10 h-10 rounded-xl bg-amber-400 text-slate-900 flex items-center justify-center shadow-md">
                                <i data-lucide="award" class="w-6 h-6 text-white"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-800">120+ Prestasi Juara</p>
                                <p class="text-[10px] text-slate-500">Tingkat Kota & Nasional</p>
                            </div>
                        </div>

                        <!-- Floating Micro Badge 2 -->
                        <div class="absolute -bottom-4 -right-4 glass-card rounded-2xl p-3 shadow-xl border border-white flex items-center gap-3 animate-float-reverse pointer-events-none">
                            <div class="w-10 h-10 rounded-xl bg-emerald-400 text-white flex items-center justify-center shadow-md">
                                <i data-lucide="smile" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-800">99.8% Anak Ceria</p>
                                <p class="text-[10px] text-slate-500">Belajar Penuh Bahagia</p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= STATS COUNTER SECTION ================= -->
    <section id="stats-section" class="py-10 bg-white/80 border-y border-amber-100 shadow-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center">
                
                <div class="p-4 rounded-2xl bg-sky-50/60 border border-sky-100 hover:shadow-md transition">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-sky-500 text-white flex items-center justify-center mb-3 shadow-md shadow-sky-300/50">
                        <i data-lucide="users" class="w-6 h-6"></i>
                    </div>
                    <div class="font-heading text-3xl sm:text-4xl font-extrabold text-sky-700 mb-1">
                        <span class="stat-number" data-target="650">0</span>+
                    </div>
                    <p class="text-xs sm:text-sm font-semibold text-slate-600">Siswa Aktif & Ceria</p>
                </div>

                <div class="p-4 rounded-2xl bg-amber-50/60 border border-amber-100 hover:shadow-md transition">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-amber-500 text-white flex items-center justify-center mb-3 shadow-md shadow-amber-300/50">
                        <i data-lucide="book-heart" class="w-6 h-6"></i>
                    </div>
                    <div class="font-heading text-3xl sm:text-4xl font-extrabold text-amber-600 mb-1">
                        <span class="stat-number" data-target="38">0</span>+
                    </div>
                    <p class="text-xs sm:text-sm font-semibold text-slate-600">Pendidik Ramah & Ahli</p>
                </div>

                <div class="p-4 rounded-2xl bg-emerald-50/60 border border-emerald-100 hover:shadow-md transition">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-emerald-500 text-white flex items-center justify-center mb-3 shadow-md shadow-emerald-300/50">
                        <i data-lucide="palette" class="w-6 h-6"></i>
                    </div>
                    <div class="font-heading text-3xl sm:text-4xl font-extrabold text-emerald-700 mb-1">
                        <span class="stat-number" data-target="24">0</span>+
                    </div>
                    <p class="text-xs sm:text-sm font-semibold text-slate-600">Ekstrakurikuler Pilihan</p>
                </div>

                <div class="p-4 rounded-2xl bg-purple-50/60 border border-purple-100 hover:shadow-md transition">
                    <div class="w-12 h-12 mx-auto rounded-2xl bg-purple-500 text-white flex items-center justify-center mb-3 shadow-md shadow-purple-300/50">
                        <i data-lucide="trophy" class="w-6 h-6"></i>
                    </div>
                    <div class="font-heading text-3xl sm:text-4xl font-extrabold text-purple-700 mb-1">
                        <span class="stat-number" data-target="100">0</span>%
                    </div>
                    <p class="text-xs sm:text-sm font-semibold text-slate-600">Lulusan Diterima di SMP Favorit</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= SAMBUTAN KEPALA SEKOLAH ================= -->
    <section id="sambutan" class="py-16 sm:py-20 bg-gradient-to-b from-white to-amber-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
                
                <!-- Principal Photo / Card -->
                <div class="lg:col-span-5 text-center">
                    <div class="relative inline-block card-3d-wrap">
                        <div class="card-3d bg-white p-4 rounded-3xl shadow-xl border-2 border-amber-200">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&w=800&q=80" alt="Kepala Sekolah SD Negeri 1 Suka Cita Purwokerto" class="w-72 h-80 sm:w-80 sm:h-96 object-cover rounded-2xl shadow-inner mx-auto">
                            <div class="mt-4 text-center">
                                <h3 class="font-heading text-xl font-bold text-slate-800">Hj. Nurul Hidayati, M.Pd.</h3>
                                <p class="text-sm font-semibold text-sky-600">Kepala Sekolah SD Negeri 1 Suka Cita Purwokerto</p>
                                <p class="text-xs text-slate-500 mt-0.5">Pengabdi Pendidikan Sejak 2008</p>
                            </div>
                        </div>
                        <div class="absolute -bottom-3 -right-3 bg-amber-400 text-slate-900 font-heading font-bold text-xs px-3 py-1.5 rounded-full shadow-lg border-2 border-white pointer-events-none select-none">
                            💖 Penuh Dedikasi
                        </div>

                    </div>
                </div>

                <!-- Principal Letter -->
                <div class="lg:col-span-7 space-y-5">
                    <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-sky-100 text-sky-700 text-xs font-bold">
                        <i data-lucide="message-square-heart" class="w-4 h-4"></i>
                        <span>Sambutan Hangat</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl font-heading font-bold text-slate-900 leading-snug">
                        "Setiap Anak Memiliki Bintang Kejora di Dalam Dirinya."
                    </h2>

                    <div class="space-y-4 text-slate-600 text-base leading-relaxed">
                        <p>
                            <em>Assalamu’alaikum Warahmatullahi Wabarakatuh</em>, salam hangat untuk Ayah dan Bunda yang kami hormati.
                        </p>
                        <p>
                            Selamat datang di <strong>SD Negeri 1 Suka Cita Purwokerto</strong>, rumah kedua tempat putra-putri tercinta menemukan keajaiban belajar tanpa rasa takut dan tekanan. Kami meyakini bahwa usia sekolah dasar adalah masa emas pembentukan rasa percaya diri, budi pekerti, dan cinta ilmu yang kekal.
                        </p>
                        <p>
                            Di sekolah ini, anak-anak tidak sekadar menghafal materi, namun diajak bereksplorasi dengan gembira melalui kurikulum merdeka inovatif, bimbingan moral islami yang toleran, serta teknologi masa depan yang bersahabat bagi usia anak.
                        </p>
                    </div>

                    <!-- 4 Core Values -->
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 pt-3">
                        <div class="p-3 bg-white rounded-xl border border-slate-200 text-center shadow-sm">
                            <span class="text-xl">❤️</span>
                            <p class="font-heading text-xs font-bold text-slate-800 mt-1">Kasih Sayang</p>
                        </div>
                        <div class="p-3 bg-white rounded-xl border border-slate-200 text-center shadow-sm">
                            <span class="text-xl">💡</span>
                            <p class="font-heading text-xs font-bold text-slate-800 mt-1">Kreativitas</p>
                        </div>
                        <div class="p-3 bg-white rounded-xl border border-slate-200 text-center shadow-sm">
                            <span class="text-xl">🤝</span>
                            <p class="font-heading text-xs font-bold text-slate-800 mt-1">Kejujuran</p>
                        </div>
                        <div class="p-3 bg-white rounded-xl border border-slate-200 text-center shadow-sm">
                            <span class="text-xl">🌱</span>
                            <p class="font-heading text-xs font-bold text-slate-800 mt-1">Kemandirian</p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>

    <!-- ================= PROGRAM UNGGULAN (3D TILT CARDS) ================= -->
    <section id="program" class="py-16 sm:py-24 bg-sky-50/50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-12 sm:mb-16">
                <span class="px-3.5 py-1 rounded-full bg-sky-200/70 text-sky-800 text-xs font-bold uppercase tracking-wider">
                    Kurikulum Masa Depan
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-slate-900">
                    Program Unggulan Sekolah
                </h2>
                <p class="text-slate-600 text-base sm:text-lg">
                    Dirancang seimbang antara pengembangan spiritual, akademis, literasi digital, dan kebugaran fisik anak.
                </p>
            </div>

            <!-- Program Cards Grid with 3D Tilt Effect -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Card 1 -->
                <div class="card-3d-wrap">
                    <div class="card-3d bg-white rounded-3xl p-6 sm:p-8 shadow-xl border-2 border-sky-100 hover:border-sky-300 h-full flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-14 h-14 rounded-2xl bg-sky-500 text-white flex items-center justify-center shadow-lg shadow-sky-400/40">
                                <i data-lucide="languages" class="w-7 h-7"></i>
                            </div>
                            <div class="inline-block px-3 py-0.5 rounded-full bg-sky-100 text-sky-700 text-xs font-bold">
                                Global Mindset
                            </div>
                            <h3 class="font-heading text-xl font-bold text-slate-900">Bilingual & English Daily Immersion</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Pembiasaan percakapan bahasa Inggris melalui kegiatan seru, bernyanyi, mendongeng (*storytelling*), dan games interaktif setiap hari.
                            </p>
                        </div>
                        <div class="pt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-semibold">
                            <span>Target: Lancar Percakapan</span>
                            <span class="text-sky-600">Kelas 1 - 6</span>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card-3d-wrap">
                    <div class="card-3d bg-white rounded-3xl p-6 sm:p-8 shadow-xl border-2 border-amber-100 hover:border-amber-300 h-full flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-14 h-14 rounded-2xl bg-amber-500 text-white flex items-center justify-center shadow-lg shadow-amber-400/40">
                                <i data-lucide="cpu" class="w-7 h-7"></i>
                            </div>
                            <div class="inline-block px-3 py-0.5 rounded-full bg-amber-100 text-amber-800 text-xs font-bold">
                                Abad 21 Skills
                            </div>
                            <h3 class="font-heading text-xl font-bold text-slate-900">Junior STEM & Coding Cilik</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Mengasah logika komputasi dan problem-solving sejak dini menggunakan Scratch visual programming, rakitan LEGO robotika, dan sains terapan.
                            </p>
                        </div>
                        <div class="pt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-semibold">
                            <span>Lab Komputer Cerdas</span>
                            <span class="text-amber-600">Praktik Mingguan</span>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card-3d-wrap">
                    <div class="card-3d bg-white rounded-3xl p-6 sm:p-8 shadow-xl border-2 border-emerald-100 hover:border-emerald-300 h-full flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-14 h-14 rounded-2xl bg-emerald-500 text-white flex items-center justify-center shadow-lg shadow-emerald-400/40">
                                <i data-lucide="book-open-check" class="w-7 h-7"></i>
                            </div>
                            <div class="inline-block px-3 py-0.5 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold">
                                Karakter Mulia
                            </div>
                            <h3 class="font-heading text-xl font-bold text-slate-900">Tahfidz Quran & Budi Pekerti</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Bimbingan tahsin metode cepat, hafalan Juz 30 dengan tartil merdu, serta penanaman adab sopan santun kepada orang tua dan sesama teman.
                            </p>
                        </div>
                        <div class="pt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-semibold">
                            <span>Target: Hafal Juz 30</span>
                            <span class="text-emerald-600">Wisuda Tahfidz</span>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="card-3d-wrap">
                    <div class="card-3d bg-white rounded-3xl p-6 sm:p-8 shadow-xl border-2 border-rose-100 hover:border-rose-300 h-full flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-14 h-14 rounded-2xl bg-rose-500 text-white flex items-center justify-center shadow-lg shadow-rose-400/40">
                                <i data-lucide="flask-conical" class="w-7 h-7"></i>
                            </div>
                            <div class="inline-block px-3 py-0.5 rounded-full bg-rose-100 text-rose-800 text-xs font-bold">
                                Eksplorasi Alam
                            </div>
                            <h3 class="font-heading text-xl font-bold text-slate-900">Little Scientist & Kebun Edukasi</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Percobaan sains sederhana yang seru dan aman, kegiatan menanam hidroponik, mengenal siklus alam, serta mencintai kelestarian bumi.
                            </p>
                        </div>
                        <div class="pt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-semibold">
                            <span>Outdoor Learning</span>
                            <span class="text-rose-600">Field Trip Rutin</span>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="card-3d-wrap">
                    <div class="card-3d bg-white rounded-3xl p-6 sm:p-8 shadow-xl border-2 border-purple-100 hover:border-purple-300 h-full flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-14 h-14 rounded-2xl bg-purple-500 text-white flex items-center justify-center shadow-lg shadow-purple-400/40">
                                <i data-lucide="music" class="w-7 h-7"></i>
                            </div>
                            <div class="inline-block px-3 py-0.5 rounded-full bg-purple-100 text-purple-800 text-xs font-bold">
                                Bakat & Seni
                            </div>
                            <h3 class="font-heading text-xl font-bold text-slate-900">Seni Kreatif, Musik & Tari</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Ruang ekspresi melukis, memainkan alat musik tradisional angklung & gamelan, keyboard anak, serta pentas drama untuk mengasah rasa percaya diri.
                            </p>
                        </div>
                        <div class="pt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-semibold">
                            <span>Pentas Seni Tahunan</span>
                            <span class="text-purple-600">Galeri Karya Anak</span>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="card-3d-wrap">
                    <div class="card-3d bg-white rounded-3xl p-6 sm:p-8 shadow-xl border-2 border-orange-100 hover:border-orange-300 h-full flex flex-col justify-between">
                        <div class="space-y-4">
                            <div class="w-14 h-14 rounded-2xl bg-orange-500 text-white flex items-center justify-center shadow-lg shadow-orange-400/40">
                                <i data-lucide="activity" class="w-7 h-7"></i>
                            </div>
                            <div class="inline-block px-3 py-0.5 rounded-full bg-orange-100 text-orange-800 text-xs font-bold">
                                Fisik & Mental Juara
                            </div>
                            <h3 class="font-heading text-xl font-bold text-slate-900">Kids Sports, Renang & Wellness</h3>
                            <p class="text-slate-600 text-sm leading-relaxed">
                                Bimbingan olahraga renang berkala dengan pelatih profesional, futsal cilik, taekwondo/silat, senam kebugaran, dan edukasi nutrisi sehat.
                            </p>
                        </div>
                        <div class="pt-6 border-t border-slate-100 flex items-center justify-between text-xs text-slate-500 font-semibold">
                            <span>Kolam Renang Mitra</span>
                            <span class="text-orange-600">Pelatih Bersertifikat</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= FASILITAS SEKOLAH INTERAKTIF ================= -->
    <section id="fasilitas" class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-10">
                <span class="px-3.5 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                    Lingkungan Aman & Nyaman
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-slate-900">
                    Jelajah Fasilitas Sekolah
                </h2>
                <p class="text-slate-600 text-base sm:text-lg">
                    Dirancang khusus dengan standar keamanan anak, sirkulasi udara optimal, dan teknologi pembelajaran interaktif.
                </p>
            </div>

            <!-- Filter Category Buttons -->
            <div class="flex flex-wrap items-center justify-center gap-2 sm:gap-3 mb-12">
                <button class="facility-tab-btn px-5 py-2 rounded-full font-heading text-xs sm:text-sm font-semibold bg-sky-500 text-white shadow-lg sound-click transition-all" data-category="all">
                    🌟 Semua Fasilitas
                </button>
                <button class="facility-tab-btn px-5 py-2 rounded-full font-heading text-xs sm:text-sm font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 sound-click transition-all" data-category="kelas">
                    🏫 Ruang Kelas Cerdas
                </button>
                <button class="facility-tab-btn px-5 py-2 rounded-full font-heading text-xs sm:text-sm font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 sound-click transition-all" data-category="lab">
                    💻 Lab & Perpustakaan
                </button>
                <button class="facility-tab-btn px-5 py-2 rounded-full font-heading text-xs sm:text-sm font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 sound-click transition-all" data-category="olahraga">
                    ⚽ Olahraga & Terbuka
                </button>
                <button class="facility-tab-btn px-5 py-2 rounded-full font-heading text-xs sm:text-sm font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-200 sound-click transition-all" data-category="kesehatan">
                    🍎 UKS & Kantin Sehat
                </button>
            </div>

            <!-- Facility Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Facility 1 -->
                <div class="facility-card group rounded-3xl overflow-hidden bg-white border border-slate-200/80 shadow-lg hover:shadow-2xl transition-all duration-300" data-category="kelas">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1580582932707-520aed937b7b?auto=format&fit=crop&w=800&q=80" alt="Ruang Kelas Smart Board" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <span class="absolute top-4 left-4 bg-sky-600/90 backdrop-blur-md text-white font-heading text-xs font-bold px-3 py-1 rounded-full shadow">
                            Ruang Kelas AC & Smart Board
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="font-heading text-lg font-bold text-slate-800">Ruang Belajar Interaktif 65"</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Dilengkapi Smart Board sentuh interaktif, pendingin udara higienis, dan tata meja fleksibel yang mendukung diskusi kelompok.
                        </p>
                        <div class="flex items-center gap-2 pt-3 text-xs text-slate-500 font-medium">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500"></i> Kapasitas maksimal 24 siswa/kelas
                        </div>
                    </div>
                </div>

                <!-- Facility 2 -->
                <div class="facility-card group rounded-3xl overflow-hidden bg-white border border-slate-200/80 shadow-lg hover:shadow-2xl transition-all duration-300" data-category="lab">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?auto=format&fit=crop&w=800&q=80" alt="Perpustakaan Cerita Anak" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <span class="absolute top-4 left-4 bg-amber-500/90 backdrop-blur-md text-white font-heading text-xs font-bold px-3 py-1 rounded-full shadow">
                            Perpustakaan Literasi Ceria
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="font-heading text-lg font-bold text-slate-800">Pojok Baca & Dongeng Digital</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Koleksi 5.000+ buku dongeng cerita bergambar, ensiklopedia sains anak, dan pojok santai berkarpet empuk.
                        </p>
                        <div class="flex items-center gap-2 pt-3 text-xs text-slate-500 font-medium">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500"></i> E-Book Reader & Audio Books
                        </div>
                    </div>
                </div>

                <!-- Facility 3 -->
                <div class="facility-card group rounded-3xl overflow-hidden bg-white border border-slate-200/80 shadow-lg hover:shadow-2xl transition-all duration-300" data-category="lab">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="Lab Komputer & Coding Cilik" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <span class="absolute top-4 left-4 bg-purple-600/90 backdrop-blur-md text-white font-heading text-xs font-bold px-3 py-1 rounded-full shadow">
                            Lab STEM & Robotika
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="font-heading text-lg font-bold text-slate-800">Komputer All-in-One Edukasi</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Dilengkapi perangkat komputer ergonomis khusus anak, proteksi filter internet sehat, dan kit robotika pemula.
                        </p>
                        <div class="flex items-center gap-2 pt-3 text-xs text-slate-500 font-medium">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500"></i> 1 Siswa 1 Perangkat Komputer
                        </div>
                    </div>
                </div>

                <!-- Facility 4 -->
                <div class="facility-card group rounded-3xl overflow-hidden bg-white border border-slate-200/80 shadow-lg hover:shadow-2xl transition-all duration-300" data-category="olahraga">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?auto=format&fit=crop&w=800&q=80" alt="Lapangan Olahraga" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <span class="absolute top-4 left-4 bg-emerald-600/90 backdrop-blur-md text-white font-heading text-xs font-bold px-3 py-1 rounded-full shadow">
                            Lapangan Serbaguna
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="font-heading text-lg font-bold text-slate-800">Lapangan Futsal & Basket Mini</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Lantai berperedam benturan dengan jaring pengaman, tiang basket yang dapat diatur ketinggiannya, dan area upacara ceria.
                        </p>
                        <div class="flex items-center gap-2 pt-3 text-xs text-slate-500 font-medium">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500"></i> Standar aman anak & terlindungi
                        </div>
                    </div>
                </div>

                <!-- Facility 5 -->
                <div class="facility-card group rounded-3xl overflow-hidden bg-white border border-slate-200/80 shadow-lg hover:shadow-2xl transition-all duration-300" data-category="kesehatan">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=800&q=80" alt="Klinik UKS Ramah Anak" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <span class="absolute top-4 left-4 bg-rose-500/90 backdrop-blur-md text-white font-heading text-xs font-bold px-3 py-1 rounded-full shadow">
                            Klinik UKS Siaga
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="font-heading text-lg font-bold text-slate-800">Layanan Kesehatan & Konseling</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Didampingi perawat bersertifikasi, pemeriksaan gigi dan tumbuh kembang berkala bersama dokter puskesmas mitra.
                        </p>
                        <div class="flex items-center gap-2 pt-3 text-xs text-slate-500 font-medium">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500"></i> Tempat istirahat nyaman & obat P3K
                        </div>
                    </div>
                </div>

                <!-- Facility 6 -->
                <div class="facility-card group rounded-3xl overflow-hidden bg-white border border-slate-200/80 shadow-lg hover:shadow-2xl transition-all duration-300" data-category="kesehatan">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555244162-803834f70033?auto=format&fit=crop&w=800&q=80" alt="Kantin Sehat" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                        <span class="absolute top-4 left-4 bg-teal-600/90 backdrop-blur-md text-white font-heading text-xs font-bold px-3 py-1 rounded-full shadow">
                            Kantin Sehat Higienis
                        </span>
                    </div>
                    <div class="p-6 space-y-2">
                        <h3 class="font-heading text-lg font-bold text-slate-800">Kantin Halal & Bebas Pengawet</h3>
                        <p class="text-slate-600 text-xs sm:text-sm leading-relaxed">
                            Menyajikan menu bergizi seimbang tanpa MSG dan pemanis buatan, diawasi oleh ahli gizi sekolah secara rutin.
                        </p>
                        <div class="flex items-center gap-2 pt-3 text-xs text-slate-500 font-medium">
                            <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-500"></i> Sertifikat Higienitas Dinkes
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= GURU & PENDIDIK RAMAH ================= -->
    <section id="guru" class="py-16 sm:py-24 bg-gradient-to-b from-amber-50/40 to-sky-50/50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
                <span class="px-3.5 py-1 rounded-full bg-amber-200/80 text-amber-900 text-xs font-bold uppercase tracking-wider">
                    Pendidik Berhati Emas
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-slate-900">
                    Guru & Pengajar Inspiratif
                </h2>
                <p class="text-slate-600 text-base sm:text-lg">
                    Guru-guru bersertifikasi pendidik yang terlatih dalam psikologi anak usia dini, penuh kesabaran, dan komunikatif dengan orang tua.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-8">
                
                <!-- Guru 1 -->
                <div class="bg-white rounded-3xl p-6 text-center shadow-lg border border-slate-200/80 hover:-translate-y-2 transition duration-300">
                    <div class="w-28 h-28 mx-auto rounded-full p-1.5 bg-gradient-to-tr from-sky-400 to-indigo-500 mb-4 shadow-md">
                        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?auto=format&fit=crop&w=400&q=80" alt="Ibu Sarah" class="w-full h-full object-cover rounded-full">
                    </div>
                    <h3 class="font-heading text-lg font-bold text-slate-800">Sarah Anggraini, S.Pd.</h3>
                    <p class="text-xs font-semibold text-sky-600 mb-2">Guru Kelas 1 & Bilingual Specialist</p>
                    <p class="text-xs text-slate-500 italic">"Belajar adalah petualangan seru yang selalu dinantikan setiap pagi."</p>
                </div>

                <!-- Guru 2 -->
                <div class="bg-white rounded-3xl p-6 text-center shadow-lg border border-slate-200/80 hover:-translate-y-2 transition duration-300 group">
                    <div class="w-28 h-28 mx-auto rounded-full p-1.5 bg-gradient-to-tr from-amber-400 to-orange-500 mb-4 shadow-md overflow-hidden">
                        <img src="{{ asset('profil2.jpg') }}" onerror="this.onerror=null; this.src='{{ asset('images/profil2.jpg') }}'; this.onerror=function(){this.src='https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&w=400&q=80'};" alt="Rully Panji Mustiko Pamungkas" class="w-full h-full object-cover object-center filter saturate-110 group-hover:scale-110 transition-transform duration-700 rounded-full">
                    </div>
                    <h3 class="font-heading text-lg font-bold text-slate-800">Rully Panji Mustiko Pamungkas</h3>
                    <p class="text-xs font-semibold text-amber-600 mb-2">Pengajar STEM & Robotika Cilik</p>
                    <p class="text-xs text-slate-500 italic">"Membuka imajinasi anak untuk menjadi pencipta teknologi masa depan."</p>
                </div>

                <!-- Guru 3 -->
                <div class="bg-white rounded-3xl p-6 text-center shadow-lg border border-slate-200/80 hover:-translate-y-2 transition duration-300">
                    <div class="w-28 h-28 mx-auto rounded-full p-1.5 bg-gradient-to-tr from-emerald-400 to-teal-500 mb-4 shadow-md">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?auto=format&fit=crop&w=400&q=80" alt="Ustadzah Fatimah" class="w-full h-full object-cover rounded-full">
                    </div>
                    <h3 class="font-heading text-lg font-bold text-slate-800">Usth. Fatimah Az-Zahra, S.Ag.</h3>
                    <p class="text-xs font-semibold text-emerald-600 mb-2">Pembina Tahfidz & Karakter Adab</p>
                    <p class="text-xs text-slate-500 italic">"Menanamkan akhlak mulia dan cinta Quran sejak usia dini dengan kelembutan."</p>
                </div>

                <!-- Guru 4 -->
                <div class="bg-white rounded-3xl p-6 text-center shadow-lg border border-slate-200/80 hover:-translate-y-2 transition duration-300">
                    <div class="w-28 h-28 mx-auto rounded-full p-1.5 bg-gradient-to-tr from-purple-400 to-rose-500 mb-4 shadow-md">
                        <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=400&q=80" alt="Ibu Maya" class="w-full h-full object-cover rounded-full">
                    </div>
                    <h3 class="font-heading text-lg font-bold text-slate-800">Maya Indrawati, S.Sn.</h3>
                    <p class="text-xs font-semibold text-purple-600 mb-2">Guru Seni Rupa & Musik Kreatif</p>
                    <p class="text-xs text-slate-500 italic">"Warna dan melodi membantu anak mengekspresikan perasaannya dengan percaya diri."</p>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= PRESTASI & GALERI SISWA ================= -->
    <section id="prestasi" class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
                <span class="px-3.5 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold uppercase tracking-wider">
                    Bintang Berprestasi
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-slate-900">
                    Piala & Prestasi Juara Siswa
                </h2>
                <p class="text-slate-600 text-base sm:text-lg">
                    Apresiasi tinggi bagi setiap bakat unik anak, baik di bidang sains, olahraga, seni budaya, maupun keagamaan.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                
                <div class="bg-gradient-to-br from-amber-50 to-orange-50 p-6 rounded-3xl border-2 border-amber-200 shadow-md">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-3xl">🥇</span>
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-wide text-amber-700 bg-amber-200/70 px-2 py-0.5 rounded-md">Tingkat Nasional</span>
                            <h3 class="font-heading text-lg font-bold text-slate-900">Juara 1 Olimpiade Sains Cilik</h3>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Diraih oleh Ananda Rizky Aditya (Kelas 5) dalam kompetisi eksperimen sains dan matematika dasar tingkat nasional 2025.
                    </p>
                    <div class="text-xs text-slate-500 font-semibold flex items-center gap-1.5">
                        <i data-lucide="calendar" class="w-3.5 h-3.5 text-amber-500"></i> November 2025
                    </div>
                </div>

                <div class="bg-gradient-to-br from-sky-50 to-blue-50 p-6 rounded-3xl border-2 border-sky-200 shadow-md">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-3xl">🏆</span>
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-wide text-sky-700 bg-sky-200/70 px-2 py-0.5 rounded-md">Tingkat Provinsi</span>
                            <h3 class="font-heading text-lg font-bold text-slate-900">Best Innovation Robotika Junior</h3>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Tim Robotika Cilik SD Negeri 1 Suka Cita Purwokerto berhasil memprogram robot pembersih sampah otomatis ramah lingkungan.
                    </p>
                    <div class="text-xs text-slate-500 font-semibold flex items-center gap-1.5">
                        <i data-lucide="calendar" class="w-3.5 h-3.5 text-sky-500"></i> Januari 2026
                    </div>
                </div>

                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 p-6 rounded-3xl border-2 border-emerald-200 shadow-md">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-3xl">🌟</span>
                        <div>
                            <span class="text-[11px] font-bold uppercase tracking-wide text-emerald-700 bg-emerald-200/70 px-2 py-0.5 rounded-md">Tingkat Kota</span>
                            <h3 class="font-heading text-lg font-bold text-slate-900">Juara 1 MHQ (Musabaqah Hifzhil Quran)</h3>
                        </div>
                    </div>
                    <p class="text-slate-600 text-sm leading-relaxed mb-4">
                        Diraih oleh Ananda Aisyah Humaira (Kelas 3) dengan hafalan Juz 30 tartil terbaik dan makhraj fasih.
                    </p>
                    <div class="text-xs text-slate-500 font-semibold flex items-center gap-1.5">
                        <i data-lucide="calendar" class="w-3.5 h-3.5 text-emerald-500"></i> Februari 2026
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= PPDB ONLINE REGISTRATION SECTION ================= -->
    <section id="ppdb" class="py-16 sm:py-24 bg-gradient-to-b from-sky-50/70 via-white to-amber-50/50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
                <span class="px-4 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold uppercase tracking-wider">
                    Penerimaan Siswa Baru
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-slate-900">
                    Pendaftaran PPDB Online 2026/2027
                </h2>
                <p class="text-slate-600 text-base sm:text-lg">
                    Daftarkan putra-putri Ayah dan Bunda dengan 4 langkah mudah tanpa antrean panjang.
                </p>
            </div>

            <!-- PPDB 4 Steps Roadmap -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-12">
                <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm relative text-center">
                    <span class="w-9 h-9 rounded-full bg-sky-500 text-white font-heading font-bold text-sm flex items-center justify-center mx-auto mb-2">1</span>
                    <h3 class="font-heading font-bold text-slate-800 text-sm">Isi Formulir Online</h3>
                    <p class="text-xs text-slate-500 mt-1">Lengkapi data diri calon siswa dan orang tua pada formulir di bawah.</p>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm relative text-center">
                    <span class="w-9 h-9 rounded-full bg-amber-500 text-white font-heading font-bold text-sm flex items-center justify-center mx-auto mb-2">2</span>
                    <h3 class="font-heading font-bold text-slate-800 text-sm">Observasi Ceria</h3>
                    <p class="text-xs text-slate-500 mt-1">Sesi interaktif bermain ramah anak untuk mengenal bakat & kesiapan.</p>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm relative text-center">
                    <span class="w-9 h-9 rounded-full bg-emerald-500 text-white font-heading font-bold text-sm flex items-center justify-center mx-auto mb-2">3</span>
                    <h3 class="font-heading font-bold text-slate-800 text-sm">Pengumuman & Daftar Ulang</h3>
                    <p class="text-xs text-slate-500 mt-1">Hasil disampaikan via WhatsApp & konfirmasi administrasi mudah.</p>
                </div>

                <div class="p-5 rounded-2xl bg-white border border-slate-200 shadow-sm relative text-center">
                    <span class="w-9 h-9 rounded-full bg-purple-500 text-white font-heading font-bold text-sm flex items-center justify-center mx-auto mb-2">4</span>
                    <h3 class="font-heading font-bold text-slate-800 text-sm">MPLS Ramah Anak</h3>
                    <p class="text-xs text-slate-500 mt-1">Hari pertama masuk sekolah yang menyenangkan bersama teman baru!</p>
                </div>
            </div>

            <!-- Multi-step Feature & Document Information Card -->
            <div class="max-w-4xl mx-auto glass-card rounded-3xl p-6 sm:p-10 shadow-2xl border-2 border-white relative overflow-hidden">
                <div class="absolute -right-16 -bottom-16 w-64 h-64 bg-amber-200/40 rounded-full blur-2xl pointer-events-none"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">
                    
                    <div class="lg:col-span-7 space-y-5 text-center lg:text-left">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold">
                            <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
                            <span>Pendaftaran Resmi Online</span>
                        </div>

                        <h3 class="text-2xl sm:text-3xl font-heading font-extrabold text-slate-900 leading-snug">
                            Siapkan Masa Depan Terbaik Buah Hati Bersama Kami
                        </h3>

                        <p class="text-slate-600 text-sm leading-relaxed">
                            Pendaftaran dilakukan secara bertahap dan transparan. Ayah & Bunda dapat mengisi data anak, orang tua, mengunggah dokumen persyaratan, dan langsung mencetak kartu bukti registrasi.
                        </p>

                        <!-- Document checklist preview -->
                        <div class="space-y-2 pt-1 text-xs sm:text-sm text-slate-700">
                            <p class="font-bold text-slate-800 text-xs uppercase tracking-wider">Berkas yang Perlu Disiapkan:</p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-2">
                                <div class="flex items-center gap-2">
                                    <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500 shrink-0"></i>
                                    <span>Pas Foto Berwarna 3x4</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500 shrink-0"></i>
                                    <span>Scan / Foto Akta Kelahiran</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500 shrink-0"></i>
                                    <span>Scan / Foto Kartu Keluarga (KK)</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i data-lucide="check-circle" class="w-4 h-4 text-emerald-500 shrink-0"></i>
                                    <span>Surat Ket. TK / Piagam (Opsional)</span>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="pt-4 flex flex-col sm:flex-row items-center gap-3 justify-center lg:justify-start">
                            <a href="{{ url('/pendaftaran') }}" class="sound-click w-full sm:w-auto inline-flex items-center justify-center gap-2.5 bg-gradient-to-r from-sky-500 via-blue-600 to-indigo-600 hover:from-sky-600 hover:to-indigo-700 text-white font-heading font-bold text-sm sm:text-base px-8 py-4 rounded-2xl shadow-xl shadow-sky-500/30 hover:shadow-2xl hover:shadow-sky-500/50 hover:-translate-y-1 transition-all">
                                <i data-lucide="user-plus" class="w-5 h-5"></i>
                                <span>Mulai Formulir Pendaftaran Bertahap</span>
                                <i data-lucide="arrow-right" class="w-4 h-4"></i>
                            </a>
                            <a href="https://wa.me/6281234567890?text=Halo%20Admin%20PPDB%20SD%20Bintang%20Ceria,%20saya%20ingin%20konsultasi%20pendaftaran" target="_blank" class="sound-click w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-emerald-100 hover:bg-emerald-200 text-emerald-800 font-heading font-semibold text-sm px-5 py-4 rounded-2xl transition">
                                <i data-lucide="message-circle" class="w-4 h-4 text-emerald-600"></i>
                                <span>Konsultasi WhatsApp</span>
                            </a>
                        </div>
                    </div>

                    <!-- Right Illustration Card -->
                    <div class="lg:col-span-5 flex justify-center">
                        <div class="bg-gradient-to-br from-amber-100/80 via-orange-50 to-sky-100/80 p-6 rounded-3xl border-2 border-white shadow-lg text-center space-y-4 w-full max-w-sm">
                            <div class="w-16 h-16 mx-auto rounded-2xl bg-amber-400 text-slate-900 flex items-center justify-center shadow-md">
                                <i data-lucide="award" class="w-8 h-8 text-white"></i>
                            </div>
                            <div>
                                <h4 class="font-heading font-bold text-slate-900 text-lg">Gelombang 1 Dibuka</h4>
                                <p class="text-xs text-slate-600 mt-1">Kuota terbatas 4 rombongan belajar (maks. 24 siswa/kelas).</p>
                            </div>
                            <div class="p-3 bg-white/90 rounded-2xl border border-amber-200 text-xs text-slate-700 space-y-1 text-left">
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-500">Biaya Formulir:</span>
                                    <span class="font-bold text-emerald-600">Diskon 25%</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-500">Jadwal Observasi:</span>
                                    <span class="font-bold text-slate-800">Setiap Hari Sabtu</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-slate-500">Layanan Hotline:</span>
                                    <span class="font-bold text-sky-700">(021) 8899-2345</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>


    <!-- ================= TESTIMONI ORANG TUA ================= -->
    <section class="py-16 sm:py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            
            <div class="text-center max-w-3xl mx-auto space-y-3 mb-14">
                <span class="px-3.5 py-1 rounded-full bg-rose-100 text-rose-800 text-xs font-bold uppercase tracking-wider">
                    Kisah Hangat
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-heading font-extrabold text-slate-900">
                    Kata Ayah & Bunda
                </h2>
                <p class="text-slate-600 text-base sm:text-lg">
                    Kepercayaan keluarga adalah amanah terbesar bagi kami dalam membimbing tumbuh kembang anak.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                
                <!-- Testi 1 -->
                <div class="p-6 sm:p-8 rounded-3xl bg-slate-50 border border-slate-200/80 shadow-sm hover:shadow-md transition">
                    <div class="flex text-amber-400 gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                    </div>
                    <p class="text-slate-700 text-sm leading-relaxed italic mb-6">
                        "Anak saya dulu pemalu sekali, tapi sejak sekolah di SD Negeri 1 Suka Cita Purwokerto ia jadi sangat berani bercerita di depan banyak orang. Gurunya sangat sabar dan penuh perhatian!"
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-sky-200 text-sky-800 flex items-center justify-center font-bold">
                            BW
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-slate-800 text-sm">Bunda Wahyuni</h3>
                            <p class="text-xs text-slate-500">Orang Tua Ananda Faris (Kelas 2)</p>
                        </div>
                    </div>
                </div>

                <!-- Testi 2 -->
                <div class="p-6 sm:p-8 rounded-3xl bg-slate-50 border border-slate-200/80 shadow-sm hover:shadow-md transition">
                    <div class="flex text-amber-400 gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                    </div>
                    <p class="text-slate-700 text-sm leading-relaxed italic mb-6">
                        "Program robotika dan sains alamnya luar biasa! Anak tidak hanya asyik main gawai, tapi justru mengerti cara kerja teknologi dan mencintai tanaman di rumah."
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-amber-200 text-amber-800 flex items-center justify-center font-bold">
                            AP
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-slate-800 text-sm">Ayah Pratama</h3>
                            <p class="text-xs text-slate-500">Orang Tua Ananda Kenzo (Kelas 4)</p>
                        </div>
                    </div>
                </div>

                <!-- Testi 3 -->
                <div class="p-6 sm:p-8 rounded-3xl bg-slate-50 border border-slate-200/80 shadow-sm hover:shadow-md transition">
                    <div class="flex text-amber-400 gap-1 mb-4">
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                        <i data-lucide="star" class="w-5 h-5 fill-amber-400"></i>
                    </div>
                    <p class="text-slate-700 text-sm leading-relaxed italic mb-6">
                        "Alhamdulillah hafalan surat pendek anak saya meningkat pesat tanpa terpaksa, karena ustadzahnya membimbing dengan riang gembira. Sangat kami rekomendasikan!"
                    </p>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-emerald-200 text-emerald-800 flex items-center justify-center font-bold">
                            DL
                        </div>
                        <div>
                            <h3 class="font-heading font-bold text-slate-800 text-sm">Bunda Dian Lestari</h3>
                            <p class="text-xs text-slate-500">Orang Tua Ananda Zahra (Kelas 3)</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= FAQ SECTION (AKORDEON) ================= -->
    <section id="faq" class="py-16 sm:py-24 bg-sky-50/40">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            
            <div class="text-center space-y-3 mb-12">
                <span class="px-3.5 py-1 rounded-full bg-sky-200/80 text-sky-900 text-xs font-bold uppercase tracking-wider">
                    Informasi Lengkap
                </span>
                <h2 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                    Pertanyaan Sering Diajukan (FAQ)
                </h2>
                <p class="text-slate-600 text-base">
                    Jawaban cepat untuk pertanyaan yang sering ditanyakan oleh calon wali murid.
                </p>
            </div>

            <div class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="faq-item bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <button class="faq-btn w-full p-5 text-left font-heading font-bold text-slate-800 flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50 transition">
                        <span class="text-base">Berapa batas usia minimal untuk mendaftar di kelas 1 SD Negeri 1 Suka Cita Purwokerto?</span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-sky-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-3">
                        Sesuai regulasi Kemendikbudristek, usia minimal calon peserta didik kelas 1 SD adalah 6 tahun pada 1 Juli 2026. Bagi anak berusia minimal 5 tahun 6 bulan yang memiliki kesiapan psikis dan kemandirian, dapat melampirkan rekomendasi dari psikolog profesional.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="faq-item bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <button class="faq-btn w-full p-5 text-left font-heading font-bold text-slate-800 flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50 transition">
                        <span class="text-base">Bagaimana jam belajar mengajar di sekolah?</span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-sky-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-3">
                        Untuk Kelas 1 dan 2, kegiatan belajar berlangsung dari pukul 07.30 hingga 12.30 WIB (Senin - Kamis), dan pukul 07.30 - 11.00 WIB di hari Jumat. Untuk Kelas 3 hingga 6 berlangsung hingga pukul 14.15 WIB, dilanjutkan dengan ekstrakurikuler opsional.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="faq-item bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <button class="faq-btn w-full p-5 text-left font-heading font-bold text-slate-800 flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50 transition">
                        <span class="text-base">Apakah disediakan layanan antar-jemput dan katering makan siang?</span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-sky-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-3">
                        Ya, kami bermitra dengan armada antar-jemput resmi ber-AC yang dilengkapi pelacak GPS serta pendamping guru. Kami juga menyediakan katering makan siang higienis yang disupervisi oleh ahli gizi sekolah dengan menu variatif setiap minggunya.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="faq-item bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden">
                    <button class="faq-btn w-full p-5 text-left font-heading font-bold text-slate-800 flex items-center justify-between gap-4 cursor-pointer hover:bg-slate-50 transition">
                        <span class="text-base">Apakah ada beasiswa atau potongan biaya bagi siswa berprestasi?</span>
                        <i data-lucide="chevron-down" class="faq-icon w-5 h-5 text-sky-600 transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-slate-600 text-sm leading-relaxed border-t border-slate-100 pt-3">
                        Tersedia Beasiswa Bintang Prestasi untuk juara perlombaan tingkat kota/provinsi, Beasiswa Tahfidz Quran bagi calon siswa yang telah hafal minimal 1 Juz Al-Quran, serta potongan khusus bagi pendaftar yang memiliki saudara kandung aktif di SD Negeri 1 Suka Cita Purwokerto.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= KONTAK & PETA LOKASI ================= -->
    <section id="kontak" class="py-16 sm:py-20 bg-white border-t border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                
                <div class="lg:col-span-6 space-y-6">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold">
                        <i data-lucide="map-pin" class="w-3.5 h-3.5"></i> Kunjungi Kami
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                        Lokasi Strategis & Ramah Lingkungan
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed">
                        Kampus SD Negeri 1 Suka Cita Purwokerto berlokasi di kawasan hijau yang tenang, jauh dari kebisingan jalan raya utama, dengan area drop-off kendaraan yang aman bagi anak-anak.
                    </p>

                    <div class="space-y-3 text-sm text-slate-700">
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-sky-100 text-sky-600 flex items-center justify-center shrink-0 mt-0.5">
                                <i data-lucide="map-pin" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <strong class="block text-slate-900">Alamat Kampus:</strong>
                                Jl. Pendidikan No. 1, Purwokerto, Banyumas, Jawa Tengah 53111
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0 mt-0.5">
                                <i data-lucide="clock" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <strong class="block text-slate-900">Jam Layanan Tata Usaha & PPDB:</strong>
                                Senin - Jumat: 07.30 - 15.30 WIB | Sabtu: 08.00 - 12.00 WIB
                            </div>
                        </div>

                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-lg bg-amber-100 text-amber-600 flex items-center justify-center shrink-0 mt-0.5">
                                <i data-lucide="mail" class="w-4 h-4"></i>
                            </div>
                            <div>
                                <strong class="block text-slate-900">Email & Media Sosial:</strong>
                                info@sdn1sukacitapwt.sch.id | Instagram: @sdn1sukacitapwt
                            </div>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="https://wa.me/6281234567890?text=Halo%20Admin%20SD%20Negeri%201%20Suka%20Cita%20Purwokerto,%20saya%20ingin%20jadwal%20tur%20sekolah" target="_blank" class="sound-click inline-flex items-center gap-2 px-6 py-3 rounded-xl bg-emerald-500 hover:bg-emerald-600 text-white font-heading font-semibold text-sm shadow-md transition">
                            <i data-lucide="message-circle" class="w-4 h-4"></i>
                            <span>Chat WhatsApp Tata Usaha</span>
                        </a>
                    </div>
                </div>

                <!-- Google Maps Interactive Placeholder -->
                <div class="lg:col-span-6">
                    <div class="rounded-3xl overflow-hidden shadow-xl border-4 border-amber-100 h-80 sm:h-96 relative bg-slate-100">
                        <iframe 
                            title="Lokasi Sekolah"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126915.20140228373!2d106.758999!3d-6.2297465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e49fe3ddb3%3A0x73d578cf2338a0f5!2sJakarta%20Selatan!5e0!3m2!1sid!2sid!4v1689000000000!5m2!1sid!2sid" 
                            width="100%" 
                            height="100%" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= FOOTER CERIA ================= -->
    <footer class="bg-slate-900 text-slate-300 pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8 pb-12 border-b border-slate-800">
                
                <!-- Col 1: Brand -->
                <div class="lg:col-span-2 space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-xl bg-amber-400 text-slate-900 flex items-center justify-center">
                            <i data-lucide="graduation-cap" class="w-6 h-6"></i>
                        </div>
                        <span class="font-heading text-2xl font-bold text-white tracking-tight">SD Negeri 1 Suka Cita Purwokerto</span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed max-w-sm">
                        Membimbing anak dengan kasih sayang, menumbuhkan kecintaan pada ilmu pengetahuan, serta membentuk generasi berakhlak mulia dan berwawasan global.
                    </p>
                    <div class="flex items-center gap-3 pt-2">
                        <span class="px-3 py-1 rounded-full bg-slate-800 text-amber-400 text-xs font-semibold border border-slate-700">
                            🏆 Akreditasi A Unggul
                        </span>
                        <span class="px-3 py-1 rounded-full bg-slate-800 text-sky-400 text-xs font-semibold border border-slate-700">
                            NPSN: 20109988
                        </span>
                    </div>
                </div>

                <!-- Col 2: Navigasi -->
                <div>
                    <h4 class="font-heading text-white font-bold text-sm mb-4 uppercase tracking-wider">Jelajah</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="#beranda" class="hover:text-amber-400 transition">Beranda</a></li>
                        <li><a href="#sambutan" class="hover:text-amber-400 transition">Sambutan Kepala Sekolah</a></li>
                        <li><a href="#program" class="hover:text-amber-400 transition">Program Unggulan</a></li>
                        <li><a href="#fasilitas" class="hover:text-amber-400 transition">Fasilitas Sekolah</a></li>
                        <li><a href="#guru" class="hover:text-amber-400 transition">Guru & Staf</a></li>
                    </ul>
                </div>

                <!-- Col 3: PPDB & Layanan -->
                <div>
                    <h4 class="font-heading text-white font-bold text-sm mb-4 uppercase tracking-wider">Layanan Siswa</h4>
                    <ul class="space-y-2 text-sm text-slate-400">
                        <li><a href="#ppdb" class="hover:text-amber-400 transition">Pendaftaran PPDB Online</a></li>
                        <li><a href="#ppdb" class="hover:text-amber-400 transition">Jalur Beasiswa Tahfidz</a></li>
                        <li><a href="#prestasi" class="hover:text-amber-400 transition">Galeri Prestasi</a></li>
                        <li><a href="#faq" class="hover:text-amber-400 transition">Tanya Jawab (FAQ)</a></li>
                        <li><a href="#kontak" class="hover:text-amber-400 transition">Jadwal Tur Kampus</a></li>
                    </ul>
                </div>

                <!-- Col 4: Hubungi Kami -->
                <div>
                    <h4 class="font-heading text-white font-bold text-sm mb-4 uppercase tracking-wider">Kontak Cepat</h4>
                    <ul class="space-y-2.5 text-xs text-slate-400">
                        <li class="flex items-center gap-2">
                            <i data-lucide="phone" class="w-4 h-4 text-emerald-400"></i> (0281) 632145
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="message-square" class="w-4 h-4 text-emerald-400"></i> WhatsApp: 0812-3456-7890
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="mail" class="w-4 h-4 text-sky-400"></i> info@sdn1sukacitapwt.sch.id
                        </li>
                        <li class="flex items-center gap-2">
                            <i data-lucide="map-pin" class="w-4 h-4 text-amber-400"></i> Purwokerto, Jawa Tengah, Indonesia
                        </li>
                    </ul>
                </div>

            </div>

            <!-- Copyright -->
            <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500 text-center sm:text-left">
                <p>&copy; {{ date('Y') }} SD Negeri 1 Suka Cita Purwokerto. Seluruh hak cipta dilindungi undang-undang.</p>
                <div class="flex items-center gap-4 justify-center">
                    <a href="{{ route('admin.login') }}" class="text-slate-500 hover:text-amber-400 transition flex items-center gap-1">
                        <i data-lucide="lock" class="w-3.5 h-3.5"></i>
                        <span>Portal Admin PPDB</span>
                    </a>
                    <span class="text-slate-600">•</span>
                    <p class="flex items-center gap-1 justify-center">
                        Dibuat dengan cinta untuk anak-anak Indonesia <span class="text-rose-500">❤️</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- ================= FLOATING WHATSAPP BUTTON ================= -->
    <a href="https://wa.me/6281234567890?text=Halo%20Admin%20SD%20Negeri%201%20Suka%20Cita%20Purwokerto,%20saya%20ingin%20bertanya%20mengenai%20pendaftaran%20PPDB" target="_blank" class="sound-click fixed bottom-6 right-6 z-40 w-14 h-14 rounded-full bg-emerald-500 hover:bg-emerald-600 text-white flex items-center justify-center shadow-2xl hover:scale-110 transition duration-300 animate-bounce" title="Hubungi Kami via WhatsApp" aria-label="WhatsApp Hotline">
        <i data-lucide="message-circle" class="w-7 h-7"></i>
    </a>

</body>
</html>
