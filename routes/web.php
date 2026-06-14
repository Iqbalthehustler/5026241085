<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\KeranjangBelanjaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
    return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('/5026241085', function () {
    return view('5026241085');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', [PegawaiDBController::class, 'index']);
Route::get('/intro', function () {
    return view('intro');
});

Route::get('/linktree', function () {
    return view('linktree');
});

Route::get('/master', function () {
    return view('master');
});

Route::get('/news', function () {
    return view('news');
});

Route::get('/news1', function () {
    return view('news1');
});

Route::get('/responsive', function () {
    return view('responsive');
});

Route::get('/template', function () {
    return view('template');
});

Route::get('/toyota', function () {
    return view('toyota');
});

Route::get('/toyotaAI', function () {
    return view('toyotaAI');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//siswa
use App\Http\Controllers\SiswaController;

Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');

Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');

Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');

Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');

Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');

Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

// ✅ Route spesifik pegawai dulu, baru yang pakai parameter
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//latian uas
Route::get('/keranjang', [KeranjangBelanjaController::class, 'endix']);
Route::get('/keranjang/add', [KeranjangBelanjaController::class, 'add']);
Route::post('/keranjang/store', [KeranjangBelanjaController::class, 'store']);
Route::get('/keranjang/delete/{id}', [KeranjangBelanjaController::class, 'delete']);



use App\Http\Controllers\nilaikuliahcontroller;

Route::get('/nilaikuliah', [nilaikuliahcontroller::class, 'index']);
Route::get('/nilaikuliah/create', [nilaikuliahcontroller::class, 'create']);
Route::post('/nilaikuliah/store', [nilaikuliahcontroller::class, 'store']);

Route::get('/nilaikuliah/{id}/edit', [nilaikuliahcontroller::class, 'edit']);
Route::post('/nilaikuliah/{id}/update', [nilaikuliahcontroller::class, 'update']);

Route::get('/nilaikuliah/{id}/hapus', [nilaikuliahcontroller::class, 'destroy']);

// minuman
use App\Http\Controllers\MinumanController;

Route::get('/minuman', [MinumanController::class, 'index']);

Route::get('/minuman/create', [MinumanController::class, 'create']);

Route::post('/minuman/store', [MinumanController::class, 'store']);

Route::get('/minuman/edit/{id}', [MinumanController::class, 'edit']);

Route::post('/minuman/update/{id}', [MinumanController::class, 'update']);

Route::get('/minuman/hapus/{id}', [MinumanController::class, 'delete']);
