<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/promo"> Kembali</a>

	<br/>
	<br/>

	<form action="/promo/simpan" method="post">
		{{ csrf_field() }}
		Nama Promo <input type="text" name="nama_promo" required="required"> <br/>
        Jenis Promo<select name="jenis_promo" required="required">
            <option>Diskon</option>
            <option>Potongan Harga</option>
        </select> <br/>
        Nominal Promo<input type="number" name="nominal_promo" required="required"> <br/>
		Expired Date <input type="date" name="expired_date" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>
