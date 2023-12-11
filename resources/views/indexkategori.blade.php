@extends('master')

@section('title', 'pilih Kategori')

@section('konten')

<p>Pilih Kategori</p>
{{-- <form action="/kategori/store" method="post" class="form-horizontal"> --}}
    <select name="nama">
        <option  value="1">Elektronik</option>
        <option value="2">Rumah Tangga</option>
        <option value="3">Komputer</option>
    </select>
{{-- </form> --}}
    <br><br>
    <a href="/kategori/kirim" class="btn btn-primary">KIRIM</a>
    {{-- {{ $kategori->links() }} --}}
@endsection
