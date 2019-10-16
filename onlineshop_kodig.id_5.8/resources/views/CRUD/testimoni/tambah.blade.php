<!DOCTYPE html>
<html>
<head>
    <title>Tstimoni Add</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2>Testimoni</h2>
	<h3>Data Testimoni</h3>

	<a href="/testimoni"> Kembali</a>

	<br/>
	<br/>

	<form action="/testimoni/simpan" method="post">
		{{ csrf_field() }}
        Nama testi<input type="text" required="required" name="nama_testi"> <br/>
        Testimoni<input type="text" required="required" name="testimoni" > <br/>
        rating<input type="number" required="required" name="rating"> <br/>
        id produk<input type="number" required="required" name="id_produk"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
