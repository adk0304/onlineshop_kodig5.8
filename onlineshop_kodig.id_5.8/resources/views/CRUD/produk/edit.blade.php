<!DOCTYPE html>
<html>
<head>
	<title>Produk </title>
</head>
<body>

	<h2>Produk</a></h2>
	<h3>Edit Produk </h3>

	<a href="/produk"> Kembali</a>

	<br/>
	<br/>

	@foreach($produk as $p)
	<form action="/produk/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id_produk }}"> <br/>
        nama produk<input type="text" required="required" name="nama_produk" value="{{ $p->nama_produk }}"> <br/>
        jenis produk <input type="text" required="required" name="jenis_produk" value="{{ $p->jenis_produk }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
