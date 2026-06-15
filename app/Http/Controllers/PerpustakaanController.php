<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PerpustakaanController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $buku = DB::table('buku')->get();

        return view('indexbuku', [
            'buku' => $buku
        ]);
    }

    // Form tambah
    public function create()
    {
        return view('createbuku');
    }

    // Simpan data
    public function store(Request $request)
    {
        DB::table('buku')->insert([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'sedang_dipinjam' => $request->sedang_dipinjam


        ]);

        return redirect('/buku');
    }
//     public function store(Request $request)
// {
//     dd($request->all());
// }
public function pinjam($id)
{
    DB::table('buku')
        ->where('id', $id)
        ->update([
            'sedang_dipinjam' => 1
        ]);

    return redirect('/buku')->with('success', 'Buku berhasil dipinjam!');
}


    // Form edit
    public function edit($id)
    {
        $buku = DB::table('buku')
                    ->where('id', $id)
                    ->first();

        return view('editbuku', [
            'buku' => $buku
        ]);
    }

    // Update data
    public function update(Request $request, $id)
    {
        DB::table('buku')
            ->where('id', $id)
            ->update([
                'judul' => $request->judul,
            'penulis' => $request->penulis,
            'tahun' => $request->tahun,
            'sedang_dipinjam' => $request->sedang_dipinjam
            ]);

        return redirect('/buku');
    }

    // Hapus data
    public function delete($id)
    {
        DB::table('buku')
            ->where('id', $id)
            ->delete();

        return redirect('/buku');
    }
}

