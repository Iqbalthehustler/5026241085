<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertemuan5', function () {
	return view('pertemuan5');
});

Route::get('pert5', function () {
	return view('pertemuan 5');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

// Pertemuan 1
Route::get('pert1', function () {
    return view('intro');
});

// Pertemuan 2
Route::get('pert2/news', function () {
    return view('news');
});

Route::get('pert2/news1', function () {
    return view('news1');
});

// Pertemuan 3
Route::get('pert3/responsive', function () {
    return view('responsive');
});

Route::get('pert3/template', function () {
    return view('template');
});

// Tugas Pertemuan 3
Route::get('pert3/contoh', function () {
    return view('contoh');
});

// Pertemuan 4
Route::get('pert4/toyota', function () {
    return view('toyota');
});

Route::get('pert4/toyotaAI', function () {
    return view('toyotaAI');
});

Route::get('pert4/5026241085', function () {
    return view('5026241085');
});

// Pertemuan 6
Route::get('pert6/linktree', function () {
    return view('linktree');
});
