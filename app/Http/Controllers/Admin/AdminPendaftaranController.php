<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pendaftaran;
use Illuminate\Support\Facades\Storage;

class AdminPendaftaranController extends Controller
{
    public function index(Request $request)
    {
        $query = Pendaftaran::latest();

        // Search by name, reg number, or NIK
        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                  ->orWhere('nomor_registrasi', 'like', "%{$search}%")
                  ->orWhere('nik', 'like', "%{$search}%")
                  ->orWhere('whatsapp', 'like', "%{$search}%");
            });
        }

        // Filter by Jalur
        if ($jalur = $request->input('jalur')) {
            $query->where('jalur_pendaftaran', $jalur);
        }

        // Filter by Status
        if ($status = $request->input('status')) {
            $query->where('status', $status);
        }

        $pendaftarans = $query->paginate(15)->withQueryString();

        // Stats summary for header cards
        $stats = [
            'total' => Pendaftaran::count(),
            'menunggu' => Pendaftaran::where('status', 'menunggu')->count(),
            'revisi_berkas' => Pendaftaran::where('status', 'revisi_berkas')->count(),
            'berkas_valid' => Pendaftaran::where('status', 'berkas_valid')->count(),
            'lulus' => Pendaftaran::where('status', 'lulus')->count(),
            'ditolak' => Pendaftaran::where('status', 'ditolak')->count(),
        ];

        return view('admin.pendaftaran.index', compact('pendaftarans', 'stats'));
    }

    public function show(Pendaftaran $pendaftaran)
    {
        return view('admin.pendaftaran.show', compact('pendaftaran'));
    }

    public function updateStatus(Request $request, Pendaftaran $pendaftaran)
    {
        $validated = $request->validate([
            'status' => 'required|in:menunggu,revisi_berkas,berkas_valid,lulus,ditolak',
            'catatan_admin' => 'nullable|string|max:500',
        ]);

        $pendaftaran->update($validated);

        return back()->with('success', "Status pendaftaran {$pendaftaran->nomor_registrasi} berhasil diperbarui menjadi: " . $pendaftaran->status_label);
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        // Delete uploaded files if exist
        $fileKeys = ['file_foto', 'file_akta', 'file_kk', 'file_tk', 'file_prestasi'];
        foreach ($fileKeys as $key) {
            if ($pendaftaran->$key && Storage::disk('public')->exists($pendaftaran->$key)) {
                Storage::disk('public')->delete($pendaftaran->$key);
            }
        }

        $nomor = $pendaftaran->nomor_registrasi;
        $pendaftaran->delete();

        return redirect()->route('admin.pendaftaran.index')->with('success', "Data pendaftaran {$nomor} berhasil dihapus.");
    }
}
