<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function utama(){
        $kategori = DB::table('kategori')->get();
        return view ('utama',['kategori'=> $kategori]);
    }
    public function posted($ab)
    {
        $kategori = DB::table('kategori')->where('kategori', $ab)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('posted',['kategori' => $kategori]);

}
}
