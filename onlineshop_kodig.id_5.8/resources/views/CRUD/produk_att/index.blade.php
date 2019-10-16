<!DOCTYPE html>
<html>
<head>
	<title>PRODUK ATT</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2 class="text-center">PRODUK ATT</a></h2>
				<a href="produk_att/tambah"> Tambah</a>
				<h3>Data Pegawai</h3>

				<p>Cari Data Pegawai :</p>

				<div class="form-group">

				</div>
                <form action="/produk_att/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>SKU</th>
						<th>Warna produk</th>
						<th>Jumlah produk</th>
                        <th>stock produk</th>
                        <th>size Produk</th>
                        <th>harga produk</th>
                        <th>id promo</th>
                        <th>id galery</th>
					</tr>
					@foreach($produk_att as $p)
					<tr>
						<td>{{ $p->SKU }}</td>
						<td>{{ $p->warna_produk }}</td>
						<td>{{ $p->jumlah_produk }}</td>
                        <td>{{ $p->stock_produk }}</td>
						<td>{{ $p->size_produk }}</td>
						<td>{{ $p->harga_produk }}</td>
                        <td>{{ $p->id_promo }}</td>
						<td>{{ $p->id_galery }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/produk_att/edit/{{ $p->id_produk_att }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/produk_att/hapus/{{ $p->id_produk_att }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $produk_att->currentPage() }} <br/>
				Jumlah Data : {{ $produk_att->total() }} <br/>
				Data Per Halaman : {{ $produk_att->perPage() }} <br/>
				<br/>

				{{ $produk_att->links() }}
			</div>
		</div>
	</div>


</body>
</html>
