@extends('layouts.admin')

@section('title', 'Data Peserta Didik Baru')

@section('content')
<div class="space-y-6">

    <!-- Page Header & Action Bar -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div>
            <h1 class="font-heading font-extrabold text-2xl sm:text-3xl text-slate-900">Data Pendaftar PPDB Online</h1>
            <p class="text-xs sm:text-sm text-slate-500 mt-1">Daftar calon peserta didik baru tahun ajaran 2026/2027 SD Negeri 1 Suka Cita Purwokerto.</p>
        </div>
        <div class="flex items-center gap-2.5">
            <a href="{{ route('pendaftaran') }}" target="_blank" class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white font-heading font-semibold text-xs sm:text-sm px-4 py-2.5 rounded-xl shadow-sm transition">
                <i data-lucide="plus-circle" class="w-4 h-4"></i>
                <span>Buka Formulir PPDB</span>
            </a>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-3 sm:gap-4">
        <a href="{{ route('admin.pendaftaran.index') }}" class="p-4 rounded-2xl bg-white border border-slate-200/80 shadow-xs hover:border-slate-300 transition">
            <div class="flex items-center justify-between text-slate-500 mb-2">
                <span class="text-xs font-semibold">Total</span>
                <i data-lucide="users" class="w-4 h-4 text-sky-500"></i>
            </div>
            <div class="text-2xl font-heading font-black text-slate-900">{{ $stats['total'] }}</div>
            <span class="text-[11px] text-slate-400">Semua pendaftar</span>
        </a>

        <a href="{{ route('admin.pendaftaran.index', ['status' => 'menunggu']) }}" class="p-4 rounded-2xl bg-amber-50/70 border border-amber-200/80 shadow-xs hover:border-amber-300 transition">
            <div class="flex items-center justify-between text-amber-700 mb-2">
                <span class="text-xs font-semibold">Menunggu</span>
                <i data-lucide="clock" class="w-4 h-4 text-amber-500"></i>
            </div>
            <div class="text-2xl font-heading font-black text-amber-900">{{ $stats['menunggu'] }}</div>
            <span class="text-[11px] text-amber-700/80">Perlu diverifikasi</span>
        </a>

        <a href="{{ route('admin.pendaftaran.index', ['status' => 'revisi_berkas']) }}" class="p-4 rounded-2xl bg-orange-50/70 border border-orange-200/80 shadow-xs hover:border-orange-300 transition">
            <div class="flex items-center justify-between text-orange-700 mb-2">
                <span class="text-xs font-semibold">Revisi Berkas</span>
                <i data-lucide="alert-triangle" class="w-4 h-4 text-orange-500"></i>
            </div>
            <div class="text-2xl font-heading font-black text-orange-900">{{ $stats['revisi_berkas'] }}</div>
            <span class="text-[11px] text-orange-700/80">Perlu perbaikan</span>
        </a>

        <a href="{{ route('admin.pendaftaran.index', ['status' => 'berkas_valid']) }}" class="p-4 rounded-2xl bg-blue-50/70 border border-blue-200/80 shadow-xs hover:border-blue-300 transition">
            <div class="flex items-center justify-between text-blue-700 mb-2">
                <span class="text-xs font-semibold">Berkas Valid</span>
                <i data-lucide="file-check" class="w-4 h-4 text-blue-500"></i>
            </div>
            <div class="text-2xl font-heading font-black text-blue-900">{{ $stats['berkas_valid'] }}</div>
            <span class="text-[11px] text-blue-700/80">Siap observasi</span>
        </a>

        <a href="{{ route('admin.pendaftaran.index', ['status' => 'lulus']) }}" class="p-4 rounded-2xl bg-emerald-50/70 border border-emerald-200/80 shadow-xs hover:border-emerald-300 transition">
            <div class="flex items-center justify-between text-emerald-700 mb-2">
                <span class="text-xs font-semibold">Lulus Seleksi</span>
                <i data-lucide="award" class="w-4 h-4 text-emerald-500"></i>
            </div>
            <div class="text-2xl font-heading font-black text-emerald-900">{{ $stats['lulus'] }}</div>
            <span class="text-[11px] text-emerald-700/80">Diterima resmi</span>
        </a>

        <a href="{{ route('admin.pendaftaran.index', ['status' => 'ditolak']) }}" class="p-4 rounded-2xl bg-rose-50/70 border border-rose-200/80 shadow-xs hover:border-rose-300 transition">
            <div class="flex items-center justify-between text-rose-700 mb-2">
                <span class="text-xs font-semibold">Ditolak</span>
                <i data-lucide="x-circle" class="w-4 h-4 text-rose-500"></i>
            </div>
            <div class="text-2xl font-heading font-black text-rose-900">{{ $stats['ditolak'] }}</div>
            <span class="text-[11px] text-rose-700/80">Tidak memenuhi</span>
        </a>
    </div>

    <!-- Filter & Search Section -->
    <div class="bg-white rounded-2xl p-4 shadow-xs border border-slate-200/80">
        <form action="{{ route('admin.pendaftaran.index') }}" method="GET" class="flex flex-col md:flex-row items-center gap-3">
            
            <!-- Search Box -->
            <div class="relative flex-grow w-full">
                <div class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400">
                    <i data-lucide="search" class="w-4 h-4"></i>
                </div>
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari nama siswa, nomor registrasi, NIK, nomor WhatsApp..." class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-slate-200 focus:border-sky-500 focus:ring-2 focus:ring-sky-100 outline-none text-xs sm:text-sm">
            </div>

            <!-- Jalur Filter -->
            <div class="w-full md:w-44">
                <select name="jalur" class="w-full px-3 py-2.5 rounded-xl border border-slate-200 bg-white text-xs sm:text-sm outline-none focus:border-sky-500">
                    <option value="">Semua Jalur</option>
                    <option value="Reguler" {{ request('jalur') == 'Reguler' ? 'selected' : '' }}>Reguler</option>
                    <option value="Prestasi" {{ request('jalur') == 'Prestasi' ? 'selected' : '' }}>Prestasi</option>
                    <option value="Tahfidz" {{ request('jalur') == 'Tahfidz' ? 'selected' : '' }}>Tahfidz</option>
                    <option value="Afirmasi" {{ request('jalur') == 'Afirmasi' ? 'selected' : '' }}>Afirmasi</option>
                </select>
            </div>

            <!-- Status Filter -->
            <div class="w-full md:w-48">
                <select name="status" class="w-full px-3 py-2.5 rounded-xl border border-slate-200 bg-white text-xs sm:text-sm outline-none focus:border-sky-500">
                    <option value="">Semua Status</option>
                    <option value="menunggu" {{ request('status') == 'menunggu' ? 'selected' : '' }}>Menunggu Verifikasi</option>
                    <option value="revisi_berkas" {{ request('status') == 'revisi_berkas' ? 'selected' : '' }}>Revisi Berkas</option>
                    <option value="berkas_valid" {{ request('status') == 'berkas_valid' ? 'selected' : '' }}>Berkas Valid</option>
                    <option value="lulus" {{ request('status') == 'lulus' ? 'selected' : '' }}>Lulus Seleksi</option>
                    <option value="ditolak" {{ request('status') == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>
            </div>

            <!-- Buttons -->
            <div class="flex items-center gap-2 w-full md:w-auto">
                <button type="submit" class="flex-1 md:flex-initial inline-flex items-center justify-center gap-1.5 bg-slate-800 hover:bg-slate-900 text-white font-semibold text-xs sm:text-sm px-5 py-2.5 rounded-xl transition cursor-pointer">
                    <i data-lucide="filter" class="w-4 h-4"></i>
                    <span>Filter</span>
                </button>
                @if(request()->hasAny(['search', 'jalur', 'status']))
                    <a href="{{ route('admin.pendaftaran.index') }}" class="p-2.5 text-slate-500 hover:text-slate-700 rounded-xl hover:bg-slate-100 transition" title="Reset Filter">
                        <i data-lucide="rotate-ccw" class="w-4 h-4"></i>
                    </a>
                @endif
            </div>

        </form>
    </div>

    <!-- Applicant Table -->
    <div class="bg-white rounded-2xl shadow-xs border border-slate-200/80 overflow-hidden">
        @if($pendaftarans->count() > 0)
            <div class="overflow-x-auto">
                <table class="w-full text-left text-xs sm:text-sm">
                    <thead class="bg-slate-50 border-b border-slate-200 text-slate-500 uppercase tracking-wider font-semibold text-[11px]">
                        <tr>
                            <th class="py-3.5 px-4">Foto & No. Registrasi</th>
                            <th class="py-3.5 px-4">Calon Siswa</th>
                            <th class="py-3.5 px-4">Jalur</th>
                            <th class="py-3.5 px-4">Orang Tua & WA</th>
                            <th class="py-3.5 px-4">Tanggal Daftar</th>
                            <th class="py-3.5 px-4">Status</th>
                            <th class="py-3.5 px-4 text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($pendaftarans as $pendaftar)
                            <tr class="hover:bg-slate-50/80 transition">
                                <!-- Photo & Reg -->
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="flex items-center gap-3">
                                        <div class="w-10 h-10 rounded-xl bg-slate-100 border border-slate-200 overflow-hidden flex items-center justify-center shrink-0">
                                            @if($pendaftar->file_foto)
                                                <img src="{{ asset('storage/' . $pendaftar->file_foto) }}" alt="Foto" class="w-full h-full object-cover">
                                            @else
                                                <i data-lucide="user" class="w-5 h-5 text-slate-400"></i>
                                            @endif
                                        </div>
                                        <div>
                                            <a href="{{ route('admin.pendaftaran.show', $pendaftar) }}" class="font-mono font-bold text-sky-600 hover:text-sky-800 text-xs">
                                                {{ $pendaftar->nomor_registrasi }}
                                            </a>
                                            <span class="block text-[11px] text-slate-400">NIK: {{ $pendaftar->nik }}</span>
                                        </div>
                                    </div>
                                </td>

                                <!-- Student Details -->
                                <td class="py-3.5 px-4">
                                    <div class="font-heading font-bold text-slate-900">{{ $pendaftar->nama_lengkap }}</div>
                                    <div class="text-[11px] text-slate-500">
                                        {{ $pendaftar->jenis_kelamin }} • {{ $pendaftar->tempat_lahir }}, {{ $pendaftar->tanggal_lahir?->format('d/m/Y') }}
                                    </div>
                                </td>

                                <!-- Jalur -->
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    @php
                                        $badgeJalur = match($pendaftar->jalur_pendaftaran) {
                                            'Prestasi' => 'bg-amber-100 text-amber-800 border-amber-200',
                                            'Tahfidz' => 'bg-emerald-100 text-emerald-800 border-emerald-200',
                                            'Afirmasi' => 'bg-purple-100 text-purple-800 border-purple-200',
                                            default => 'bg-sky-100 text-sky-800 border-sky-200',
                                        };
                                    @endphp
                                    <span class="px-2.5 py-1 rounded-full text-[11px] font-bold border {{ $badgeJalur }}">
                                        {{ $pendaftar->jalur_pendaftaran }}
                                    </span>
                                </td>

                                <!-- Parent & WhatsApp -->
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <div class="text-slate-800 font-medium">{{ $pendaftar->nama_ayah }} / {{ $pendaftar->nama_ibu }}</div>
                                    <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/\D/', '', $pendaftar->whatsapp)) }}?text=Halo%20Bapak%2FIbu%20Wali%20dari%20{{ urlencode($pendaftar->nama_lengkap) }}%2C%20kami%20dari%20Panitia%20PPDB%20SD%20Negeri%201%20Suka%20Cita%20Purwokerto%20mengenai%20status%20pendaftaran%20dengan%20nomor%20{{ $pendaftar->nomor_registrasi }}" target="_blank" class="inline-flex items-center gap-1 text-[11px] font-bold text-emerald-600 hover:text-emerald-700 mt-0.5">
                                        <i data-lucide="message-circle" class="w-3 h-3"></i>
                                        <span>{{ $pendaftar->whatsapp }}</span>
                                    </a>
                                </td>

                                <!-- Reg Date -->
                                <td class="py-3.5 px-4 whitespace-nowrap text-slate-500 text-xs">
                                    {{ $pendaftar->created_at->translatedFormat('d M Y, H:i') }}
                                </td>

                                <!-- Status Badge -->
                                <td class="py-3.5 px-4 whitespace-nowrap">
                                    <span class="px-2.5 py-1 rounded-full text-[11px] font-bold border {{ $pendaftar->status_color }}">
                                        {{ $pendaftar->status_label }}
                                    </span>
                                </td>

                                <!-- Action Buttons -->
                                <td class="py-3.5 px-4 whitespace-nowrap text-center">
                                    <div class="flex items-center justify-center gap-1.5">
                                        <a href="{{ route('admin.pendaftaran.show', $pendaftar) }}" class="inline-flex items-center gap-1 px-2.5 py-1.5 bg-sky-50 hover:bg-sky-100 text-sky-700 font-semibold rounded-lg text-xs transition" title="Lihat Berkas & Detail">
                                            <i data-lucide="eye" class="w-3.5 h-3.5"></i>
                                            <span>Detail</span>
                                        </a>

                                        <form action="{{ route('admin.pendaftaran.destroy', $pendaftar) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data pendaftaran {{ $pendaftar->nomor_registrasi }}?')" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-1.5 text-slate-400 hover:text-rose-600 hover:bg-rose-50 rounded-lg transition" title="Hapus Data">
                                                <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="px-4 py-3 border-t border-slate-200">
                {{ $pendaftarans->links() }}
            </div>
        @else
            <div class="text-center py-12 px-4">
                <div class="w-16 h-16 rounded-2xl bg-slate-100 text-slate-400 flex items-center justify-center mx-auto mb-3">
                    <i data-lucide="inbox" class="w-8 h-8"></i>
                </div>
                <h3 class="font-heading font-bold text-base text-slate-700">Belum ada data pendaftar</h3>
                <p class="text-xs text-slate-500 mt-1 max-w-sm mx-auto">Data pendaftaran yang masuk melalui formulir PPDB online akan otomatis muncul di tabel ini.</p>
            </div>
        @endif
    </div>

</div>
@endsection
