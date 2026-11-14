<?php

namespace App\Http\Controllers;

use App\Services\PacificV4Service;
use Illuminate\Http\Request;

class KomplainController extends Controller
{
    /**
     * Tampilkan halaman formulir komplain
     */
    public function index()
    {
        return view('komplain');
    }

    /**
     * Kirim data komplain ke PacificV4 via API
     */
    public function store(Request $request, PacificV4Service $pacificService)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'nullable|email|max:100',
            'no_hp' => 'required|string|max:20',
            'cabang' => 'nullable|string|max:100',
            'kategori' => 'required|string',
            'no_transaksi' => 'nullable|string|max:50',
            'pesan' => 'required|string|min:10|max:2000',
            'lampiran' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:5120', // max 5MB
        ], [
            'nama.required' => 'Nama lengkap wajib diisi.',
            'no_hp.required' => 'Nomor WhatsApp / telepon wajib diisi.',
            'kategori.required' => 'Pilih kategori keluhan Anda.',
            'pesan.required' => 'Deskripsi keluhan wajib diisi.',
            'pesan.min' => 'Deskripsi keluhan minimal 10 karakter.',
            'lampiran.max' => 'Ukuran file lampiran maksimal 5MB.',
        ]);

        $lampiran = $request->file('lampiran');
        unset($validated['lampiran']);

        // Teruskan data ke PacificV4 secara server-to-server (rahasia & aman)
        $result = $pacificService->kirimKomplain($validated, $lampiran);

        if ($result['success']) {
            return back()->with('success', 'Keluhan Anda berhasil diterima. Tim customer service kami akan segera menindaklanjuti.');
        }

        return back()->withInput()->with('error', $result['message']);
    }
}

