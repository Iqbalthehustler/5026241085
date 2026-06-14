<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class nilaikuliahcontroller extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')
            ->orderBy('ID')
            ->get();

        return view('indexnilaikuliah', [
            'nilaikuliah' => $nilaikuliah
        ]);
    }

    public function create()
    {
        return view('createnilaikuliah');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS
        ]);

        return redirect('/nilaikuliah');
    }

    public function edit($id)
    {
        $nilaikuliah = DB::table('nilaikuliah')
            ->where('ID', $id)
            ->first();

        return view('editnilaikuliah', [
            'nilaikuliah' => $nilaikuliah
        ]);
    }

    public function update(Request $request, $id)
    {
        DB::table('nilaikuliah')
            ->where('ID', $id)
            ->update([
                'NRP' => $request->NRP,
                'NilaiAngka' => $request->NilaiAngka,
                'SKS' => $request->SKS
            ]);

        return redirect('/nilaikuliah');
    }

    public function destroy($id)
    {
        DB::table('nilaikuliah')
            ->where('ID', $id)
            ->delete();

        return redirect('/nilaikuliah');
    }
}
