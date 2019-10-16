<!DOCTYPE html>
<html>
<head>
	<title>DETAIL TRANSAKSI </title>
</head>
<body>

	<h2>detail transaksi</a></h2>
	<h3>Edit Produk </h3>

	<a href="/dtransaksi"> Kembali</a>

	<br/>
	<br/>

	@foreach($detail_transaksi as $p)
	<form action="/dtransaksi/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id_detail }}"> <br/>
        nama_barang<input type="text" required="required" name="nama_barang" value="{{ $p->nama_barang }}"> <br/>
        satuan barang <input type="number" required="required" name="satuan_barang" value="{{ $p->satuan_barang }}"> <br/>
        Sub Harga<input type="number" required="required" name="sub_harga" value="{{ $p->sub_harga }}"> <br/>
        alamat pengirim<input type="text" required="required" name="alamat_kirim" value="{{ $p->alamat_kirim }}"> <br/>
        tanggal transaksi<input type="date" required="required" name="tanggal_transaksi" value="{{ $p->tanggal_transaksi }}"> <br/>
        poin transaksi<input type="number" required="required" name="poin_transaksi" value="{{ $p->poin_transaksi }}"> <br/>
        Invoice<input type="text" required="required" name="invoice" value="{{ $p->invoice }}"> <br/>
        id produk<input type="number" required="required" name="id_produk" value="{{ $p->id_produk }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
