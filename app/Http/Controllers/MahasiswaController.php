<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    public function index(){
        $data = Mahasiswa::all();
        return view("mahasiswa.index", compact('data'));
    }
    public function create(){
        return view("mahasiswa.create");
    }

    public function store(Request $request){
        Mahasiswa::create($request->all());
        return redirect('/mahasiswa');
    }
    // public function profile(){
    //     return view("profile");
    // }
}
