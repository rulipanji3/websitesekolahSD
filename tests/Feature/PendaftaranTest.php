<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PendaftaranTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Test pendaftaran page returns successful response.
     */
    public function test_pendaftaran_page_returns_successful_response(): void
    {
        $response = $this->get('/pendaftaran');

        $response->assertStatus(200);
        $response->assertSee('Formulir Pendaftaran Siswa Baru');
        $response->assertSee('SD Negeri 1 Suka Cita Purwokerto');
        $response->assertSee('Upload Dokumen');
    }

    public function test_pendaftaran_can_be_submitted_via_post(): void
    {
        $payload = [
            'jalur_pendaftaran' => 'Reguler',
            'nama_lengkap' => 'Aditya Pratama',
            'nama_panggilan' => 'Adit',
            'nik' => '3174051234567899',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '2019-05-10',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Jl. Kebon Sirih No. 10',
            'nama_ayah' => 'Budi Santoso',
            'pekerjaan_ayah' => 'Wiraswasta',
            'nama_ibu' => 'Dewi Sartika',
            'pekerjaan_ibu' => 'PNS',
            'whatsapp' => '081234567899',
            'penghasilan' => 'Rp 5.000.000 - Rp 10.000.000',
        ];

        $response = $this->postJson('/pendaftaran', $payload);

        $response->assertStatus(200);
        $response->assertJsonPath('success', true);
        $this->assertDatabaseHas('pendaftarans', [
            'nik' => '3174051234567899',
            'nama_lengkap' => 'Aditya Pratama',
        ]);
    }

    public function test_admin_dashboard_requires_authentication(): void
    {
        $response = $this->get('/admin/pendaftaran');
        $response->assertRedirect('/admin/login');
    }

    public function test_admin_can_login_and_view_applicants(): void
    {
        $admin = \App\Models\User::firstOrCreate(
            ['email' => 'admin@bintangceria.sch.id'],
            ['name' => 'Admin Test', 'password' => bcrypt('admin123')]
        );

        $response = $this->actingAs($admin)->get('/admin/pendaftaran');
        $response->assertStatus(200);
        $response->assertSee('Data Pendaftar PPDB Online');
    }

    public function test_admin_can_update_status_to_revisi_berkas(): void
    {
        $admin = \App\Models\User::firstOrCreate(
            ['email' => 'admin@bintangceria.sch.id'],
            ['name' => 'Admin Test', 'password' => bcrypt('admin123')]
        );

        $pendaftaran = \App\Models\Pendaftaran::create([
            'nomor_registrasi' => 'PPDB-2026-TEST1',
            'jalur_pendaftaran' => 'Reguler',
            'nama_lengkap' => 'Tes Siswa',
            'nama_panggilan' => 'Tes',
            'nik' => '3174051234567800',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '2019-01-01',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Jl. Uji Coba',
            'nama_ayah' => 'Ayah Tes',
            'nama_ibu' => 'Ibu Tes',
            'whatsapp' => '081200000000',
            'status' => 'menunggu',
        ]);

        $response = $this->actingAs($admin)->patch("/admin/pendaftaran/{$pendaftaran->id}/status", [
            'status' => 'revisi_berkas',
            'catatan_admin' => 'Foto Akta buram, mohon upload ulang.',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('pendaftarans', [
            'id' => $pendaftaran->id,
            'status' => 'revisi_berkas',
            'catatan_admin' => 'Foto Akta buram, mohon upload ulang.',
        ]);
    }
}
