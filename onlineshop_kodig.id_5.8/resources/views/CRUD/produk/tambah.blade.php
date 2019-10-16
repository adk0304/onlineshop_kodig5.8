<!DOCTYPE html>
<html>
<head>
    <title>PRODUK </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2>PRODUK </a></h2>
	<h3>Data Pegawai</h3>

	<a href="/produk"> Kembali</a>

	<br/>
	<br/>

	<form action="/produk/simpan" method="post">
		{{ csrf_field() }}
        nama produk <input type="text" required="required" name="nama_produk"> <br/>
        jenis produk<input type="text" required="required" name="jenis_produk"> <br/>
		<input type="submit" value="Simpan Data">
		</form>

</body>
</html>
