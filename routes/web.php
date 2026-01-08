<?php

use App\Http\Controllers\MobilController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\SawController;
use Illuminate\Support\Facades\Route;

// 1. Halaman Dashboard (Halaman Penjelasan Utama)
Route::get('/', function () {
    return view('dashboard');
});

// 2. Halaman Alternatif (Gunakan resource agar fungsi index, create, store, edit, destroy aktif)
Route::resource('alternatif', MobilController::class);

// 3. Halaman Bobot & Kriteria
Route::resource('kriteria', KriteriaController::class);

// 4. Halaman Perhitungan matrix
Route::get('/matrix', [SawController::class, 'matrix']);

// 5. Halaman Perhitungan (Fase Choice & Implementation)
Route::get('/hitung', [SawController::class, 'hitung']);
