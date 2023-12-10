<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class keranjangbelanjaController extends Controller
{
    public function homepage(){
        $keranjangbelanja = DB::table('keranjangbelanja')->get();
        return view ('homepage',['keranjangbelanja'=> $keranjangbelanja]);
    }
    public function storee(Request $requestt)
    {
        DB::table('keranjangbelanja')->insert([
            'ID' => $requestt->id,
			'KodeBarang' => $requestt->kodebarang,
			'Jumlah' => $requestt->jumlah,
			'Harga' => $requestt->harga
        ]);
        return redirect('/keranjangbelanja');
    }
    public function hapuss($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('id',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');

	}
    public function tambahh()
    {
        return view('tambahh');
    }
    public function viewkb($id)
    {
        $pegawai = DB::table('pegawai')
		->where('pegawai_id', $id)
        ->get();

        return view('viewkb',['pegawai' => $pegawai]);

    }
}
