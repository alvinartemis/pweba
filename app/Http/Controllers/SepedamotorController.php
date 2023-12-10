<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedamotorController extends Controller
{
    public function index1()
    {$sepedamotor = DB::table('sepedamotor') -> get();

    return view('index1', ['sepedamotor' => $sepedamotor]);
    }
    public function add(){
        return view('add');
    }
    public function storeee(Request $req)
	{
		// insert data ke table pegawai
		DB::table('sepedamotor')->insert([
			'kodesepedamotor' => $req->kodesepeda,
			'merksepedamotor' => $req->merk,
			'stocksepedamotor' => $req->stock,
			'tersedia' => $req->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepedamotor');

	}
    public function editt($id)
    {
        $sepedamotor = DB::table('sepedamotor')->where('kodesepedamotor', $id)->get();
		// passing data pegawai yang didapat ke view edit.blade.php
		return view('editt',['sepedamotor' => $sepedamotor]);
    }
    public function updated(Request $req)
	{
		// update data pegawai
		DB::table('sepedamotor')->where('kodesepedamotor',$req->id)->update([
			'merksepedamotor' => $req->merksepedamotor,
			'stocksepedamotor' => $req->stocksepedamotor,
			'tersedia' => $req->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepedamotor');
	}
    public function deleted($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('sepedamotor')->where('kodesepedamotor',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/sepedamotor');

    }public function find(Request $req)
	{
		// menangkap data pencarian
		$find = $req->find;

    		// mengambil data dari table pegawai sesuai pencarian data
		$sepedamotor = DB::table('sepedamotor')
		->where('merksepedamotor','like',"%".$find."%");

    		// mengirim data pegawai ke view index
		return view('index1',['sepedamotor' => $sepedamotor, 'cari'=> $find]);

	}
    public function viewsp($id)
    {
        $sepedamotor = DB::table('sepedamotor')
		->where('kodesepedamotor', $id)
        ->get();

        return view('viewsp',['sepedamotor' => $sepedamotor]);

    }
}
