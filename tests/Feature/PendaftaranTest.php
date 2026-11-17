<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Pendaftaran;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class PendaftaranTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Black Box / Functional Test: Halaman pendaftaran dapat diakses dengan sukses
     */
    public function test_pendaftaran_page_returns_successful_response(): void
    {
        $response = $this->get('/pendaftaran');

        $response->assertStatus(200);
        $response->assertSee('Formulir Pendaftaran Siswa Baru');
        $response->assertSee('SD Negeri 1 Suka Cita Purwokerto');
        $response->assertSee('Upload Dokumen');
    }

    /**
     * Black Box & White Box: Validasi gagal jika kolom wajib dikosongkan (Negative Case)
     */
    public function test_pendaftaran_validation_fails_when_required_fields_are_missing(): void
    {
        $response = $this->postJson('/pendaftaran', []);

        $response->assertStatus(422);
        $response->assertJsonValidationErrors([
            'jalur_pendaftaran',
            'nama_lengkap',
            'nama_panggilan',
            'nik',
            'tempat_lahir',
            'tanggal_lahir',
            'jenis_kelamin',
            'agama',
            'alamat',
            'nama_ayah',
            'nama_ibu',
            'whatsapp',
        ]);
    }

    /**
     * Boundary Value Analysis: NIK harus persis 16 digit
     */
    public function test_pendaftaran_validation_fails_when_nik_is_not_16_digits(): void
    {
        // Kasus 1: NIK 15 digit (kurang 1)
        $payload15 = [
            'jalur_pendaftaran' => 'Reguler',
            'nama_lengkap' => 'Bintang Pratama',
            'nama_panggilan' => 'Bintang',
            'nik' => '330201123456789', // 15 digit
            'tempat_lahir' => 'Purwokerto',
            'tanggal_lahir' => '2019-01-01',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Purwokerto',
            'nama_ayah' => 'Ayah',
            'nama_ibu' => 'Ibu',
            'whatsapp' => '081234567890',
        ];

        $response1 = $this->postJson('/pendaftaran', $payload15);
        $response1->assertStatus(422);
        $response1->assertJsonValidationErrors(['nik']);

        // Kasus 2: NIK 17 digit (lebih 1)
        $payload17 = array_merge($payload15, ['nik' => '33020112345678901']); // 17 digit
        $response2 = $this->postJson('/pendaftaran', $payload17);
        $response2->assertStatus(422);
        $response2->assertJsonValidationErrors(['nik']);
    }

    /**
     * Positive Test: Submit pendaftaran berhasil via POST JSON
     */
    public function test_pendaftaran_can_be_submitted_via_post(): void
    {
        $payload = [
            'jalur_pendaftaran' => 'Reguler',
            'nama_lengkap' => 'Aditya Pratama',
            'nama_panggilan' => 'Adit',
            'nik' => '3174051234567899',
            'tempat_lahir' => 'Purwokerto',
            'tanggal_lahir' => '2019-05-10',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Jl. Gerilya No. 10 Purwokerto',
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
            'status' => 'menunggu',
        ]);
    }

    /**
     * White Box & Black Box: Pengunggahan berkas file akta dan foto ke storage
     */
    public function test_pendaftaran_with_file_uploads_stores_files_correctly(): void
    {
        Storage::fake('public');

        $payload = [
            'jalur_pendaftaran' => 'Prestasi',
            'nama_lengkap' => 'Salma Ramadhani',
            'nama_panggilan' => 'Salma',
            'nik' => '3302015505190002',
            'tempat_lahir' => 'Purwokerto',
            'tanggal_lahir' => '2019-05-15',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'alamat' => 'Jl. Suparjo Rustam No. 12',
            'nama_ayah' => 'Hendra',
            'nama_ibu' => 'Rini',
            'whatsapp' => '081298765432',
            'file_foto' => UploadedFile::fake()->image('pasfoto.png', 300, 400),
            'file_akta' => UploadedFile::fake()->create('akta.pdf', 500, 'application/pdf'),
        ];

        $response = $this->postJson('/pendaftaran', $payload);

        $response->assertStatus(200);
        $response->assertJsonPath('success', true);

        $pendaftar = Pendaftaran::where('nik', '3302015505190002')->first();
        $this->assertNotNull($pendaftar);
        $this->assertNotNull($pendaftar->file_foto);
        $this->assertNotNull($pendaftar->file_akta);

        Storage::disk('public')->assertExists($pendaftar->file_foto);
        Storage::disk('public')->assertExists($pendaftar->file_akta);
    }

    /**
     * Security / Access Control: Rute admin wajib autentikasi
     */
    public function test_admin_dashboard_requires_authentication(): void
    {
        $response = $this->get('/admin/pendaftaran');
        $response->assertRedirect('/admin/login');
    }

    /**
     * Positive Test: Admin yang telah login dapat melihat daftar pendaftar
     */
    public function test_admin_can_login_and_view_applicants(): void
    {
        $admin = User::factory()->create([
            'email' => 'admin@sukacita.sch.id',
            'password' => bcrypt('password123'),
        ]);

        $response = $this->actingAs($admin)->get('/admin/pendaftaran');
        $response->assertStatus(200);
        $response->assertSee('Data Pendaftar PPDB Online');
    }

    /**
     * Functional Test: Admin dapat memfilter dan mencari data pendaftar
     */
    public function test_admin_can_search_and_filter_applicants(): void
    {
        $admin = User::factory()->create();

        Pendaftaran::create([
            'nomor_registrasi' => 'PPDB-2026-11111',
            'jalur_pendaftaran' => 'Tahfidz',
            'nama_lengkap' => 'Ahmad Fauzan',
            'nama_panggilan' => 'Fauzan',
            'nik' => '3302011111111111',
            'tempat_lahir' => 'Purwokerto',
            'tanggal_lahir' => '2019-02-02',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Purwokerto',
            'nama_ayah' => 'Ayah Ahmad',
            'nama_ibu' => 'Ibu Ahmad',
            'whatsapp' => '081111111111',
            'status' => 'lulus',
        ]);

        Pendaftaran::create([
            'nomor_registrasi' => 'PPDB-2026-22222',
            'jalur_pendaftaran' => 'Reguler',
            'nama_lengkap' => 'Bela Cantika',
            'nama_panggilan' => 'Bela',
            'nik' => '3302012222222222',
            'tempat_lahir' => 'Purwokerto',
            'tanggal_lahir' => '2019-03-03',
            'jenis_kelamin' => 'Perempuan',
            'agama' => 'Islam',
            'alamat' => 'Purwokerto',
            'nama_ayah' => 'Ayah Bela',
            'nama_ibu' => 'Ibu Bela',
            'whatsapp' => '082222222222',
            'status' => 'menunggu',
        ]);

        // Cari berdasarkan nama
        $searchResponse = $this->actingAs($admin)->get('/admin/pendaftaran?search=Fauzan');
        $searchResponse->assertStatus(200);
        $searchResponse->assertSee('Ahmad Fauzan');
        $searchResponse->assertDontSee('Bela Cantika');

        // Filter berdasarkan status
        $filterResponse = $this->actingAs($admin)->get('/admin/pendaftaran?status=lulus');
        $filterResponse->assertStatus(200);
        $filterResponse->assertSee('Ahmad Fauzan');
        $filterResponse->assertDontSee('Bela Cantika');
    }

    /**
     * Functional Test: Admin dapat memperbarui status pendaftaran (termasuk Revisi Berkas)
     */
    public function test_admin_can_update_status_to_revisi_berkas(): void
    {
        $admin = User::factory()->create();

        $pendaftaran = Pendaftaran::create([
            'nomor_registrasi' => 'PPDB-2026-TEST1',
            'jalur_pendaftaran' => 'Reguler',
            'nama_lengkap' => 'Tes Siswa',
            'nama_panggilan' => 'Tes',
            'nik' => '3174051234567800',
            'tempat_lahir' => 'Purwokerto',
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

    /**
     * Functional Test: Admin dapat melihat detail pendaftaran
     */
    public function test_admin_can_view_pendaftaran_detail(): void
    {
        $admin = User::factory()->create();

        $pendaftaran = Pendaftaran::create([
            'nomor_registrasi' => 'PPDB-2026-SHOW1',
            'jalur_pendaftaran' => 'Reguler',
            'nama_lengkap' => 'Detail Siswa Uji',
            'nama_panggilan' => 'Detail',
            'nik' => '3302019999999999',
            'tempat_lahir' => 'Purwokerto',
            'tanggal_lahir' => '2019-01-01',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Jl. Uji Coba',
            'nama_ayah' => 'Ayah Detail',
            'nama_ibu' => 'Ibu Detail',
            'whatsapp' => '081299999999',
            'status' => 'menunggu',
        ]);

        $response = $this->actingAs($admin)->get("/admin/pendaftaran/{$pendaftaran->id}");
        $response->assertStatus(200);
        $response->assertSee('Detail Siswa Uji');
        $response->assertSee('PPDB-2026-SHOW1');
    }

    /**
     * Functional & White Box: Admin dapat menghapus data dan berkas di storage
     */
    public function test_admin_can_delete_pendaftaran_and_its_files(): void
    {
        Storage::fake('public');
        $admin = User::factory()->create();

        $fakeFoto = 'pendaftaran_berkas/foto_test.jpg';
        Storage::disk('public')->put($fakeFoto, 'fake content');

        $pendaftaran = Pendaftaran::create([
            'nomor_registrasi' => 'PPDB-2026-DEL1',
            'jalur_pendaftaran' => 'Reguler',
            'nama_lengkap' => 'Siswa Dihapus',
            'nama_panggilan' => 'Hapus',
            'nik' => '3302018888888888',
            'tempat_lahir' => 'Purwokerto',
            'tanggal_lahir' => '2019-01-01',
            'jenis_kelamin' => 'Laki-laki',
            'agama' => 'Islam',
            'alamat' => 'Jl. Uji Hapus',
            'nama_ayah' => 'Ayah',
            'nama_ibu' => 'Ibu',
            'whatsapp' => '081288888888',
            'file_foto' => $fakeFoto,
            'status' => 'menunggu',
        ]);

        Storage::disk('public')->assertExists($fakeFoto);

        $response = $this->actingAs($admin)->delete("/admin/pendaftaran/{$pendaftaran->id}");
        $response->assertRedirect('/admin/pendaftaran');

        $this->assertDatabaseMissing('pendaftarans', ['id' => $pendaftaran->id]);
        Storage::disk('public')->assertMissing($fakeFoto);
    }
}
