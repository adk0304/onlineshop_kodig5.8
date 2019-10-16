<!DOCTYPE html>
<html>
<head>
    <title> Transaksi </title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2> Transaksi </a></h2>
	<h3>Data transaksi</h3>

	<a href="/transaksi"> Kembali</a>

	<br/>
	<br/>

	<form action="/transaksi/simpan" method="post">
		{{ csrf_field() }}
        Nomor Transaksi<input type="text" required="required" name="nomor_transaksi"> <br/>
        Total Harga <input type="number" required="required" name="total_harga"> <br/>
        id detail<input type="number" required="required" name="id_detail" > <br/>
        <input type="submit" value="Simpan Data">
		</form>

</body>
</html>
