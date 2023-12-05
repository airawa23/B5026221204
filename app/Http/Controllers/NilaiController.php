<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
	public function indexnilai()
	{
    	// mengambil data dari table nilai
		// $pegawai = DB::table('pegawai')->get();

        $nilaikuliah = DB::table('nilaikuliah')
                    ->orderBy('nrp', 'asc')
                    ->paginate(10);
    	// mengirim data pegawai ke view index
		return view('indexnilai',['nilaikuliah' => $nilaikuliah]);
	}

    // method untuk menampilkan view form tambah pegawai
	public function tambahnilai()
	{

		// memanggil view tambah
		return view('tambahnilai');

	}

    // method untuk insert data ke table pegawai
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([
			'nrp' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'sks' => $request->SKS,
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilai');

	}

}
