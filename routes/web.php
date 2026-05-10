<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function (){
    return 'Halo, Salira Selamat Datang di Praktikum Laravel';
});

Route::get('/user/{id}', function ($id){
    return "Profile User dengan ID: ". $id;
});
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/{slug?}', function($slug = 'semua-produk') {
    return "Menampilkan: ". $slug;
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/profile', [MahasiswaController::class, 'profile']);

Route::get('/showproduk', [ProdukController::class, 'show']);
Route::get('/viewproduk', [ProdukController::class, 'view']);
