<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangBelanjaController extends Controller
{
    // Menampilkan data
    public function endix()
    {
        $keranjang = DB::table('keranjangbelanja')->get();

        return view('endix', [
            'keranjang' => $keranjang
        ]);
    }

    // Menampilkan form tambah
    public function add()
    {
        return view('add');
    }

    // Menyimpan data
    public function store(Request $request)
    {
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->kodebarang,
            'jumlah'      => $request->jumlah,
            'harga'       => $request->harga
        ]);

        return redirect('/keranjang');
    }

    // Menghapus data
    public function delete($id)
    {
        DB::table('keranjangbelanja')
            ->where('id', $id)
            ->delete();

        return redirect('/keranjang');
    }
}

