<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KategoriController extends Controller
{
    public function indexkategori()
    {
        // mengambil data dari table pegawai
        // $pegawai = DB::table('pegawai')->get();

        $kategori = DB::table('kategori')->get();
        // mengirim data pegawai ke view index
        return view('indexkategori', ['kategori' => $kategori]);
    }

    public function kirim()
    {
        // memanggil view tambah
        return view('kirim');
    }

    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('kategori')->insert([
            'nama' => $request->nama,
            'ID' => $request->id,
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/kategori');
    }

    public function read()
    {
        $kategori = 'Elektronik';
        $kategori = 'Rumah Tangga';
        $kategori = 'Komputer';

        return view('read');
    }
}
