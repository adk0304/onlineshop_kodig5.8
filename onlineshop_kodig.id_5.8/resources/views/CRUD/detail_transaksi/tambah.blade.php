<!DOCTYPE html>
<html>
<head>
    <title>Detail Transaksi </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2>Detail Transaksi </a></h2>
	<h3>Data transaksi</h3>

	<a href="/dtransaksi"> Kembali</a>

	<br/>
	<br/>

	<form action="/dtransaksi/simpan" method="post">
		{{ csrf_field() }}
        nama_barang<input type="text" required="required" name="nama_barang"> <br/>
        satuan barang <input type="number" required="required" name="satuan_barang"> <br/>
        Sub Harga<input type="number" required="required" name="sub_harga" > <br/>
        alamat pengirim<input type="text" required="required" name="alamat_kirim"> <br/>
        tanggal transaksi<input type="date" required="required" name="tanggal_transaksi" > <br/>
        poin transaksi<input type="number" required="required" name="poin_transaksi"> <br/>
        Invoice<input type="text" required="required" name="invoice" > <br/>
        id produk<input type="number" required="required" name="id_produk" > <br/>
        <input type="submit" value="Simpan Data">
		</form>

</body>
</html>
