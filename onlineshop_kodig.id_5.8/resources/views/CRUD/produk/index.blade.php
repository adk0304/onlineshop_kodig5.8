<!DOCTYPE html>
<html>
<head>
	<title>PRODUK</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2 class="text-center">PRODUK</h2>
				<a href="produk/tambah"> Tambah</a>
				<h3>Data Pegawai</h3>

				<p>Cari Data Pegawai :</p>

				<div class="form-group">

				</div>
                <form action="/<!DOCTYPE html>
<html>
<head>
	<title>PRODUK </title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2 class="text-center">PRODUK </a></h2>
				<a href="produk/tambah"> Tambah</a>
				<h3>Data Pegawai</h3>

				<p>Cari Data Pegawai :</p>

				<div class="form-group">

				</div>
                <form action="/produk/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>Nama Produk</th>
						<th>Jenis produk</th>
						<th>id produk att</th>
                        <th>id testi</th>
					</tr>
					@foreach($produk as $p)
					<tr>
						<td>{{ $p->nama_produk }}</td>
						<td>{{ $p->jenis_produk }}</td>
						<td>{{ $p->id_produk_att }}</td>
                        <td>{{ $p->id_testi }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/produk/edit/{{ $p->id_produk }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/produk/hapus/{{ $p->id_produk }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $produk->currentPage() }} <br/>
				Jumlah Data : {{ $produk->total() }} <br/>
				Data Per Halaman : {{ $produk->perPage() }} <br/>
				<br/>

				{{ $produk->links() }}
			</div>
		</div>
	</div>


</body>
</html>
