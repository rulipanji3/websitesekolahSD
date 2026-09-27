<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_registrasi')->unique();
            $table->string('jalur_pendaftaran')->default('Reguler');

            // Data Calon Siswa
            $table->string('nama_lengkap');
            $table->string('nama_panggilan')->nullable();
            $table->string('nik', 16);
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->text('alamat');

            // Data Orang Tua / Kontak
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('whatsapp', 30);
            $table->string('penghasilan')->nullable();

            // Berkas Dokumen (Path di public storage)
            $table->string('file_foto')->nullable();
            $table->string('file_akta')->nullable();
            $table->string('file_kk')->nullable();
            $table->string('file_tk')->nullable();
            $table->string('file_prestasi')->nullable();

            // Status Pendaftaran: 'menunggu', 'berkas_valid', 'lulus', 'ditolak'
            $table->string('status')->default('menunggu');
            $table->text('catatan_admin')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftarans');
    }
};
