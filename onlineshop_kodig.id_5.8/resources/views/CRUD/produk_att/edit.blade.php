<!DOCTYPE html>
<html>
<head>
	<title>Produk ATT</title>
</head>
<body>

	<h2>Produk ATT</a></h2>
	<h3>Edit Produk ATT</h3>

	<a href="/produk_att"> Kembali</a>

	<br/>
	<br/>

	@foreach($produk_att as $p)
	<form action="/produk_att/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id_produk_att }}"> <br/>
        SKU<input type="text" required="required" name="SKU" value="{{ $p->SKU }}"> <br/>
        Warna produk <input type="text" required="required" name="warna_produk" value="{{ $p->warna_produk }}"> <br/>
        Jumlah produk<input type="number" required="required" name="jumlah_produk" value="{{ $p->jumlah_produk }}"> <br/>
        Stock Produk<input type="number" required="required" name="stock_produk" value="{{ $p->stock_produk }}"> <br/>
        Size Produk<select name="size_produk" required="required" value="{{ $p->size_produk }}">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
        </select> <br/>
        Harga Produk<input type="number" required="required" name="harga_produk" value="{{ $p->harga_produk }}"> <br/>
		ID Promo <input type="number" required="required" name="id_promo" value="{{ $p->id_promo }}"> <br/>
		ID Galery<input type="number" required="required" name="id_galery" value="{{ $p->id_galery }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
