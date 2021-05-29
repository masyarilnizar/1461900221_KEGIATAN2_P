<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class Controller0221 extends Controller

{
    public function anggota(){
        $anggota = DB::table('anggota')->get();
        
        return view('anggota0221',['anggota' => $anggota]);
    }

    public function buku(){
        $buku = DB::table('buku')->get();
        
        return view('buku0221',['buku' => $buku]);
    }

    public function kategori(){
        $kategori = DB::table('kategori')->get();
        
        return view('kategori0221',['kategori' => $kategori]);
    }
    
    public function home(){
    $home = DB::table('buku')
            ->join('kategori','buku.kategori_id','=','kategori.kategori_id')
            ->select('buku_judul','buku_deskripsi','buku_jumlah', 'kategori_nama')
            ->get();

            return view('home0221',['home' => $home]);
    }
}