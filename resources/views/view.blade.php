@extends('master')

@section('title', 'Data Pegawai')

@section('konten')
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

        <h3>
            <center>Data Pegawai</center>
        </h3>

    </head>

    <body>
        <div class="row align-items-center border">
            <div class="col-xl" id="blank">
                <div class="col-12 bg-light p-3">Kosong</div>
            </div>
            <div class="col-xl border">
            <ul class="list-unstyled mb-1-9 border">
                <li class="mb-2 mb-xl-3 display-28"><span
                        class="display-26 text-secondary me-2 font-weight-600">Nama:</span> Doni</li>
                <li class="mb-2 mb-xl-3 display-28"><span
                        class="display-26 text-secondary me-2 font-weight-600">Jabatan:</span> Staff</li>
                <li class="mb-2 mb-xl-3 display-28"><span
                        class="display-26 text-secondary me-2 font-weight-600">Umur:</span> 21 Tahun</li>
                <li class="mb-2 mb-xl-3 display-28"><span
                        class="display-26 text-secondary me-2 font-weight-600">Alamat:</span> Jakarta</li>
                <a href="/pegawai" class="btn btn-primary">OK</a>
            </ul>
            </div>
        </div>
    </body>
@endsection
