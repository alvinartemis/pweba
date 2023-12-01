<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    //
    public function index(){
        return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    }
    public function biodata(){

        $nama = "Muhammad Alvin Fairuz Tsany";
        $alamat = "Keputih";
        $umur = 20;
        $pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];

        return view ('biodata', ['nama' => $nama, 'alamat'=> $alamat, 'umur'=> $umur,'matkul'=> $pelajaran]);

    }
    public function showjam($jam){

    	return "<h3> Waktu sekarang : " . $jam. "</h3>";
    }
    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "Anda telah memgisikan <br> Nama : ".$nama.", Alamat : ".$alamat. ", NRP :". $nrp. "<br> Isi asli class Request". $request;
}
public function formulir(){
    return view ('formulir');
}
public function home(){
    return view('home');
}

public function tentang(){
    return view('tentang');
}

public function kontak(){
    return view('kontak');
}
}
