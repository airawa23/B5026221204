@extends('master')

@section('title','Data Sepeda')

@section('konten')
	{{-- <h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>

	<br/>
    <p>Cari Data Pegawai berdasarkan Nama :</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai ..." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="Cari">
	</form>
	<br/> --}}

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode</th>
			<th>Merk</th>
			<th>Stock</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($sepeda as $s)
		<tr>
			<td>{{ $s->kode_sepeda }}</td>
			<td>{{ $s->merk_sepeda }}</td>
			<td>{{ $s->stock_sepeda }}</td>
			<td>{{ $s->tersedia }}</td>
			{{-- <td>
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">view</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td> --}}
		</tr>
		@endforeach
	</table>
    {{ $sepeda->links() }}
@endsection

