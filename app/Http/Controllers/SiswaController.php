<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class SiswaController extends Controller
{
    // Tampilkan semua data siswa
    public function index()
    {
        $siswa = DB::table('siswa')
                    ->orderBy('NRP')
                    ->get();

        return view('indexsiswa', compact('siswa'));
    }

    // Tampilkan form tambah siswa
    public function create()
    {
        return view('createsiswa');
    }

    // Simpan data siswa
    public function store(Request $request)
    {
        $request->validate([
            'NRP' => 'required|string|max:10|unique:siswa,NRP',
            'Nama' => 'required|string|max:20',
            'Kelas' => 'required|string|max:5',
            'TanggalLahir' => 'required|date',
        ]);

        DB::table('siswa')->insert([
            'NRP' => $request->NRP,
            'Nama' => $request->Nama,
            'Kelas' => $request->Kelas,
            'TanggalLahir' => $request->TanggalLahir,
        ]);

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil ditambahkan.');
    }

    // Tampilkan form edit siswa
    public function edit($nrp)
    {
        $siswa = DB::table('siswa')
                    ->where('NRP', $nrp)
                    ->first();

        if (!$siswa) {
            abort(404);
        }

        return view('editsiswa', compact('siswa'));
    }

    // Update data siswa
    public function update(Request $request, $nrp)
    {
        $request->validate([
            'NRP' => [
                'required',
                'string',
                'max:10',
                Rule::unique('siswa', 'NRP')->ignore($nrp, 'NRP'),
            ],
            'Nama' => 'required|string|max:20',
            'Kelas' => 'required|string|max:5',
            'TanggalLahir' => 'required|date',
        ]);

        DB::table('siswa')
            ->where('NRP', $nrp)
            ->update([
                'NRP' => $request->NRP,
                'Nama' => $request->Nama,
                'Kelas' => $request->Kelas,
                'TanggalLahir' => $request->TanggalLahir,
            ]);

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil diubah.');
    }

    // Hapus data siswa
    public function destroy($nrp)
    {
        DB::table('siswa')
            ->where('NRP', $nrp)
            ->delete();

        return redirect()->route('siswa.index')
                         ->with('success', 'Data siswa berhasil dihapus.');
    }
}
