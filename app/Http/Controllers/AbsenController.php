<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;

class AbsenController extends Controller
{
    // ✅ Menampilkan semua data absen
    public function index()
    {
        $data = Absen::all(); // Ambil semua data absen dari database
        return view('absen.index', compact('data')); // Kirim ke view
    }


    // ✅ Menampilkan form tambah absen
    public function create()
    {
        return view('absen.create'); // Menampilkan form input
    }

    // ✅ Menyimpan data baru
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'no_absen' => 'required',
            'nama'     => 'required',
            'kelas'    => 'required',
        ]);

        // Simpan data ke tabel absen
        Absen::create([
            'no_absen' => $request->no_absen,
            'nama'     => $request->nama,
            'kelas'    => $request->kelas,
        ]);

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('absen.index')->with('success', 'Data berhasil disimpan');
    }

    // ✅ Menampilkan form edit data
    public function edit($id)
    {
        $data = Absen::findOrFail($id); // Cari data berdasarkan ID
        return view('absen.edit', compact('data')); // Kirim data ke view edit
    }

    // ✅ Menyimpan perubahan data yang diedit
   public function update(Request $request, $id)
    {
        $request->validate([
            'no_absen' => 'required',
            'nama'     => 'required',
            'kelas'    => 'required',
        ]);

        $absen = Absen::findOrFail($id);

        $absen->update([
            'no_absen' => $request->no_absen,
            'nama'     => $request->nama,
            'kelas'    => $request->kelas,
        ]);

        return redirect()->route('absen.index')->with('success', 'Data berhasil diperbarui');
    }


    // ✅ Menghapus data
    public function destroy($id)
    {
        $absen = Absen::findOrFail($id); // Cari data berdasarkan ID
        $absen->delete(); // Hapus data

        return redirect()->route('absen.index')->with('success', 'Data absen berhasil dihapus.');
    }
}
