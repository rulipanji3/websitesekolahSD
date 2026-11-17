<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Pendaftaran;
use Carbon\Carbon;

class PendaftaranModelTest extends TestCase
{
    /**
     * White Box Test: Menguji branch coverage getStatusLabelAttribute()
     */
    public function test_get_status_label_attribute_covers_all_branches(): void
    {
        $cases = [
            'berkas_valid'  => 'Berkas Valid',
            'revisi_berkas' => 'Revisi Berkas',
            'lulus'         => 'Lulus Seleksi',
            'ditolak'       => 'Ditolak',
            'menunggu'      => 'Menunggu Verifikasi',
            'unknown_code'  => 'Menunggu Verifikasi', // Default branch
        ];

        foreach ($cases as $statusCode => $expectedLabel) {
            $model = new Pendaftaran(['status' => $statusCode]);
            $this->assertEquals(
                $expectedLabel,
                $model->status_label,
                "Branch status '{$statusCode}' gagal menghasilkan label yang diharapkan."
            );
        }
    }

    /**
     * White Box Test: Menguji branch coverage getStatusColorAttribute()
     */
    public function test_get_status_color_attribute_covers_all_branches(): void
    {
        $cases = [
            'berkas_valid'  => 'bg-blue-100 text-blue-800 border-blue-200',
            'revisi_berkas' => 'bg-orange-100 text-orange-800 border-orange-200',
            'lulus'         => 'bg-emerald-100 text-emerald-800 border-emerald-200',
            'ditolak'       => 'bg-rose-100 text-rose-800 border-rose-200',
            'menunggu'      => 'bg-amber-100 text-amber-800 border-amber-200',
            'invalid_val'   => 'bg-amber-100 text-amber-800 border-amber-200', // Default branch
        ];

        foreach ($cases as $statusCode => $expectedClass) {
            $model = new Pendaftaran(['status' => $statusCode]);
            $this->assertEquals(
                $expectedClass,
                $model->status_color,
                "Branch status '{$statusCode}' gagal menghasilkan CSS class color yang diharapkan."
            );
        }
    }

    /**
     * White Box Test: Menguji casting tanggal_lahir ke instance Carbon / Date
     */
    public function test_tanggal_lahir_is_cast_to_carbon_date(): void
    {
        $model = new Pendaftaran(['tanggal_lahir' => '2019-05-12']);

        $this->assertInstanceOf(Carbon::class, $model->tanggal_lahir);
        $this->assertEquals('2019-05-12', $model->tanggal_lahir->format('Y-m-d'));
    }
}
