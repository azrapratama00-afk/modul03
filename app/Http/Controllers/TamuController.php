<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
    public function data() {
        return view('data');
    }

    public function daftar(Request $request) {
        $nama = $request -> input('nama');
        $umur = $request -> input('umur');
        $alamat = $request -> input('alamat');
        $telp = $request -> input('telp');

        return view ('daftar', compact('nama', 'umur', 'alamat', 'telp'));
    }
}
