<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulir Pendaftaran Siswa Baru (PPDB) - SD Negeri 1 Suka Cita Purwokerto</title>

    <meta name="description" content="Pendaftaran Peserta Didik Baru (PPDB) Online SD Negeri 1 Suka Cita Purwokerto Tahun Ajaran 2026/2027. Proses mudah, bertahap, dan transparan.">
    <link rel="icon" type="image/svg+xml" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23f59e0b'><path d='M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z'/></svg>">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;500;600;700&family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @media print {
            body * {
                visibility: hidden;
            }
            #printable-registration-card, #printable-registration-card * {
                visibility: visible;
            }
            #printable-registration-card {
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0;
                padding: 20px;
                box-shadow: none;
                border: 2px solid #000;
            }
            .no-print {
                display: none !important;
            }
        }
    </style>
</head>
<body class="bg-amber-50/40 text-slate-800 font-sans antialiased min-h-screen flex flex-col selection:bg-sky-500 selection:text-white">

    <!-- ================= NAVBAR PENDAFTARAN ================= -->
    <header class="bg-white/90 backdrop-blur-md border-b border-amber-200/70 sticky top-0 z-40 px-4 sm:px-6 py-3.5 shadow-sm no-print">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <!-- Brand Link back to home -->
            <a href="{{ url('/') }}" class="flex items-center gap-2.5 sm:gap-3 group sound-click shrink-0 min-w-0">
                <div class="w-10 h-10 rounded-2xl bg-gradient-to-br from-amber-400 via-orange-400 to-rose-400 flex items-center justify-center text-white shadow-md shadow-orange-300/40 group-hover:scale-105 transition-transform shrink-0">
                    <i data-lucide="graduation-cap" class="w-5 h-5 sm:w-6 sm:h-6"></i>
                </div>
                <div class="min-w-0">
                    <div class="flex items-center gap-1.5">
                        <span class="font-heading text-sm sm:text-base lg:text-lg font-bold text-sky-700 tracking-tight leading-none whitespace-nowrap block sm:hidden">
                            SDN 1 Suka Cita
                        </span>
                        <span class="font-heading text-sm sm:text-base lg:text-lg font-bold text-sky-700 tracking-tight leading-none whitespace-nowrap hidden sm:block">
                            SD Negeri 1 Suka Cita Purwokerto
                        </span>
                        <span class="text-amber-500 text-xs sm:text-sm">✨</span>
                    </div>
                    <p class="text-[10px] sm:text-[11px] font-medium text-slate-500 leading-none mt-1 hidden sm:block">Portal Resmi PPDB Online 2026/2027</p>
                    <p class="text-[10px] font-medium text-slate-500 leading-none mt-1 block sm:hidden">PPDB Online 2026/2027</p>
                </div>
            </a>

            <!-- Right Buttons -->
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.login') }}" class="sound-click hidden sm:inline-flex items-center gap-1.5 text-xs font-semibold text-slate-500 hover:text-sky-600 px-3 py-2 rounded-xl hover:bg-slate-100 transition">
                    <i data-lucide="lock" class="w-3.5 h-3.5"></i>
                    <span>Portal Admin</span>
                </a>
                <a href="{{ url('/') }}" class="sound-click inline-flex items-center gap-2 text-xs sm:text-sm font-semibold text-slate-600 hover:text-sky-600 px-3.5 py-2 rounded-xl hover:bg-slate-100 transition">
                    <i data-lucide="arrow-left" class="w-4 h-4"></i>
                    <span>Kembali ke Beranda</span>
                </a>
                <a href="https://wa.me/6281234567890?text=Halo%20Admin%20PPDB%20SD%20Negeri%201%20Suka%20Cita%20Purwokerto,%20saya%20butuh%20bantuan%20pengisian%20formulir" target="_blank" class="sound-click inline-flex items-center gap-1.5 text-xs sm:text-sm font-semibold text-emerald-700 bg-emerald-100 hover:bg-emerald-200 px-3.5 py-2 rounded-xl transition">
                    <i data-lucide="help-circle" class="w-4 h-4 text-emerald-600"></i>
                    <span class="hidden sm:inline">Bantuan PPDB</span>
                </a>
            </div>
        </div>
    </header>

    <!-- ================= MAIN WIZARD CONTAINER ================= -->
    <main class="flex-grow py-8 sm:py-12 px-4 sm:px-6">
        <div class="max-w-4xl mx-auto">

            <!-- Title & Badge -->
            <div class="text-center space-y-2 mb-8 no-print">
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-amber-100 text-amber-900 text-xs font-bold shadow-sm">
                    <i data-lucide="sparkles" class="w-3.5 h-3.5 text-amber-500"></i>
                    <span>Tahun Ajaran 2026/2027 • Gelombang 1</span>
                </div>
                <h1 class="text-3xl sm:text-4xl font-heading font-extrabold text-slate-900">
                    Formulir Pendaftaran Siswa Baru
                </h1>
                <p class="text-slate-600 text-sm sm:text-base max-w-xl mx-auto">
                    Mohon lengkapi 4 tahapan formulir di bawah ini dengan data yang valid dan berkas asli.
                </p>
            </div>

            <!-- ================= STEPPER PROGRESS BAR ================= -->
            <div class="bg-white rounded-3xl p-4 sm:p-6 shadow-xl border-2 border-amber-100 mb-8 no-print">
                <div class="grid grid-cols-4 gap-2 sm:gap-4 relative">
                    
                    <!-- Step 1 Indicator -->
                    <div id="step-indicator-1" class="step-indicator text-center relative z-10 transition-all">
                        <div class="step-circle w-10 h-10 sm:w-12 sm:h-12 mx-auto rounded-2xl bg-sky-500 text-white font-heading font-bold text-sm sm:text-base flex items-center justify-center shadow-md shadow-sky-400/40 transition-all duration-300">
                            <span>1</span>
                        </div>
                        <p class="step-label font-heading text-[11px] sm:text-xs font-bold text-sky-700 mt-2 truncate">
                            Data Siswa
                        </p>
                    </div>

                    <!-- Step 2 Indicator -->
                    <div id="step-indicator-2" class="step-indicator text-center relative z-10 transition-all">
                        <div class="step-circle w-10 h-10 sm:w-12 sm:h-12 mx-auto rounded-2xl bg-slate-100 text-slate-500 font-heading font-bold text-sm sm:text-base flex items-center justify-center border border-slate-200 transition-all duration-300">
                            <span>2</span>
                        </div>
                        <p class="step-label font-heading text-[11px] sm:text-xs font-semibold text-slate-500 mt-2 truncate">
                            Orang Tua
                        </p>
                    </div>

                    <!-- Step 3 Indicator -->
                    <div id="step-indicator-3" class="step-indicator text-center relative z-10 transition-all">
                        <div class="step-circle w-10 h-10 sm:w-12 sm:h-12 mx-auto rounded-2xl bg-slate-100 text-slate-500 font-heading font-bold text-sm sm:text-base flex items-center justify-center border border-slate-200 transition-all duration-300">
                            <span>3</span>
                        </div>
                        <p class="step-label font-heading text-[11px] sm:text-xs font-semibold text-slate-500 mt-2 truncate">
                            Upload Berkas
                        </p>
                    </div>

                    <!-- Step 4 Indicator -->
                    <div id="step-indicator-4" class="step-indicator text-center relative z-10 transition-all">
                        <div class="step-circle w-10 h-10 sm:w-12 sm:h-12 mx-auto rounded-2xl bg-slate-100 text-slate-500 font-heading font-bold text-sm sm:text-base flex items-center justify-center border border-slate-200 transition-all duration-300">
                            <span>4</span>
                        </div>
                        <p class="step-label font-heading text-[11px] sm:text-xs font-semibold text-slate-500 mt-2 truncate">
                            Review & Bukti
                        </p>
                    </div>

                </div>

                <!-- Progress Line Behind -->
                <div class="w-full bg-slate-100 h-2 rounded-full mt-4 overflow-hidden">
                    <div id="step-progress-bar" class="bg-gradient-to-r from-sky-500 via-amber-400 to-emerald-500 h-full w-1/4 transition-all duration-500 rounded-full"></div>
                </div>
            </div>

            <!-- ================= WIZARD FORM CARDS ================= -->
            <form id="multi-step-form" class="no-print" novalidate>

                <!-- ==================== TAHAP 1: DATA CALON SISWA ==================== -->
                <div id="step-panel-1" class="step-panel bg-white rounded-3xl p-6 sm:p-10 shadow-xl border-2 border-slate-200/80 space-y-6">
                    <div class="border-b border-slate-100 pb-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-100 text-sky-800 text-xs font-bold mb-2">
                            <i data-lucide="user" class="w-3.5 h-3.5"></i> Tahap 1 dari 4
                        </div>
                        <h2 class="text-2xl font-heading font-bold text-slate-900">Identitas Calon Siswa</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Pastikan ejaan nama sesuai dengan yang tertera pada Akta Kelahiran.</p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <!-- Jalur Pendaftaran -->
                        <div class="sm:col-span-2">
                            <label class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Pilihan Jalur Pendaftaran *</label>
                            <div class="grid grid-cols-1 sm:grid-cols-4 gap-3">
                                <label class="cursor-pointer">
                                    <input type="radio" name="jalur_pendaftaran" value="Reguler" checked class="peer sr-only">
                                    <div class="p-3 rounded-2xl border-2 border-slate-200 peer-checked:border-sky-500 peer-checked:bg-sky-50/50 text-center transition">
                                        <span class="block font-heading font-bold text-sm text-slate-800">Reguler</span>
                                        <span class="text-[11px] text-slate-500">Jalur Umum</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="jalur_pendaftaran" value="Prestasi" class="peer sr-only">
                                    <div class="p-3 rounded-2xl border-2 border-slate-200 peer-checked:border-amber-500 peer-checked:bg-amber-50/50 text-center transition">
                                        <span class="block font-heading font-bold text-sm text-slate-800">Prestasi</span>
                                        <span class="text-[11px] text-slate-500">Sains/Seni/Olahraga</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="jalur_pendaftaran" value="Tahfidz" class="peer sr-only">
                                    <div class="p-3 rounded-2xl border-2 border-slate-200 peer-checked:border-emerald-500 peer-checked:bg-emerald-50/50 text-center transition">
                                        <span class="block font-heading font-bold text-sm text-slate-800">Tahfidz</span>
                                        <span class="text-[11px] text-slate-500">Beasiswa Quran</span>
                                    </div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="jalur_pendaftaran" value="Afirmasi" class="peer sr-only">
                                    <div class="p-3 rounded-2xl border-2 border-slate-200 peer-checked:border-purple-500 peer-checked:bg-purple-50/50 text-center transition">
                                        <span class="block font-heading font-bold text-sm text-slate-800">Afirmasi</span>
                                        <span class="text-[11px] text-slate-500">Saudara Kandung/Mitra</span>
                                    </div>
                                </label>
                            </div>
                        </div>

                        <!-- Nama Lengkap -->
                        <div class="sm:col-span-2">
                            <label for="step1_nama_lengkap" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nama Lengkap Anak *</label>
                            <input type="text" id="step1_nama_lengkap" required placeholder="Contoh: Muhammad Bintang Al-Fatih" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                            <span class="error-msg text-xs text-rose-500 hidden mt-1">Nama lengkap wajib diisi.</span>
                        </div>

                        <!-- Nama Panggilan -->
                        <div>
                            <label for="step1_nama_panggilan" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nama Panggilan *</label>
                            <input type="text" id="step1_nama_panggilan" required placeholder="Contoh: Bintang" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                            <span class="error-msg text-xs text-rose-500 hidden mt-1">Nama panggilan wajib diisi.</span>
                        </div>

                        <!-- NIK Anak -->
                        <div>
                            <label for="step1_nik" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">NIK Anak (16 Digit) *</label>
                            <input type="text" id="step1_nik" required maxlength="16" placeholder="Contoh: 3174051234567890" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                            <span class="error-msg text-xs text-rose-500 hidden mt-1">NIK wajib 16 digit sesuai KK.</span>
                        </div>

                        <!-- Tempat Lahir -->
                        <div>
                            <label for="step1_tempat_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Tempat Lahir *</label>
                            <input type="text" id="step1_tempat_lahir" required placeholder="Contoh: Jakarta" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                            <span class="error-msg text-xs text-rose-500 hidden mt-1">Tempat lahir wajib diisi.</span>
                        </div>

                        <!-- Tanggal Lahir -->
                        <div>
                            <label for="step1_tanggal_lahir" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Tanggal Lahir *</label>
                            <input type="date" id="step1_tanggal_lahir" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                            <span class="error-msg text-xs text-rose-500 hidden mt-1">Tanggal lahir wajib diisi.</span>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div>
                            <label for="step1_jenis_kelamin" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Jenis Kelamin *</label>
                            <select id="step1_jenis_kelamin" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition bg-white">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <span class="error-msg text-xs text-rose-500 hidden mt-1">Pilih jenis kelamin anak.</span>
                        </div>

                        <!-- Agama -->
                        <div>
                            <label for="step1_agama" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Agama *</label>
                            <select id="step1_agama" required class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition bg-white">
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                            </select>
                        </div>

                        <!-- Asal TK -->
                        <div>
                            <label for="step1_asal_tk" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nama Asal TK / PAUD</label>
                            <input type="text" id="step1_asal_tk" placeholder="Contoh: TK Ceria Pertiwi" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                        </div>

                        <!-- Anak Ke- & Jumlah Saudara -->
                        <div>
                            <label for="step1_anak_ke" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Anak ke- dari berapa bersaudara</label>
                            <input type="text" id="step1_anak_ke" placeholder="Contoh: Anak ke 1 dari 2 bersaudara" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                        </div>

                        <!-- Alamat Lengkap -->
                        <div class="sm:col-span-2">
                            <label for="step1_alamat" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Alamat Tempat Tinggal Saat Ini *</label>
                            <textarea id="step1_alamat" rows="2" required placeholder="Jl. Anggrek No. 12, RT 02 / RW 05, Kelurahan..." class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition"></textarea>
                            <span class="error-msg text-xs text-rose-500 hidden mt-1">Alamat domisili wajib diisi.</span>
                        </div>

                        <!-- Riwayat Kesehatan / Alergi -->
                        <div class="sm:col-span-2">
                            <label for="step1_kesehatan" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Riwayat Alergi Makanan / Kondisi Khusus (Jika ada)</label>
                            <input type="text" id="step1_kesehatan" placeholder="Contoh: Alergi seafood / asma ringan (kosongkan jika sehat & tidak ada)" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                        </div>
                    </div>

                    <!-- Navigation Next Step 1 -->
                    <div class="pt-6 border-t border-slate-100 flex items-center justify-end">
                        <button type="button" id="btn-to-step-2" class="sound-click inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white font-heading font-bold text-sm px-7 py-3.5 rounded-2xl shadow-lg shadow-sky-400/30 hover:shadow-xl hover:-translate-y-0.5 transition cursor-pointer">
                            <span>Lanjut: Data Orang Tua</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>

                <!-- ==================== TAHAP 2: DATA ORANG TUA / WALI ==================== -->
                <div id="step-panel-2" class="step-panel hidden bg-white rounded-3xl p-6 sm:p-10 shadow-xl border-2 border-slate-200/80 space-y-6">
                    <div class="border-b border-slate-100 pb-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold mb-2">
                            <i data-lucide="users" class="w-3.5 h-3.5"></i> Tahap 2 dari 4
                        </div>
                        <h2 class="text-2xl font-heading font-bold text-slate-900">Data Orang Tua / Wali</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Informasi kontak akan digunakan untuk pemberitahuan jadwal observasi dan kelulusan.</p>
                    </div>

                    <div class="space-y-6">
                        <!-- Ayah -->
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 space-y-4">
                            <h3 class="font-heading font-bold text-slate-800 text-base flex items-center gap-2 text-sky-700">
                                <i data-lucide="user-check" class="w-5 h-5"></i> Data Ayah Kandung
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="step2_nama_ayah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nama Lengkap Ayah *</label>
                                    <input type="text" id="step2_nama_ayah" required placeholder="Contoh: Hendra Pratama, S.T." class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition bg-white">
                                    <span class="error-msg text-xs text-rose-500 hidden mt-1">Nama ayah wajib diisi.</span>
                                </div>
                                <div>
                                    <label for="step2_pekerjaan_ayah" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Pekerjaan Ayah *</label>
                                    <input type="text" id="step2_pekerjaan_ayah" required placeholder="Contoh: Karyawan Swasta / Wiraswasta / PNS" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition bg-white">
                                    <span class="error-msg text-xs text-rose-500 hidden mt-1">Pekerjaan ayah wajib diisi.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Ibu -->
                        <div class="p-5 rounded-2xl bg-slate-50 border border-slate-200/80 space-y-4">
                            <h3 class="font-heading font-bold text-slate-800 text-base flex items-center gap-2 text-rose-600">
                                <i data-lucide="heart" class="w-5 h-5"></i> Data Ibu Kandung
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="step2_nama_ibu" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nama Lengkap Ibu *</label>
                                    <input type="text" id="step2_nama_ibu" required placeholder="Contoh: Siti Nurhaliza, S.Pd." class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition bg-white">
                                    <span class="error-msg text-xs text-rose-500 hidden mt-1">Nama ibu wajib diisi.</span>
                                </div>
                                <div>
                                    <label for="step2_pekerjaan_ibu" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Pekerjaan Ibu *</label>
                                    <input type="text" id="step2_pekerjaan_ibu" required placeholder="Contoh: Ibu Rumah Tangga / Guru / Dokter" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition bg-white">
                                    <span class="error-msg text-xs text-rose-500 hidden mt-1">Pekerjaan ibu wajib diisi.</span>
                                </div>
                            </div>
                        </div>

                        <!-- Kontak WhatsApp & Pendukung -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label for="step2_whatsapp" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Nomor WhatsApp Utama (Aktif) *</label>
                                <input type="tel" id="step2_whatsapp" required placeholder="Contoh: 081234567890" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                                <span class="error-msg text-xs text-rose-500 hidden mt-1">Nomor WhatsApp aktif wajib diisi.</span>
                            </div>
                            <div>
                                <label for="step2_email" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Alamat Email Orang Tua</label>
                                <input type="email" id="step2_email" placeholder="Contoh: keluarga.bintang@gmail.com" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition">
                            </div>
                            <div class="sm:col-span-2">
                                <label for="step2_penghasilan" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-1.5">Rentang Penghasilan Gabungan per Bulan</label>
                                <select id="step2_penghasilan" class="w-full px-4 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-200 outline-none text-sm transition bg-white">
                                    <option value="Di bawah Rp 3.000.000">Di bawah Rp 3.000.000</option>
                                    <option value="Rp 3.000.000 - Rp 7.000.000">Rp 3.000.000 - Rp 7.000.000</option>
                                    <option value="Rp 7.000.000 - Rp 15.000.000" selected>Rp 7.000.000 - Rp 15.000.000</option>
                                    <option value="Di atas Rp 15.000.000">Di atas Rp 15.000.000</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Step 2 -->
                    <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                        <button type="button" id="btn-back-to-step-1" class="sound-click inline-flex items-center gap-2 text-slate-600 hover:text-slate-800 font-heading font-semibold text-sm px-5 py-3 rounded-xl border border-slate-200 hover:bg-slate-50 transition cursor-pointer">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                            <span>Kembali: Data Siswa</span>
                        </button>
                        <button type="button" id="btn-to-step-3" class="sound-click inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white font-heading font-bold text-sm px-7 py-3.5 rounded-2xl shadow-lg shadow-sky-400/30 hover:shadow-xl hover:-translate-y-0.5 transition cursor-pointer">
                            <span>Lanjut: Upload Berkas</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>

                <!-- ==================== TAHAP 3: UPLOAD BERKAS DOKUMEN ==================== -->
                <div id="step-panel-3" class="step-panel hidden bg-white rounded-3xl p-6 sm:p-10 shadow-xl border-2 border-slate-200/80 space-y-6">
                    <div class="border-b border-slate-100 pb-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 text-xs font-bold mb-2">
                            <i data-lucide="folder-up" class="w-3.5 h-3.5"></i> Tahap 3 dari 4
                        </div>
                        <h2 class="text-2xl font-heading font-bold text-slate-900">Upload Dokumen & Berkas Persyaratan</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Format file yang didukung: JPG, PNG, atau PDF (Ukuran maksimal 2 MB per file).</p>
                    </div>

                    <div class="space-y-6">
                        
                        <!-- 1. Pas Foto Calon Siswa (dengan live image preview) -->
                        <div class="p-5 rounded-2xl border-2 border-dashed border-sky-300 bg-sky-50/40 hover:bg-sky-50 transition">
                            <div class="flex flex-col sm:flex-row items-center gap-5">
                                <!-- Photo Preview Box -->
                                <div class="w-28 h-36 rounded-2xl border-2 border-slate-300 bg-white shadow-inner flex flex-col items-center justify-center overflow-hidden shrink-0 relative">
                                    <img id="preview-foto" src="" alt="Pas Foto" class="w-full h-full object-cover hidden">
                                    <div id="preview-placeholder" class="text-center p-2 text-slate-400">
                                        <i data-lucide="camera" class="w-8 h-8 mx-auto mb-1 text-slate-300"></i>
                                        <span class="text-[10px] font-semibold block">Foto 3x4</span>
                                    </div>
                                </div>

                                <!-- Upload Input Area -->
                                <div class="flex-grow space-y-2 text-center sm:text-left">
                                    <div class="flex items-center gap-2 justify-center sm:justify-start">
                                        <h3 class="font-heading font-bold text-slate-800 text-sm sm:text-base">1. Pas Foto Berwarna Calon Siswa (3x4) *</h3>
                                        <span class="text-[10px] bg-rose-100 text-rose-700 font-bold px-2 py-0.5 rounded-full">Wajib</span>
                                    </div>
                                    <p class="text-xs text-slate-500">Foto terbaru menghadap ke depan dengan pakaian rapi / seragam TK (Latar merah/biru).</p>
                                    
                                    <div class="pt-2 flex flex-wrap items-center gap-3 justify-center sm:justify-start">
                                        <label class="cursor-pointer inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white font-heading font-semibold text-xs px-4 py-2.5 rounded-xl shadow-sm transition sound-click">
                                            <i data-lucide="upload" class="w-4 h-4"></i>
                                            <span>Pilih Foto Siswa</span>
                                            <input type="file" id="file_foto" accept="image/jpeg,image/png,image/webp" class="hidden file-upload-input" data-target-preview="preview-foto" data-target-name="foto-file-info">
                                        </label>
                                        <span id="foto-file-info" class="text-xs text-slate-600 font-medium">Belum ada file dipilih</span>
                                    </div>
                                    <span class="error-msg text-xs text-rose-500 hidden mt-1">Pas foto calon siswa wajib diunggah.</span>
                                </div>
                            </div>
                        </div>

                        <!-- 2. Akta Kelahiran Anak -->
                        <div class="p-5 rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50/50 hover:bg-slate-50 transition">
                            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                                <div class="space-y-1 text-center sm:text-left">
                                    <div class="flex items-center gap-2 justify-center sm:justify-start">
                                        <h3 class="font-heading font-bold text-slate-800 text-sm sm:text-base">2. Scan / Foto Akta Kelahiran *</h3>
                                        <span class="text-[10px] bg-rose-100 text-rose-700 font-bold px-2 py-0.5 rounded-full">Wajib</span>
                                    </div>
                                    <p class="text-xs text-slate-500">Pastikan tulisan pada dokumen terlihat jelas dan tidak buram (Format JPG/PNG/PDF).</p>
                                    <span id="akta-file-info" class="text-xs font-semibold text-slate-600 block mt-1">Belum ada file dipilih</span>
                                    <span class="error-msg text-xs text-rose-500 hidden mt-1">Akta kelahiran wajib diunggah.</span>
                                </div>

                                <div>
                                    <label class="cursor-pointer inline-flex items-center gap-2 bg-white hover:bg-slate-100 border border-slate-300 text-slate-700 font-heading font-semibold text-xs px-4 py-2.5 rounded-xl shadow-sm transition sound-click">
                                        <i data-lucide="file-text" class="w-4 h-4 text-sky-500"></i>
                                        <span>Pilih Berkas Akta</span>
                                        <input type="file" id="file_akta" accept="image/*,application/pdf" class="hidden file-upload-input" data-target-name="akta-file-info">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- 3. Kartu Keluarga (KK) -->
                        <div class="p-5 rounded-2xl border-2 border-dashed border-slate-300 bg-slate-50/50 hover:bg-slate-50 transition">
                            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                                <div class="space-y-1 text-center sm:text-left">
                                    <div class="flex items-center gap-2 justify-center sm:justify-start">
                                        <h3 class="font-heading font-bold text-slate-800 text-sm sm:text-base">3. Scan / Foto Kartu Keluarga (KK) *</h3>
                                        <span class="text-[10px] bg-rose-100 text-rose-700 font-bold px-2 py-0.5 rounded-full">Wajib</span>
                                    </div>
                                    <p class="text-xs text-slate-500">Kartu Keluarga yang masih berlaku memuat data anak dan orang tua (Format JPG/PNG/PDF).</p>
                                    <span id="kk-file-info" class="text-xs font-semibold text-slate-600 block mt-1">Belum ada file dipilih</span>
                                    <span class="error-msg text-xs text-rose-500 hidden mt-1">Kartu Keluarga wajib diunggah.</span>
                                </div>

                                <div>
                                    <label class="cursor-pointer inline-flex items-center gap-2 bg-white hover:bg-slate-100 border border-slate-300 text-slate-700 font-heading font-semibold text-xs px-4 py-2.5 rounded-xl shadow-sm transition sound-click">
                                        <i data-lucide="file-text" class="w-4 h-4 text-emerald-500"></i>
                                        <span>Pilih Berkas KK</span>
                                        <input type="file" id="file_kk" accept="image/*,application/pdf" class="hidden file-upload-input" data-target-name="kk-file-info">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- 4. Ijazah / Surat Keterangan TK (Opsional) -->
                        <div class="p-5 rounded-2xl border-2 border-dashed border-slate-200 bg-slate-50/30 hover:bg-slate-50 transition">
                            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                                <div class="space-y-1 text-center sm:text-left">
                                    <div class="flex items-center gap-2 justify-center sm:justify-start">
                                        <h3 class="font-heading font-bold text-slate-800 text-sm sm:text-base">4. Ijazah / Surat Keterangan Lulus TK</h3>
                                        <span class="text-[10px] bg-slate-200 text-slate-700 font-semibold px-2 py-0.5 rounded-full">Opsional</span>
                                    </div>
                                    <p class="text-xs text-slate-500">Dapat disusulkan jika belum diterbitkan oleh pihak TK/PAUD.</p>
                                    <span id="tk-file-info" class="text-xs font-semibold text-slate-600 block mt-1">Belum ada file dipilih (opsional)</span>
                                </div>

                                <div>
                                    <label class="cursor-pointer inline-flex items-center gap-2 bg-white hover:bg-slate-100 border border-slate-300 text-slate-700 font-heading font-semibold text-xs px-4 py-2.5 rounded-xl shadow-sm transition sound-click">
                                        <i data-lucide="file-check" class="w-4 h-4 text-amber-500"></i>
                                        <span>Pilih Ijazah TK</span>
                                        <input type="file" id="file_tk" accept="image/*,application/pdf" class="hidden file-upload-input" data-target-name="tk-file-info">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- 5. Sertifikat Prestasi (Opsional) -->
                        <div class="p-5 rounded-2xl border-2 border-dashed border-slate-200 bg-slate-50/30 hover:bg-slate-50 transition">
                            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                                <div class="space-y-1 text-center sm:text-left">
                                    <div class="flex items-center gap-2 justify-center sm:justify-start">
                                        <h3 class="font-heading font-bold text-slate-800 text-sm sm:text-base">5. Piagam / Sertifikat Prestasi Juara</h3>
                                        <span class="text-[10px] bg-amber-100 text-amber-800 font-semibold px-2 py-0.5 rounded-full">Khusus Jalur Prestasi</span>
                                    </div>
                                    <p class="text-xs text-slate-500">Sertifikat kejuaraan tingkat kota, provinsi, atau nasional untuk pertimbangan beasiswa.</p>
                                    <span id="prestasi-file-info" class="text-xs font-semibold text-slate-600 block mt-1">Belum ada file dipilih (opsional)</span>
                                </div>

                                <div>
                                    <label class="cursor-pointer inline-flex items-center gap-2 bg-white hover:bg-slate-100 border border-slate-300 text-slate-700 font-heading font-semibold text-xs px-4 py-2.5 rounded-xl shadow-sm transition sound-click">
                                        <i data-lucide="award" class="w-4 h-4 text-purple-500"></i>
                                        <span>Pilih Sertifikat</span>
                                        <input type="file" id="file_prestasi" accept="image/*,application/pdf" class="hidden file-upload-input" data-target-name="prestasi-file-info">
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Navigation Step 3 -->
                    <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                        <button type="button" id="btn-back-to-step-2" class="sound-click inline-flex items-center gap-2 text-slate-600 hover:text-slate-800 font-heading font-semibold text-sm px-5 py-3 rounded-xl border border-slate-200 hover:bg-slate-50 transition cursor-pointer">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                            <span>Kembali: Data Orang Tua</span>
                        </button>
                        <button type="button" id="btn-to-step-4" class="sound-click inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white font-heading font-bold text-sm px-7 py-3.5 rounded-2xl shadow-lg shadow-sky-400/30 hover:shadow-xl hover:-translate-y-0.5 transition cursor-pointer">
                            <span>Lanjut: Review & Konfirmasi</span>
                            <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </button>
                    </div>
                </div>

                <!-- ==================== TAHAP 4: REVIEW & KONFIRMASI ==================== -->
                <div id="step-panel-4" class="step-panel hidden bg-white rounded-3xl p-6 sm:p-10 shadow-xl border-2 border-slate-200/80 space-y-6">
                    <div class="border-b border-slate-100 pb-4">
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-purple-100 text-purple-800 text-xs font-bold mb-2">
                            <i data-lucide="check-circle" class="w-3.5 h-3.5"></i> Tahap 4 dari 4
                        </div>
                        <h2 class="text-2xl font-heading font-bold text-slate-900">Review Data & Konfirmasi Akhir</h2>
                        <p class="text-xs text-slate-500 mt-0.5">Periksa kembali ringkasan data sebelum mengirim formulir pendaftaran.</p>
                    </div>

                    <!-- Review Tables -->
                    <div class="space-y-4 text-sm">
                        
                        <!-- Ringkasan Siswa -->
                        <div class="bg-sky-50/60 rounded-2xl p-5 border border-sky-100 space-y-3">
                            <h3 class="font-heading font-bold text-sky-800 flex items-center justify-between">
                                <span class="flex items-center gap-2"><i data-lucide="user" class="w-4 h-4"></i> Data Calon Siswa</span>
                                <span id="review_jalur" class="text-xs bg-sky-500 text-white px-2.5 py-0.5 rounded-full font-sans">Jalur Reguler</span>
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-2 text-xs sm:text-sm">
                                <div><span class="text-slate-500">Nama Lengkap:</span> <strong id="review_nama_siswa" class="text-slate-800">-</strong></div>
                                <div><span class="text-slate-500">Nama Panggilan:</span> <strong id="review_panggilan" class="text-slate-800">-</strong></div>
                                <div><span class="text-slate-500">NIK:</span> <strong id="review_nik" class="text-slate-800">-</strong></div>
                                <div><span class="text-slate-500">TTL:</span> <strong id="review_ttl" class="text-slate-800">-</strong></div>
                                <div><span class="text-slate-500">Jenis Kelamin:</span> <strong id="review_gender" class="text-slate-800">-</strong></div>
                                <div><span class="text-slate-500">Agama:</span> <strong id="review_agama" class="text-slate-800">-</strong></div>
                                <div class="sm:col-span-2"><span class="text-slate-500">Alamat:</span> <strong id="review_alamat" class="text-slate-800">-</strong></div>
                            </div>
                        </div>

                        <!-- Ringkasan Orang Tua -->
                        <div class="bg-amber-50/60 rounded-2xl p-5 border border-amber-100 space-y-3">
                            <h3 class="font-heading font-bold text-amber-900 flex items-center gap-2">
                                <i data-lucide="users" class="w-4 h-4"></i> Data Orang Tua & Kontak
                            </h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-2 text-xs sm:text-sm">
                                <div><span class="text-slate-500">Nama Ayah:</span> <strong id="review_ayah" class="text-slate-800">-</strong></div>
                                <div><span class="text-slate-500">Pekerjaan Ayah:</span> <strong id="review_pekerjaan_ayah" class="text-slate-800">-</strong></div>
                                <div><span class="text-slate-500">Nama Ibu:</span> <strong id="review_ibu" class="text-slate-800">-</strong></div>
                                <div><span class="text-slate-500">Pekerjaan Ibu:</span> <strong id="review_pekerjaan_ibu" class="text-slate-800">-</strong></div>
                                <div><span class="text-slate-500">WhatsApp Aktif:</span> <strong id="review_wa" class="text-emerald-700">-</strong></div>
                                <div><span class="text-slate-500">Penghasilan:</span> <strong id="review_penghasilan" class="text-slate-800">-</strong></div>
                            </div>
                        </div>

                        <!-- Ringkasan Berkas Terunggah -->
                        <div class="bg-emerald-50/60 rounded-2xl p-5 border border-emerald-100 space-y-3">
                            <h3 class="font-heading font-bold text-emerald-900 flex items-center gap-2">
                                <i data-lucide="file-check" class="w-4 h-4"></i> Status Berkas Dokumen
                            </h3>
                            <ul class="space-y-1.5 text-xs">
                                <li class="flex items-center gap-2"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600"></i> Pas Foto 3x4: <strong id="review_doc_foto" class="text-slate-800">Telah Diunggah</strong></li>
                                <li class="flex items-center gap-2"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600"></i> Akta Kelahiran: <strong id="review_doc_akta" class="text-slate-800">Telah Diunggah</strong></li>
                                <li class="flex items-center gap-2"><i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-600"></i> Kartu Keluarga: <strong id="review_doc_kk" class="text-slate-800">Telah Diunggah</strong></li>
                            </ul>
                        </div>

                    </div>

                    <!-- Integrity Consent Checkbox -->
                    <div class="p-4 rounded-2xl bg-slate-50 border border-slate-200 flex items-start gap-3">
                        <input type="checkbox" id="consent_checkbox" required class="w-5 h-5 rounded text-sky-600 focus:ring-sky-500 mt-0.5 cursor-pointer">
                        <label for="consent_checkbox" class="text-xs text-slate-700 leading-relaxed cursor-pointer">
                            Dengan mencentang kotak ini, saya menyatakan dengan sesungguhnya bahwa seluruh data dan dokumen yang saya unggah adalah <strong>benar, sah, dan dapat dipertanggungjawabkan</strong>. Saya bersedia mengikuti seluruh tahapan observasi dan mematuhi peraturan sekolah.
                        </label>
                    </div>
                    <span id="consent-error" class="error-msg text-xs text-rose-500 hidden block">Anda wajib menyetujui pernyataan kebenaran data di atas.</span>

                    <!-- Navigation Step 4 (Final Submit) -->
                    <div class="pt-6 border-t border-slate-100 flex items-center justify-between">
                        <button type="button" id="btn-back-to-step-3" class="sound-click inline-flex items-center gap-2 text-slate-600 hover:text-slate-800 font-heading font-semibold text-sm px-5 py-3 rounded-xl border border-slate-200 hover:bg-slate-50 transition cursor-pointer">
                            <i data-lucide="arrow-left" class="w-4 h-4"></i>
                            <span>Kembali: Upload Berkas</span>
                        </button>
                        <button type="submit" id="btn-submit-registration" class="sound-click inline-flex items-center gap-2 bg-gradient-to-r from-emerald-500 via-teal-500 to-sky-600 hover:from-emerald-600 hover:to-sky-700 text-white font-heading font-bold text-base px-8 py-4 rounded-2xl shadow-xl shadow-emerald-500/30 hover:shadow-2xl hover:-translate-y-0.5 transition cursor-pointer">
                            <i data-lucide="send" class="w-5 h-5"></i>
                            <span>Kirim Pendaftaran Resmi Sekarang ✨</span>
                        </button>
                    </div>
                </div>

            </form>

            <!-- ================= RESULT / PRINTABLE REGISTRATION CARD ================= -->
            <div id="registration-success-container" class="hidden space-y-6">
                
                <!-- Success Alert Header -->
                <div class="text-center space-y-3 no-print">
                    <div class="w-20 h-20 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center mx-auto shadow-lg shadow-emerald-200">
                        <i data-lucide="party-popper" class="w-10 h-10"></i>
                    </div>
                    <h2 class="text-3xl font-heading font-black text-slate-900">Pendaftaran Berhasil Dikirim!</h2>
                    <p class="text-slate-600 text-sm max-w-lg mx-auto">
                        Selamat, data dan berkas calon peserta didik telah terdaftar di sistem PPDB SD Negeri 1 Suka Cita Purwokerto. Silakan cetak atau simpan tanda bukti pendaftaran di bawah ini.
                    </p>
                </div>

                <!-- Printable Card Container -->
                <div id="printable-registration-card" class="bg-white rounded-3xl p-6 sm:p-10 shadow-2xl border-4 border-amber-300 relative overflow-hidden">
                    
                    <!-- Decorative Top Ribbon -->
                    <div class="bg-gradient-to-r from-sky-600 via-blue-600 to-indigo-600 text-white py-3 px-6 -mx-6 -mt-6 sm:-mx-10 sm:-mt-10 mb-6 flex flex-col sm:flex-row items-center justify-between gap-2 text-center sm:text-left">
                        <div class="flex items-center gap-3">
                            <div class="w-9 h-9 rounded-xl bg-amber-400 text-slate-900 flex items-center justify-center">
                                <i data-lucide="graduation-cap" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <h3 class="font-heading font-bold text-base tracking-wide">SD NEGERI 1 SUKA CITA PURWOKERTO</h3>
                                <p class="text-[11px] text-sky-100">Akreditasi A Unggul • NPSN: 20109988</p>
                            </div>
                        </div>
                        <div class="text-xs bg-amber-400 text-slate-900 font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            Tanda Bukti Pendaftaran Sementara
                        </div>
                    </div>

                    <!-- Card Header Details -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 items-center border-b border-slate-200 pb-6 mb-6">
                        
                        <!-- Left: Student Photo -->
                        <div class="flex justify-center sm:justify-start">
                            <div class="w-32 h-40 rounded-2xl border-2 border-slate-300 bg-slate-100 overflow-hidden shadow-md flex items-center justify-center">
                                <img id="print-foto-display" src="" alt="Foto Siswa" class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Center: Registration Number & Key Info -->
                        <div class="sm:col-span-2 space-y-2 text-center sm:text-left">
                            <span class="text-xs font-semibold text-slate-500 uppercase tracking-wider">Nomor Registrasi PPDB</span>
                            <div id="print-reg-number" class="font-heading text-3xl sm:text-4xl font-black text-sky-700 tracking-wider">
                                PPDB-2026-XXXXX
                            </div>
                            <p class="text-xs text-slate-500">
                                Waktu Pendaftaran: <span id="print-timestamp" class="font-semibold text-slate-700">-</span>
                            </p>
                            <div class="inline-block px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold">
                                Jalur: <span id="print-jalur">Reguler</span>
                            </div>
                        </div>
                    </div>

                    <!-- Student and Parent Full Data -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 text-xs sm:text-sm border-b border-slate-200 pb-6 mb-6">
                        <div class="space-y-2">
                            <h4 class="font-heading font-bold text-slate-900 border-b pb-1 text-sky-700">Data Calon Siswa</h4>
                            <p><span class="text-slate-500">Nama Lengkap:</span> <strong id="print-nama" class="block sm:inline text-slate-800">-</strong></p>
                            <p><span class="text-slate-500">Nama Panggilan:</span> <strong id="print-panggilan" class="text-slate-800">-</strong></p>
                            <p><span class="text-slate-500">NIK Siswa:</span> <strong id="print-nik" class="text-slate-800">-</strong></p>
                            <p><span class="text-slate-500">TTL:</span> <strong id="print-ttl" class="text-slate-800">-</strong></p>
                            <p><span class="text-slate-500">Jenis Kelamin:</span> <strong id="print-gender" class="text-slate-800">-</strong></p>
                            <p><span class="text-slate-500">Alamat:</span> <strong id="print-alamat" class="text-slate-800">-</strong></p>
                        </div>

                        <div class="space-y-2">
                            <h4 class="font-heading font-bold text-slate-900 border-b pb-1 text-emerald-700">Data Orang Tua / Kontak</h4>
                            <p><span class="text-slate-500">Nama Ayah:</span> <strong id="print-ayah" class="text-slate-800">-</strong></p>
                            <p><span class="text-slate-500">Nama Ibu:</span> <strong id="print-ibu" class="text-slate-800">-</strong></p>
                            <p><span class="text-slate-500">WhatsApp Panitia:</span> <strong id="print-wa" class="text-slate-800">-</strong></p>
                            <p><span class="text-slate-500">Status Dokumen:</span> <strong class="text-emerald-600">Lengkap (Akta, KK, Foto)</strong></p>
                            
                            <!-- Next Steps Box -->
                            <div class="p-3 bg-amber-50 rounded-xl border border-amber-200 text-xs text-amber-900 mt-2">
                                <strong>Langkah Selanjutnya:</strong><br>
                                Jadwal Observasi Ramah Anak akan dikirimkan panitia ke nomor WhatsApp terdaftar dalam 1x24 jam kerja.
                            </div>
                        </div>
                    </div>

                    <!-- Footer & Signature Card -->
                    <div class="flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
                        <div>
                            <p>Kampus: Jl. Pendidikan No. 1, Purwokerto, Banyumas, Jawa Tengah</p>
                            <p>Hotline PPDB: (0281) 632145 | WhatsApp: 0812-3456-7890</p>
                        </div>
                        <div class="text-center sm:text-right">
                            <p>Panitia PPDB SD Negeri 1 Suka Cita Purwokerto</p>
                            <div class="h-10"></div>
                            <p class="font-bold text-slate-800 border-t border-slate-300 pt-1">( Tim Penerimaan Siswa Baru )</p>
                        </div>
                    </div>

                </div>

                <!-- Action Buttons (No Print) -->
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4 no-print">
                    <button type="button" id="btn-print-card" class="sound-click w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-sky-600 hover:bg-sky-700 text-white font-heading font-bold text-sm px-8 py-3.5 rounded-2xl shadow-lg transition cursor-pointer">
                        <i data-lucide="printer" class="w-4 h-4"></i>
                        <span>Cetak / Simpan Bukti (PDF)</span>
                    </button>
                    <a href="https://wa.me/6281234567890?text=Halo%20Panitia%20PPDB%20SD%20Negeri%201%20Suka%20Cita%20Purwokerto,%20saya%20sudah%20mendaftar%20dengan%20nomor%20registrasi%20" target="_blank" id="wa-confirm-btn" class="sound-click w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-emerald-500 hover:bg-emerald-600 text-white font-heading font-bold text-sm px-7 py-3.5 rounded-2xl shadow-lg transition">
                        <i data-lucide="message-circle" class="w-4 h-4"></i>
                        <span>Konfirmasi via WhatsApp</span>
                    </a>
                    <a href="{{ url('/') }}" class="sound-click w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white hover:bg-slate-100 text-slate-700 font-heading font-semibold text-sm px-6 py-3.5 rounded-2xl border border-slate-300 transition">
                        <i data-lucide="home" class="w-4 h-4"></i>
                        <span>Kembali ke Beranda</span>
                    </a>
                </div>

            </div>

        </div>
    </main>

    <!-- ================= FOOTER PENDAFTARAN ================= -->
    <footer class="bg-white border-t border-slate-200 py-6 text-center text-xs text-slate-500 no-print">
        <div class="flex items-center justify-center gap-4 mb-2">
            <a href="{{ route('admin.login') }}" class="text-slate-400 hover:text-sky-600 inline-flex items-center gap-1 transition">
                <i data-lucide="shield-check" class="w-3.5 h-3.5"></i>
                <span>Masuk Portal Panitia / Admin PPDB</span>
            </a>
        </div>
        <p>&copy; {{ date('Y') }} SD Negeri 1 Suka Cita Purwokerto. Seluruh hak cipta dilindungi undang-undang.</p>
    </footer>

</body>
</html>
