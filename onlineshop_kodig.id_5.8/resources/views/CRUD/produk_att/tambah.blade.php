<!DOCTYPE html>
<html>
<head>
    <title>PRODUK ATT</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2>PRODUK ATT</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/produk_att"> Kembali</a>

	<br/>
	<br/>

	<form action="/produk_att/simpan" method="post">
		{{ csrf_field() }}
		SKU<input type="text" required="required" name="SKU"> <br/>
        Warna produk <input type="text" required="required" name="warna_produk"> <br/>
        Jumlah produk<input type="number" required="required" name="jumlah_produk"> <br/>
        Stock Produk<input type="number" required="required" name="stock_produk"> <br/>
        Size Produk<select name="size_produk" required="required">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
        </select> <br/>
        Harga Produk<input type="number" required="required" name="harga_produk"> <br/>
		ID Promo <input type="number" required="required" name="id_promo"> <br/>
		ID Galery<input type="number" required="required" name="id_galery"> <br/>
		<input type="submit" value="Simpan Data">
		</form>

</body>
</html>
