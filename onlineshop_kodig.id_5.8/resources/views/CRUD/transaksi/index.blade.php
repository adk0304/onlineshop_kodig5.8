<!DOCTYPE html>
<html>
<head>
	<title> Transaksi</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2 class="text-center"> Transaksi</a></h2>
				<a href="transaksi/tambah"> Tambah</a>
				<h3>Data Pegawai</h3>

				<p>Cari Data Pegawai :</p>

				<div class="form-group">

				</div>
                <form action="/transaksi/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
                        <th>Nomor transaksi</th>
                        <th>Total Harga</th>
                        <th>ID Detail</th>
                        <th>Aksi</th>
					</tr>
					@foreach($transaksi as $p)
					<tr>
						<td>{{ $p->nomor_transaksi }}</td>
						<td>{{ $p->total_harga }}</td>
						<td>{{ $p->id_detail }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/transaksi/edit/{{ $p->id_transaksi }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/transaksi/hapus/{{ $p->id_transaksi }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $transaksi->currentPage() }} <br/>
				Jumlah Data : {{ $transaksi->total() }} <br/>
				Data Per Halaman : {{ $transaksi->perPage() }} <br/>
				<br/>

				{{ $transaksi->links() }}
			</div>
		</div>
	</div>


</body>
</html>
