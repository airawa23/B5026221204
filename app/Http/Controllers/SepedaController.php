<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedaController extends Controller
{
	public function indexsepeda()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();

        $sepeda = DB::table('sepeda')
                    ->orderBy('merk_sepeda', 'asc')
                    ->paginate(10);
    	// mengirim data pegawai ke view index
		return view('indexsepeda',['sepeda' => $sepeda]);
	}

    // method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('sepeda')->insert([
			'kode_sepeda' => $request->kode,
			'merk_sepeda' => $request->merk,
			'stock_sepeda' => $request->stock,
			'tersedia' => $request->tersedia
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/sepeda');

	}
}
