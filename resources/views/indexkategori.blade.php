@extends('master')

@section('title', 'Kategori')

@section('konten')
<form action="/kategori/kirim" method="POST">
    @csrf
    <div class="form-group">
        <label for="kategori">Pilih Kategori</label>
        <select name="kategori" id="kategori" class="form-control">
            @foreach($kategori as $k)
                <option value="{{ $k->ID }}">
                    {{ $k->Nama }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Kirim</button>
</form>
@endsection
