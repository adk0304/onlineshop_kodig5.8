<!DOCTYPE html>
<html>
<head>
	<title>TESTIMONI</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2 class="text-center">TESTIMONI</a></h2>
                <a href="/promo/tambah"> Tambah</a>
				<h3>Data Testimoni</h3>

				<p>Cari Data testimoni :</p>

				<div class="form-group">

				</div>
                <form action="/testimoni/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>nama testi</th>
						<th>testimoni</th>
                        <th>rating</th>
                        <th>Opsi</th>
					</tr>
					@foreach($testimoni as $p)
					<tr>
						<td>{{ $p->nama_testi }}</td>
						<td>{{ $p->testimoni }}</td>
						<td>{{ $p->rating }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/testimoni/edit/{{ $p->id_testi }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/testimoni/hapus/{{ $p->id_testi }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $testimoni->currentPage() }} <br/>
				Jumlah Data : {{ $testimoni->total() }} <br/>
				Data Per Halaman : {{ $testimoni->perPage() }} <br/>
				<br/>

				{{ $testimoni->links() }}
			</div>
		</div>
	</div>


</body>
</html>
