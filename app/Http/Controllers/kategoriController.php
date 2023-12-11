<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class kategoriController extends Controller
{

    public function indexkategori()
    {
        $kategori = DB::table('kategori')->get();
        return view('indexkategori', ['kategori' => $kategori]);
    }

    public function kirim(Request $request)
    {
        $selectedKategoriId = $request->input('kategori');

        $kategoriNama = DB::table('kategori')->where('ID', $selectedKategoriId)->value('Nama');

        return view('kirim', ['selectedKategoriId' => $selectedKategoriId,]);}
}
