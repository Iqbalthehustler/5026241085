<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $nilai = DB::table('nilai_peserta')->get();

        return view('indexnilaipeserta', [
            'nilai' => $nilai
        ]);
    }

    // Form tambah
    public function create()
    {
        return view('tambahnilai');
    }

    // Simpan data
    public function store(Request $request)
    {
        DB::table('nilai_peserta')->insert([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek



        ]);

        return redirect('/eas');
    }
//     public function store(Request $request)
// {
//     dd($request->all());
// }
// public function pinjam($id)
// {
//     DB::table('buku')
//         ->where('id', $id)
//         ->update([
//             'sedang_dipinjam' => 1
//         ]);

//     return redirect('/buku')->with('success', 'Buku berhasil dipinjam!');
// }


    // Form edit
    // public function edit($id)
    // {
    //     $buku = DB::table('buku')
    //                 ->where('id', $id)
    //                 ->first();

    //     return view('editbuku', [
    //         'buku' => $buku
    //     ]);
    // }

    // Update data
    public function update(Request $request, $id)
    {
        DB::table('nilai_peserta')
            ->where('id', $id)
            ->update([
            'nopeserta' => $request->nopeserta,
            'nilaiteori' => $request->penulis,
            'nilaipraktek' => $request->tahun
            ]);








        return redirect('/eas');
    }

    // Hapus data
    // public function delete($id)
    // {
    //     DB::table('buku')
    //         ->where('id', $id)
    //         ->delete();

    //     return redirect('/buku');
    // }
}

