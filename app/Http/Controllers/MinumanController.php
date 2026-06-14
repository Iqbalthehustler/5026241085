<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MinumanController extends Controller
{
    // Menampilkan semua data
    public function index()
    {
        $minuman = DB::table('minuman')->get();

        return view('indexminuman', [
            'minuman' => $minuman
        ]);
    }

    // Form tambah
    public function create()
    {
        return view('createminuman');
    }

    // Simpan data
    public function store(Request $request)
    {
        DB::table('minuman')->insert([
            'merkminuman' => $request->merkminuman,
            'stockminuman' => $request->stockminuman,
            'tersedia' => $request->tersedia
        ]);

        return redirect('/minuman');
    }

    // Form edit
    public function edit($id)
    {
        $minuman = DB::table('minuman')
                    ->where('kodeminuman', $id)
                    ->first();

        return view('editminuman', [
            'minuman' => $minuman
        ]);
    }

    // Update data
    public function update(Request $request, $id)
    {
        DB::table('minuman')
            ->where('kodeminuman', $id)
            ->update([
                'merkminuman' => $request->merkminuman,
                'stockminuman' => $request->stockminuman,
                'tersedia' => $request->tersedia
            ]);

        return redirect('/minuman');
    }

    // Hapus data
    public function delete($id)
    {
        DB::table('minuman')
            ->where('kodeminuman', $id)
            ->delete();

        return redirect('/minuman');
    }
}
