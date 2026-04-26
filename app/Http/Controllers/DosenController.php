<?php

namespace App\Http\Controllers;
//package kuliah.pert3
use Illuminate\Http\Request;
//Import
class DosenController extends Controller
{
    //
public function index(){
    return "<h1>Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com</h1>";
}

}

public function biodata(){
    $nama = "Faizal Johan" ;
    $nama = "muhammad iqbal burhanuddin" ;
    $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];
    return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
}
