<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('home');

Route::get('/home', [HomeController::class,'index']);

//route berita
Route::get('/berita', [BeritaController::class, 'view']);
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');
Route::get('berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
Route::put('berita/{id}', [BeritaController::class, 'update'])->name('berita.update');

Route::get('/berita/{id}', [BeritaController::class, 'destroy'])->name('berita.destroy');
//route pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::post('/pegawai', [PegawaiController::class, 'store'])->name('pegawai.store');
Route::get('pegawai/{id}/edit', [PegawaiController::class, 'edit'])->name('pegawai.edit');
Route::put('pegawai/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');

Route::get('/pegawai/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.destroy');

//route profil
Route::get('/profil', function () {
    return view('profil');
})->name('profil');

//route ppdb
Route::get('/ppdb', function () {
    return view('ppdb');
})->name('ppdb');

//route sosmed
Route::get('/sosmed', function () {
    return view('sosmed');
})->name('sosmed');

//route surat
Route::get('/surat', function () {
    return view('surat');
})->name('surat');

//route landingpage
Route::get('/', function () {
    return view('landing');
})->name('landing');