<p align="center">
  <img src="screenshots/01_landing_hero.png" width="850" alt="Website SD Negeri 1 Suka Cita Purwokerto" style="border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.15);">
</p>

<h1 align="center">🏫 Website Profil & Sistem PPDB Online<br>SD Negeri 1 Suka Cita Purwokerto</h1>

<p align="center">
  <strong>Platform Web Sekolah Dasar Modern, Ramah Anak, Interaktif 3D, dan Sistem Penerimaan Peserta Didik Baru (PPDB) Terintegrasi.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-13.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel 13">
  <img src="https://img.shields.io/badge/Tailwind_CSS-v4-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white" alt="Tailwind CSS">
  <img src="https://img.shields.io/badge/Three.js-3D_Animation-black?style=for-the-badge&logo=three.js&logoColor=white" alt="Three.js">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP 8.3">
</p>

---

## 🌟 Galeri Tampilan Aplikasi (Screenshots)

### 1. Landing Page Utama (Desktop View)
| Beranda & Hero 3D Interaktif | Sambutan Kepala Sekolah |
|---|---|
| <img src="screenshots/01_landing_hero.png" width="450"> | <img src="screenshots/02_landing_sambutan_kepsek.png" width="450"> |

| Program Unggulan | Fasilitas & Prestasi Siswa |
|---|---|
| <img src="screenshots/03_landing_program_unggulan.png" width="450"> | <img src="screenshots/04_landing_fasilitas_prestasi.png" width="450"> |

---

### 2. Sistem PPDB Online (Formulir Bertahap / Multi-Step Wizard)
| Tahap 1: Pengisian Data Calon Siswa | Tahap 4: Unggah Berkas & Dokumen |
|---|---|
| <img src="screenshots/06_ppdb_wizard_data_siswa.png" width="450"> | <img src="screenshots/07_ppdb_wizard_upload_berkas.png" width="450"> |

---

### 3. Panel Administrasi PPDB (Admin Dashboard)
| Halaman Login Admin | Dashboard & Manajemen Verifikasi Berkas |
|---|---|
| <img src="screenshots/08_admin_login.png" width="450"> | <img src="screenshots/09_admin_dashboard.png" width="450"> |

---

### 4. Tampilan Responsif Ponsel (Mobile View)
| Tampilan Mobile Beranda | Navigasi Dropdown Mobile |
|---|---|
| <img src="screenshots/10_mobile_responsive.png" width="300"> | <img src="screenshots/11_mobile_navbar_menu.png" width="300"> |

---

## ✨ Fitur-Fitur Unggulan

### 🎓 1. Antarmuka Landing Page Ceria & Ramah Anak
- **Animasi 3D Interaktif (Three.js)**: Animasi maskot pensil, bola dunia, topi toga, dan bintang kejora yang merespons interaksi kursor & sentuhan pengguna.
- **Efek Suara Interaktif (Web Audio API)**: Sound effect ceria saat tombol diklik, dengan opsi Toggle Mute/Unmute di navbar.
- **Navbar Adaptif & Responsif**: Navigasi bergaya pill-capsule yang rapi di layar desktop, tablet, maupun ponsel pintar.
- **Section Lengkap**:
  - Sambutan Kepala Sekolah dengan foto profil dan nilai-nilai inti.
  - Program Unggulan: Robotika Cilik, Bilingual Foundation, Tahfidz Al-Qur'an, dan Karakter Mulia.
  - Galeri Fasilitas Interaktif & Prestasi Juara.
  - Tanya Jawab Seputar PPDB (FAQ Accordion).
  - Peta Lokasi Kampus Purwokerto & Integrasi Floating WhatsApp.

### 📝 2. Sistem Pendaftaran Siswa Baru (PPDB Wizard)
- **Formulir Bertahap (Multi-Step 4 Langkah)**:
  1. *Identitas Calon Siswa* (Jalur Pendaftaran, Nama, NIK, TTL, Jenis Kelamin, Alamat).
  2. *Data Orang Tua / Wali* (Ayah, Ibu, Pekerjaan, Kontak WhatsApp).
  3. *Data Periodik & Kesehatan* (Tinggi/Berat Badan, Riwayat Imunisasi, Jarak ke Sekolah).
  4. *Unggah Berkas Digital* (Akta Kelahiran, Kartu Keluarga, Pas Foto, Ijazah TK, Sertifikat Prestasi).
- **Validasi Klien & Server Real-time**: Memastikan seluruh data valid sebelum dikirim.
- **Cetak Bukti Pendaftaran (PDF/Print Friendly)**: Nomor registrasi unik terbit otomatis (`PPDB-2026-XXXXX`) dan dapat langsung dicetak atau disimpan sebagai PDF.
- **Konfirmasi WhatsApp Otomatis**: Pesan WhatsApp terformat otomatis untuk konfirmasi ke panitia sekolah.

### 🛡️ 3. Panel Admin PPDB & Verifikasi Berkas
- **Autentikasi Aman**: Login berbasis proteksi sesi Laravel.
- **Statistik Pendaftar Real-time**: Indikator total pendaftar, status menunggu verifikasi, berkas valid, revisi berkas, lulus seleksi, dan ditolak.
- **Penyaringan & Pencarian Cepat**: Filter berdasarkan jalur pendaftaran, status seleksi, atau pencarian nama/NIK/nomor registrasi.
- **Fitur Status "Revisi Berkas"**: Verifikator dapat meminta perbaikan dokumen dengan menyertakan catatan kendala dokumen untuk wali murid.
- **Tautan Cepat WhatsApp Panitia**: Panitia dapat langsung menghubungi orang tua siswa dengan satu klik via WhatsApp.

---

## 🛠️ Teknologi & Stack yang Digunakan

- **Backend**: Laravel 13 (PHP 8.3)
- **Frontend**: Blade Templating, Tailwind CSS v4, Vanilla JavaScript
- **3D & Animasi**: Three.js, Canvas Confetti
- **Ikon**: Lucide Icons
- **Database**: MySQL
- **Tooling & Build**: Vite, NPM

---

## 🚀 Panduan Instalasi Lokal

### Prasyarat
- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL Server (Laragon / XAMPP)

### Langkah Pemasangan:

1. **Clone repositori:**
   ```bash
   git clone https://github.com/username/websitesekolahsd.git
   cd websitesekolahsd
   ```

2. **Pasang dependensi PHP & Node:**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment (`.env`):**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Pastikan pengaturan database di `.env` sesuai dengan konfigurasi lokal Anda:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=websitesekolahsd
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Jalankan Migrasi & Database Seeder:**
   ```bash
   php artisan migrate --seed
   ```

5. **Hubungkan Storage untuk Berkas Unggahan:**
   ```bash
   php artisan storage:link
   ```

6. **Kompilasi Aset Frontend:**
   ```bash
   npm run build
   # atau untuk mode pengembangan:
   npm run dev
   ```

7. **Jalankan Server Lokal:**
   ```bash
   php artisan serve
   ```
   Buka browser dan akses: `http://127.0.0.1:8000`

---

## 🔑 Kredensial Akun Administrator

- **URL Login Admin**: `http://127.0.0.1:8000/admin/login`
- **Email**: `admin@bintangceria.sch.id`
- **Password**: `password`

---

## 🧪 Menjalankan Pengujian Otomatis

Proyek ini telah dilengkapi automated testing lengkap:
```bash
php artisan test
```

---

<p align="center">
  Dibuat dengan ❤️ untuk kemajuan pendidikan anak Indonesia.<br>
  <strong>SD Negeri 1 Suka Cita Purwokerto</strong>
</p>
