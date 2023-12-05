@extends('master')

@section('title', 'Data Nilai Kuliah')

@section('konten')

    <a href="/nilai"> Kembali</a>

    <br />
    <br />

    <form action="/nilai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group row">
            <label for="NRP" class="col-xs-3 col-form-label mr-2">NRP</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="NRP" name="NRP">
            </div>
        </div>
        <div class="form-group row">
            <label for="NilaiAngka" class="col-xs-3 col-form-label mr-2">Nilai</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="NilaiAngka" name="NilaiAngka" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="SKS" class="col-xs-3 col-form-label mr-2">SKS</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" id="SKS" name="SKS">
            </div>
        </div>
        <input type="submit" value="Simpan Data">
    </form>

@endsection
