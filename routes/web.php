<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

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

// ✅ Route spesifik pegawai dulu, baru yang pakai parameter
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai{nama}', [PegawaiController::class, 'index']);
