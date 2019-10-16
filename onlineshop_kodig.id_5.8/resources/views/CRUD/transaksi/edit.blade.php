<!DOCTYPE html>
<html>
<head>
	<title>TRANSAKSI </title>
</head>
<body>

	<h2> transaksi</a></h2>
	<h3>Edit TRANSAKSI </h3>

	<a href="/transaksi"> Kembali</a>

	<br/>
	<br/>

	@foreach($transaksi as $p)
	<form action="/transaksi/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $p->id_transaksi }}"> <br/>
        Nomor Transaksi<input type="text" required="required" name="nomor_transaksi" value="{{ $p->nomor_transaksi }}"> <br/>
        Total Harga<input type="number" required="required" name="total_harga" value="{{ $p->total_harga }}"> <br/>
        ID Detail<input type="number" required="required" name="id_detail" value="{{ $p->id_detail }}"> <br/>
        <input type="submit" value="Simpan Data">
	</form>
	@endforeach

</body>
</html>
