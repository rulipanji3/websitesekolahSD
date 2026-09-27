<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::updateOrCreate(
            ['email' => 'admin@bintangceria.sch.id'],
            [
                'name' => 'Administrator PPDB',
                'password' => bcrypt('admin123'),
            ]
        );

        // Dummy Sample Registrations for demonstration
        \App\Models\Pendaftaran::updateOrCreate(
            ['nomor_registrasi' => 'PPDB-2026-10482'],
            [
                'jalur_pendaftaran' => 'Reguler',
                'nama_lengkap' => 'Muhammad Bintang Pratama',
                'nama_panggilan' => 'Bintang',
                'nik' => '3174051208190001',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2019-08-12',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'alamat' => 'Jl. Kebon Jeruk No. 25, Kebayoran Baru, Jakarta Selatan',
                'nama_ayah' => 'Rahmat Hidayat, S.T.',
                'pekerjaan_ayah' => 'Karyawan Swasta',
                'nama_ibu' => 'Siti Nurhaliza, S.Pd.',
                'pekerjaan_ibu' => 'Guru',
                'whatsapp' => '081298765432',
                'penghasilan' => 'Rp 5.000.000 - Rp 10.000.000',
                'status' => 'menunggu',
                'catatan_admin' => 'Menunggu verifikasi fisik berkas akta.',
            ]
        );

        \App\Models\Pendaftaran::updateOrCreate(
            ['nomor_registrasi' => 'PPDB-2026-28491'],
            [
                'jalur_pendaftaran' => 'Prestasi',
                'nama_lengkap' => 'Aisyah Putri Azzahra',
                'nama_panggilan' => 'Aisyah',
                'nik' => '3174055502190002',
                'tempat_lahir' => 'Bandung',
                'tanggal_lahir' => '2019-02-15',
                'jenis_kelamin' => 'Perempuan',
                'agama' => 'Islam',
                'alamat' => 'Jl. Melati Indah Blok C3 No. 12, Jakarta Selatan',
                'nama_ayah' => 'Dr. Hendra Gunawan',
                'pekerjaan_ayah' => 'Dokter',
                'nama_ibu' => 'drg. Maya Anggraini',
                'pekerjaan_ibu' => 'Dokter Gigi',
                'whatsapp' => '081312345678',
                'penghasilan' => '> Rp 10.000.000',
                'status' => 'berkas_valid',
                'catatan_admin' => 'Juara 1 Lomba Mewarnai Tingkat DKI Jakarta. Berkas lengkap.',
            ]
        );

        \App\Models\Pendaftaran::updateOrCreate(
            ['nomor_registrasi' => 'PPDB-2026-39102'],
            [
                'jalur_pendaftaran' => 'Tahfidz',
                'nama_lengkap' => 'Fathan Al-Ghifari',
                'nama_panggilan' => 'Fathan',
                'nik' => '3174051004190003',
                'tempat_lahir' => 'Jakarta',
                'tanggal_lahir' => '2019-04-10',
                'jenis_kelamin' => 'Laki-laki',
                'agama' => 'Islam',
                'alamat' => 'Jl. Gandaria No. 8, Jakarta Selatan',
                'nama_ayah' => 'Ust. Ahmad Fauzi, Lc.',
                'pekerjaan_ayah' => 'Wiraswasta',
                'nama_ibu' => 'Khadijah Maryam',
                'pekerjaan_ibu' => 'Ibu Rumah Tangga',
                'whatsapp' => '08119887766',
                'penghasilan' => 'Rp 5.000.000 - Rp 10.000.000',
                'status' => 'lulus',
                'catatan_admin' => 'Lulus tes hafalan Juz 30 dengan predikat Mumtaz.',
            ]
        );
    }
}
