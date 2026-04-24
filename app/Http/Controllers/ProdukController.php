<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index(){
        return "ini adalah halaman produk dari Controller";
    }

    public function show(){
        return "ini adalah halaman show produk";
    }
    public function view(){
        return view('produk');
    }
}
