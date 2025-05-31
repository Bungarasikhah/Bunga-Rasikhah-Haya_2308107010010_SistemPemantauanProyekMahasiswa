<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyek;

class ProyekController extends Controller
{
    // Tampilkan semua proyek
    public function showProyek()
    {
        $proyeks = Proyek::all();
        return view('proyek', compact('proyeks'));
    }

    // Simpan proyek baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'mahasiswa' => 'required|string',
            'status' => 'required|string',
            'periode_awal' => 'required|date',
            'periode_akhir' => 'required|date',
        ]);

        Proyek::create([
            'judul' => $validated['judul'],
            'mahasiswa' => $validated['mahasiswa'],
            'status' => $validated['status'],
            'periode_mulai' => $validated['periode_awal'],     // disesuaikan
            'periode_selesai' => $validated['periode_akhir'],  // disesuaikan
        ]);

        return redirect()->route('proyek')->with('success', 'Proyek berhasil ditambahkan');
    }

    // Tampilkan detail proyek
    public function show($id)
    {
        $proyek = Proyek::findOrFail($id);
        return view('proyek.showProyek', compact('proyek'));
    }

    // Form edit proyek
    public function edit($id)
    {
        $proyek = Proyek::findOrFail($id);
        return view('proyek.edit', compact('proyek'));
    }

    // Simpan perubahan proyek
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'mahasiswa' => 'required|string',
            'status' => 'required|string',
            'periode_awal' => 'required|date',
            'periode_akhir' => 'required|date',
        ]);

        $proyek = Proyek::findOrFail($id);
        $proyek->update([
            'judul' => $validated['judul'],
            'mahasiswa' => $validated['mahasiswa'],
            'status' => $validated['status'],
            'periode_mulai' => $validated['periode_awal'],     // disesuaikan
            'periode_selesai' => $validated['periode_akhir'],  // disesuaikan
        ]);

        return redirect()->route('proyek')->with('success', 'Proyek berhasil diperbarui');
    }

    // Hapus proyek
    public function destroy($id)
    {
        $proyek = Proyek::findOrFail($id);
        $proyek->delete();

        return redirect()->route('proyek')->with('success', 'Proyek berhasil dihapus');
    }
}
