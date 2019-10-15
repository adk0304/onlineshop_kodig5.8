<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit promo</h3>

	<a href="/promo"> Kembali</a>

	<br/>
	<br/>

	@foreach($promo as $p)
	<form action="/promo/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_promo }}"> <br/>
        Nama Promo<input type="text" required="required" name="nama_promo" value="{{ $p->nama_promo }}"> <br/>
        Jenis Promo<select name="jenis_promo" required="required" value="{{ $p->jenis_promo }}">
            <option>Diskon</option>
            <option>Potongan Harga</option>
        </select> <br/>
		Nominal Promo <input type="number" required="required" name="nominal_promo" value="{{ $p->nominal_promo }}"> <br/>
		Expired Date <input type="date" required="required" name="expired_date" value="{{ $p->expired_date }}"><br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
