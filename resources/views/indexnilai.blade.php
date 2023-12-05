@extends('master')

@section('title', 'Data Nilai Kuliah')

@section('konten')

<a href="/nilai/tambahnilai" class="btn btn-primary">Tambah</a>
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
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilaikuliah as $n)
            <tr>
                <td>{{ $n->ID }}</td>
                <td>{{ $n->NRP }}</td>
                <td>{{ $n->NilaiAngka }}</td>
                <td>{{ $n->SKS }}</td>
                <td>
                    @if ($n->NilaiAngka >= 81)
                        A
                    @elseif ($n->NilaiAngka >= 61 && $n->NilaiAngka <= 81)
                        B
                    @elseif ($n->NilaiAngka >= 41 && $n->NilaiAngka <= 60)
                        C
                    @elseif ($n->NilaiAngka >= 40)
                        D
                    @endif
                <td>{{ $n->NilaiAngka * $n->SKS }}</td>
                </td>

            </tr>
            {{-- <td>
                'id' => $request->id,
			'nrp' => $request->nrp,
			'NilaiAngka' => $request->nilaika,
			'sks' => $request->sks,
            'NilaiHuruf' => $request->nilairuf,
            'Bobot' => $request->bobot
                <a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success">view</a>

				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td> --}}
        @endforeach
    </table>
    {{ $nilaikuliah->links() }}
@endsection
