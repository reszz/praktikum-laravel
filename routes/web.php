<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function (){
    return 'Halo, Salira Selamat Datang di Praktikum Laravel';
});

Route::get('/user/{id}', function ($id){
    return "Profile User dengan ID: ". $id;
});

Route::get('/produk/{slug?}', function($slug = 'semua-produk') {
    return "Menampilkan: ". $slug;
});

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
Route::get('/profile', [MahasiswaController::class, 'profile']);