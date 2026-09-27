@extends('layouts.admin')

@section('title', 'Detail Pendaftaran ' . $pendaftaran->nomor_registrasi)

@section('content')
<div class="space-y-6">

    <!-- Back Navigation & Actions -->
    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
        <div class="flex items-center gap-3">
            <a href="{{ route('admin.pendaftaran.index') }}" class="p-2.5 rounded-xl border border-slate-200 bg-white hover:bg-slate-50 text-slate-600 transition">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
            </a>
            <div>
                <div class="flex items-center gap-2">
                    <h1 class="font-heading font-extrabold text-2xl text-slate-900">{{ $pendaftaran->nama_lengkap }}</h1>
                    <span class="px-2.5 py-0.5 rounded-full text-xs font-bold border {{ $pendaftaran->status_color }}">
                        {{ $pendaftaran->status_label }}
                    </span>
                </div>
                <p class="text-xs text-slate-500 font-mono mt-0.5">{{ $pendaftaran->nomor_registrasi }} • Didaftarkan pada {{ $pendaftaran->created_at->translatedFormat('l, d F Y H:i') }} WIB</p>
            </div>
        </div>

        <div class="flex items-center gap-2">
            <!-- Direct WA Button -->
            <a href="https://wa.me/{{ preg_replace('/^0/', '62', preg_replace('/\D/', '', $pendaftaran->whatsapp)) }}?text=Halo%20Bapak%2FIbu%20Wali%20dari%20{{ urlencode($pendaftaran->nama_lengkap) }}%2C%20kami%20dari%20Panitia%20PPDB%20SD%20Negeri%201%20Suka%20Cita%20Purwokerto%20terkait%20pendaftaran%20nomor%20{{ $pendaftaran->nomor_registrasi }}." target="_blank" class="inline-flex items-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white text-xs sm:text-sm font-semibold px-4 py-2.5 rounded-xl shadow-xs transition">
                <i data-lucide="message-circle" class="w-4 h-4"></i>
                <span>Hubungi via WhatsApp</span>
            </a>

            <!-- Delete Form -->
            <form action="{{ route('admin.pendaftaran.destroy', $pendaftaran) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus permanen data ini?');" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="p-2.5 rounded-xl border border-rose-200 bg-rose-50 text-rose-600 hover:bg-rose-100 transition" title="Hapus Data">
                    <i data-lucide="trash-2" class="w-4 h-4"></i>
                </button>
            </form>
        </div>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- Left 2 Cols: Student and Parent Profile -->
        <div class="lg:col-span-2 space-y-6">

            <!-- Data Calon Siswa Card -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-xs border border-slate-200/80 space-y-6">
                <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-2xl bg-sky-100 text-sky-700 flex items-center justify-center">
                            <i data-lucide="user" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h2 class="font-heading font-bold text-lg text-slate-800">Identitas Calon Siswa</h2>
                            <p class="text-xs text-slate-400">Biodata lengkap sesuai kartu identitas / akta</p>
                        </div>
                    </div>
                    <span class="text-xs bg-sky-50 text-sky-700 font-bold px-3 py-1 rounded-full border border-sky-200">
                        Jalur: {{ $pendaftaran->jalur_pendaftaran }}
                    </span>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm">
                    <div>
                        <span class="text-slate-400 block text-xs">Nama Lengkap</span>
                        <span class="font-bold text-slate-800">{{ $pendaftaran->nama_lengkap }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Nama Panggilan</span>
                        <span class="font-semibold text-slate-800">{{ $pendaftaran->nama_panggilan ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Nomor Induk Kependudukan (NIK)</span>
                        <span class="font-mono font-bold text-slate-800">{{ $pendaftaran->nik }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Tempat, Tanggal Lahir</span>
                        <span class="font-semibold text-slate-800">{{ $pendaftaran->tempat_lahir }}, {{ $pendaftaran->tanggal_lahir?->translatedFormat('d F Y') }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Jenis Kelamin</span>
                        <span class="font-semibold text-slate-800">{{ $pendaftaran->jenis_kelamin }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Agama</span>
                        <span class="font-semibold text-slate-800">{{ $pendaftaran->agama }}</span>
                    </div>
                    <div class="sm:col-span-2">
                        <span class="text-slate-400 block text-xs">Alamat Domisili Lengkap</span>
                        <span class="font-semibold text-slate-800">{{ $pendaftaran->alamat }}</span>
                    </div>
                </div>
            </div>

            <!-- Data Orang Tua Card -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-xs border border-slate-200/80 space-y-6">
                <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
                    <div class="w-10 h-10 rounded-2xl bg-amber-100 text-amber-700 flex items-center justify-center">
                        <i data-lucide="users" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h2 class="font-heading font-bold text-lg text-slate-800">Data Orang Tua / Wali</h2>
                        <p class="text-xs text-slate-400">Informasi kontak orang tua untuk observasi</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-xs sm:text-sm">
                    <div>
                        <span class="text-slate-400 block text-xs">Nama Ayah Kandung</span>
                        <span class="font-bold text-slate-800">{{ $pendaftaran->nama_ayah }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Pekerjaan Ayah</span>
                        <span class="font-semibold text-slate-800">{{ $pendaftaran->pekerjaan_ayah ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Nama Ibu Kandung</span>
                        <span class="font-bold text-slate-800">{{ $pendaftaran->nama_ibu }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Pekerjaan Ibu</span>
                        <span class="font-semibold text-slate-800">{{ $pendaftaran->pekerjaan_ibu ?? '-' }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Nomor WhatsApp Aktif</span>
                        <span class="font-mono font-bold text-emerald-600">{{ $pendaftaran->whatsapp }}</span>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-xs">Estimasi Penghasilan Orang Tua</span>
                        <span class="font-semibold text-slate-800">{{ $pendaftaran->penghasilan ?? '-' }}</span>
                    </div>
                </div>
            </div>

            <!-- Dokumen Berkas yang Diunggah -->
            <div class="bg-white rounded-3xl p-6 sm:p-8 shadow-xs border border-slate-200/80 space-y-6">
                <div class="flex items-center gap-3 border-b border-slate-100 pb-4">
                    <div class="w-10 h-10 rounded-2xl bg-emerald-100 text-emerald-700 flex items-center justify-center">
                        <i data-lucide="file-check" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h2 class="font-heading font-bold text-lg text-slate-800">Berkas Dokumen Terlampir</h2>
                        <p class="text-xs text-slate-400">Klik tautan untuk melihat berkas asli atau mengunduh</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    
                    <!-- Pas Foto -->
                    <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-start gap-4">
                        <div class="w-16 h-20 rounded-xl bg-white border border-slate-200 overflow-hidden shrink-0 flex items-center justify-center shadow-xs">
                            @if($pendaftaran->file_foto)
                                <img src="{{ asset('storage/' . $pendaftaran->file_foto) }}" alt="Foto 3x4" class="w-full h-full object-cover">
                            @else
                                <i data-lucide="image-off" class="w-6 h-6 text-slate-300"></i>
                            @endif
                        </div>
                        <div class="flex-grow space-y-1">
                            <h4 class="font-heading font-bold text-xs sm:text-sm text-slate-800">1. Pas Foto Siswa (3x4)</h4>
                            <span class="text-[11px] text-slate-500 block">Foto berlatar belakang rapi</span>
                            @if($pendaftaran->file_foto)
                                <a href="{{ asset('storage/' . $pendaftaran->file_foto) }}" target="_blank" class="inline-flex items-center gap-1 text-xs font-bold text-sky-600 hover:text-sky-700 mt-1">
                                    <i data-lucide="external-link" class="w-3.5 h-3.5"></i> Buka Foto Asli
                                </a>
                            @else
                                <span class="text-xs text-rose-500 font-semibold">Belum Diunggah</span>
                            @endif
                        </div>
                    </div>

                    <!-- Akta Kelahiran -->
                    <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-sky-100 text-sky-600 flex items-center justify-center shrink-0">
                            <i data-lucide="file-text" class="w-6 h-6"></i>
                        </div>
                        <div class="flex-grow space-y-1">
                            <h4 class="font-heading font-bold text-xs sm:text-sm text-slate-800">2. Akta Kelahiran</h4>
                            <span class="text-[11px] text-slate-500 block">Scan / Berkas Akta Anak</span>
                            @if($pendaftaran->file_akta)
                                <a href="{{ asset('storage/' . $pendaftaran->file_akta) }}" target="_blank" class="inline-flex items-center gap-1 text-xs font-bold text-sky-600 hover:text-sky-700 mt-1">
                                    <i data-lucide="download" class="w-3.5 h-3.5"></i> Unduh / Pratinjau Dokumen
                                </a>
                            @else
                                <span class="text-xs text-rose-500 font-semibold">Belum Diunggah</span>
                            @endif
                        </div>
                    </div>

                    <!-- Kartu Keluarga -->
                    <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-emerald-100 text-emerald-600 flex items-center justify-center shrink-0">
                            <i data-lucide="file-text" class="w-6 h-6"></i>
                        </div>
                        <div class="flex-grow space-y-1">
                            <h4 class="font-heading font-bold text-xs sm:text-sm text-slate-800">3. Kartu Keluarga (KK)</h4>
                            <span class="text-[11px] text-slate-500 block">Scan Kartu Keluarga Asli</span>
                            @if($pendaftaran->file_kk)
                                <a href="{{ asset('storage/' . $pendaftaran->file_kk) }}" target="_blank" class="inline-flex items-center gap-1 text-xs font-bold text-sky-600 hover:text-sky-700 mt-1">
                                    <i data-lucide="download" class="w-3.5 h-3.5"></i> Unduh / Pratinjau Dokumen
                                </a>
                            @else
                                <span class="text-xs text-rose-500 font-semibold">Belum Diunggah</span>
                            @endif
                        </div>
                    </div>

                    <!-- Ijazah TK (Opsional) -->
                    <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-100 text-amber-600 flex items-center justify-center shrink-0">
                            <i data-lucide="award" class="w-6 h-6"></i>
                        </div>
                        <div class="flex-grow space-y-1">
                            <h4 class="font-heading font-bold text-xs sm:text-sm text-slate-800">4. Ijazah / SKL TK</h4>
                            <span class="text-[11px] text-slate-500 block">Surat Keterangan Lulus (Opsional)</span>
                            @if($pendaftaran->file_tk)
                                <a href="{{ asset('storage/' . $pendaftaran->file_tk) }}" target="_blank" class="inline-flex items-center gap-1 text-xs font-bold text-sky-600 hover:text-sky-700 mt-1">
                                    <i data-lucide="download" class="w-3.5 h-3.5"></i> Unduh / Pratinjau Dokumen
                                </a>
                            @else
                                <span class="text-xs text-slate-400">Tidak ada berkas (Opsional)</span>
                            @endif
                        </div>
                    </div>

                    <!-- Sertifikat Prestasi (Opsional) -->
                    <div class="p-4 rounded-2xl border border-slate-200 bg-slate-50/50 flex items-start gap-4 sm:col-span-2">
                        <div class="w-12 h-12 rounded-xl bg-purple-100 text-purple-600 flex items-center justify-center shrink-0">
                            <i data-lucide="trophy" class="w-6 h-6"></i>
                        </div>
                        <div class="flex-grow space-y-1">
                            <h4 class="font-heading font-bold text-xs sm:text-sm text-slate-800">5. Sertifikat / Piagam Prestasi</h4>
                            <span class="text-[11px] text-slate-500 block">Lampiran pendukung jalur prestasi / bakat minat</span>
                            @if($pendaftaran->file_prestasi)
                                <a href="{{ asset('storage/' . $pendaftaran->file_prestasi) }}" target="_blank" class="inline-flex items-center gap-1 text-xs font-bold text-purple-600 hover:text-purple-700 mt-1">
                                    <i data-lucide="download" class="w-3.5 h-3.5"></i> Unduh / Pratinjau Sertifikat
                                </a>
                            @else
                                <span class="text-xs text-slate-400">Tidak ada sertifikat dilampirkan</span>
                            @endif
                        </div>
                    </div>

                </div>
            </div>

        </div>

        <!-- Right Col: Verification Control & Status Updater -->
        <div class="space-y-6">
            
            <div class="bg-white rounded-3xl p-6 shadow-xs border border-slate-200/80 space-y-5 sticky top-24">
                <div class="border-b border-slate-100 pb-3">
                    <h3 class="font-heading font-bold text-base text-slate-900">Ubah Status & Verifikasi</h3>
                    <p class="text-xs text-slate-400 mt-0.5">Tentukan tahapan kelulusan calon peserta didik</p>
                </div>

                <form action="{{ route('admin.pendaftaran.updateStatus', $pendaftaran) }}" method="POST" class="space-y-4">
                    @csrf
                    @method('PATCH')

                    <div>
                        <label for="status" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Status Pendaftaran</label>
                        <select name="status" id="status" class="w-full px-3.5 py-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-100 text-xs sm:text-sm bg-white font-medium">
                            <option value="menunggu" {{ $pendaftaran->status == 'menunggu' ? 'selected' : '' }}>⏳ Menunggu Verifikasi</option>
                            <option value="revisi_berkas" {{ $pendaftaran->status == 'revisi_berkas' ? 'selected' : '' }}>⚠️ Revisi Berkas (Perlu Diperbaiki)</option>
                            <option value="berkas_valid" {{ $pendaftaran->status == 'berkas_valid' ? 'selected' : '' }}>📄 Berkas Valid (Siap Observasi)</option>
                            <option value="lulus" {{ $pendaftaran->status == 'lulus' ? 'selected' : '' }}>🎉 Lulus Seleksi (Diterima)</option>
                            <option value="ditolak" {{ $pendaftaran->status == 'ditolak' ? 'selected' : '' }}>❌ Ditolak</option>
                        </select>
                    </div>

                    <div>
                        <label for="catatan_admin" class="block text-xs font-bold text-slate-700 uppercase tracking-wider mb-2">Catatan Verifikator / Panitia</label>
                        <textarea name="catatan_admin" id="catatan_admin" rows="4" placeholder="Contoh: Mohon unggah ulang scan Kartu Keluarga karena gambar buram/terpotong, atau cantumkan jadwal observasi." class="w-full p-3 rounded-xl border border-slate-300 focus:border-sky-500 focus:ring-2 focus:ring-sky-100 text-xs sm:text-sm outline-none">{{ old('catatan_admin', $pendaftaran->catatan_admin) }}</textarea>
                    </div>

                    <button type="submit" class="w-full py-3 px-4 rounded-xl bg-slate-900 hover:bg-slate-800 text-white font-heading font-bold text-xs sm:text-sm shadow-md transition flex items-center justify-center gap-2 cursor-pointer">
                        <i data-lucide="check" class="w-4 h-4"></i>
                        <span>Simpan Perubahan Status</span>
                    </button>
                </form>

                <div class="pt-4 border-t border-slate-100 text-xs text-slate-500 space-y-2">
                    <div class="flex justify-between">
                        <span>Status Saat Ini:</span>
                        <strong class="text-slate-800">{{ $pendaftaran->status_label }}</strong>
                    </div>
                    <div class="flex justify-between">
                        <span>Waktu Pendaftaran:</span>
                        <span>{{ $pendaftaran->created_at->format('d/m/Y H:i') }}</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Terakhir Update:</span>
                        <span>{{ $pendaftaran->updated_at->format('d/m/Y H:i') }}</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@endsection
