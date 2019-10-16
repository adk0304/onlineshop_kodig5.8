<!DOCTYPE html>
<html>
<head>
	<title>Detail Transaksi</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card">
			<div class="card-body">
				<h2 class="text-center">Detail Transaksi</a></h2>
				<a href="dtransaksi/tambah"> Tambah</a>
				<h3>Data Pegawai</h3>

				<p>Cari Data Pegawai :</p>

				<div class="form-group">

				</div>
                <form action="/dtransaksi/cari" method="GET" class="form-inline">
					<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
					<input class="btn btn-primary ml-3" type="submit" value="CARI">
				</form>

				<br/>

				<table class="table table-bordered">
					<tr>
                        <th>nama_barang</th>
                        <th>satuan barang</th>
                        <th>Sub Harga</th>
                        <th>alamat pengirim</th>
                        <th>tanggal transaksi</th>
                        <th>poin transaksi</th>
                        <th>Invoice</th>
                        <th>id produk</th>
                        <th>Aksi</th>
					</tr>
					@foreach($detail_transaksi as $p)
					<tr>
						<td>{{ $p->nama_barang }}</td>
						<td>{{ $p->satuan_barang }}</td>
						<td>{{ $p->sub_harga }}</td>
                        <td>{{ $p->alamat_kirim }}</td>
						<td>{{ $p->tanggal_transaksi }}</td>
						<td>{{ $p->poin_transaksi }}</td>
                        <td>{{ $p->invoice }}</td>
						<td>{{ $p->id_produk }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/dtransaksi/edit/{{ $p->id_detail }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/dtransaksi/hapus/{{ $p->id_detail }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

				<br/>
				Halaman : {{ $detail_transaksi->currentPage() }} <br/>
				Jumlah Data : {{ $detail_transaksi->total() }} <br/>
				Data Per Halaman : {{ $detail_transaksi->perPage() }} <br/>
				<br/>

				{{ $detail_transaksi->links() }}
			</div>
		</div>
	</div>


</body>
</html>
