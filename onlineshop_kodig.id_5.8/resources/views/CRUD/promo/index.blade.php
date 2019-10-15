<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat Pencarian Pada Laravel - www.malasngoding.com</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">


				<h2 class="text-center"><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
                <a href="/promo/tambah"> Tambah</a>
				<h3>Data Pegawai</h3>

				<p>Cari Data Pegawai :</p>

				<div class="form-group">

				</div>
                <form action="/promo/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>nama promo</th>
						<th>jenis promo</th>
						<th>nominal promo</th>
                        <th>expired</th>
                        <th>Opsi</th>
					</tr>
					@foreach($promo as $p)
					<tr>
						<td>{{ $p->nama_promo }}</td>
						<td>{{ $p->jenis_promo }}</td>
						<td>{{ $p->nominal_promo }}</td>
						<td>{{ $p->expired_date }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/promo/edit/{{ $p->id_promo }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/promo/hapus/{{ $p->id_promo }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $promo->currentPage() }} <br/>
				Jumlah Data : {{ $promo->total() }} <br/>
				Data Per Halaman : {{ $promo->perPage() }} <br/>
				<br/>

				{{ $promo->links() }}
			</div>
		</div>
	</div>


</body>
</html>
