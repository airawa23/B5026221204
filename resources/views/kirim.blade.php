@extends('master')

@section('title', 'kirim')

@section('konten')
<div class="container mt-4">
    <div>Anda telah memilih Kategori <br> dengan Kode:
        {{ $selectedKategoriId }}
    </div>
</div>
@endsection
