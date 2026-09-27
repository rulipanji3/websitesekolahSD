<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('pendaftaran');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'jalur_pendaftaran' => 'required|string',
            'nama_lengkap' => 'required|string|max:255',
            'nama_panggilan' => 'required|string|max:100',
            'nik' => 'required|string|size:16',
            'tempat_lahir' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|string',
            'agama' => 'required|string',
            'alamat' => 'required|string',

            'nama_ayah' => 'required|string|max:255',
            'pekerjaan_ayah' => 'nullable|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ibu' => 'nullable|string|max:255',
            'whatsapp' => 'required|string|max:30',
            'penghasilan' => 'nullable|string|max:100',

            'file_foto' => 'nullable|file|mimes:jpeg,png,jpg,webp|max:3072',
            'file_akta' => 'nullable|file|mimes:jpeg,png,jpg,webp,pdf|max:3072',
            'file_kk' => 'nullable|file|mimes:jpeg,png,jpg,webp,pdf|max:3072',
            'file_tk' => 'nullable|file|mimes:jpeg,png,jpg,webp,pdf|max:3072',
            'file_prestasi' => 'nullable|file|mimes:jpeg,png,jpg,webp,pdf|max:3072',
        ]);

        // Generate unique registration code
        $year = date('Y');
        $random = str_pad((string) random_int(1000, 99999), 5, '0', STR_PAD_LEFT);
        $nomorRegistrasi = "PPDB-{$year}-{$random}";

        // Upload files
        $uploaded = [];
        $fileKeys = ['file_foto', 'file_akta', 'file_kk', 'file_tk', 'file_prestasi'];
        foreach ($fileKeys as $key) {
            if ($request->hasFile($key)) {
                $uploaded[$key] = $request->file($key)->store('pendaftaran_berkas', 'public');
            }
        }

        $pendaftaran = \App\Models\Pendaftaran::create(array_merge($validated, $uploaded, [
            'nomor_registrasi' => $nomorRegistrasi,
            'status' => 'menunggu',
        ]));

        return response()->json([
            'success' => true,
            'message' => 'Pendaftaran berhasil dikirim!',
            'data' => [
                'nomor_registrasi' => $pendaftaran->nomor_registrasi,
                'id' => $pendaftaran->id,
                'created_at' => $pendaftaran->created_at->translatedFormat('l, d F Y H:i') . ' WIB',
                'nama_lengkap' => $pendaftaran->nama_lengkap,
                'foto_url' => $pendaftaran->file_foto ? asset('storage/' . $pendaftaran->file_foto) : null,
            ],
        ]);
    }
}
