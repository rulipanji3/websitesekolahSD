<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function getStatusLabelAttribute(): string
    {
        return match($this->status) {
            'berkas_valid' => 'Berkas Valid',
            'revisi_berkas' => 'Revisi Berkas',
            'lulus' => 'Lulus Seleksi',
            'ditolak' => 'Ditolak',
            default => 'Menunggu Verifikasi',
        };
    }

    public function getStatusColorAttribute(): string
    {
        return match($this->status) {
            'berkas_valid' => 'bg-blue-100 text-blue-800 border-blue-200',
            'revisi_berkas' => 'bg-orange-100 text-orange-800 border-orange-200',
            'lulus' => 'bg-emerald-100 text-emerald-800 border-emerald-200',
            'ditolak' => 'bg-rose-100 text-rose-800 border-rose-200',
            default => 'bg-amber-100 text-amber-800 border-amber-200',
        };
    }
}
