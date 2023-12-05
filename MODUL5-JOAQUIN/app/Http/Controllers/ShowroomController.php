<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowroomController extends Controller
{
    public function create(){
        return view(showroom.create);
    }

    public function store(Request $request){

        $data = $request->all();

        Showroom::create([
            'id' -> $data['id'],
            'nama_mobil' -> $data['nama'],
            'brand_mobil' -> $data['brand'],
            'warna_mobil' -> $data['warna'],
            'tipe_mobil' -> $data['tipe'],
            'harga_mobil' -> $data['harga'],
        ]);
    }

    public function index(){    
        $user = User::all();

        return view('showroom/index', compact('showroom'));
    }
}
