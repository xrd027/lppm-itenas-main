<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('surat\dashboardSurat');
});

Route::get('/dashboard', function () {
    $title = 'Dashboard';
    return view('index', compact('title'));
});

Route::get('/input', function () {
    $title = 'Input Data Baru';
    return view('inputUser', compact('title'));
});

Route::get('/profil', function () {
    $title = 'Profil';
    return view('profil', compact('title'));
});

Route::get('/dashboardSurat', function () {
    $title = 'Dashboard Surat';
    return view('surat\dashboardSurat', compact('title'));
});

Route::get('/suratMasuk', function () {
    $title = 'Surat masuk';
    return view('surat\suratMasuk', compact('title'));
});
Route::get('/suratKeluar', function () {
    $title = 'Surat Keluar';
    return view('surat\suratKeluar', compact('title'));
});

Route::get('/tambahSurat', function () {
    $title = 'Tambah Surat';
    return view('surat\tambahSurat', compact('title'));
});

Route::get('/transaksiSurat', function () {
    $title = 'Transaksi Surat';
    return view('surat\transaksiSurat', compact('title'));
});

Route::get('/tambahSuratPKM', function () {
    $title = 'Tambah Surat PKM';
    return view('surat\tambahSuratPKM', compact('title'));
});

Route::get('/tambahSuratPenelitian', function () {
    $title = 'Tambah Surat Penelitian';
    return view('surat\tambahSuratPenelitian', compact('title'));
});

Route::get('/tambahSuratHAKI', function () {
    $title = 'Tambah Surat HAKI';
    return view('surat\tambahSuratHAKI', compact('title'));
});

Route::get('/tambahSuratUndangan', function () {
    $title = 'Tambah Surat Undangan';
    return view('surat\tambahSuratUndangan', compact('title'));
});
