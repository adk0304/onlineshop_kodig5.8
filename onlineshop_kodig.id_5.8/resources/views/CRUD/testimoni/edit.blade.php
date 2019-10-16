<!DOCTYPE html>
<html>
<head>
	<title>TTESTIMONI</title>
</head>
<body>

	<h2>TESTIMONI</h2>
	<h3>Edit testimoni</h3>

	<a href="/testimoni"> Kembali</a>

	<br/>
	<br/>

	@foreach($testimoni as $p)
	<form action="/testimoni/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->id_testi }}"> <br/>
        Nama testi<input type="text" required="required" name="nama_testi" value="{{ $p->nama_testi }}"> <br/>
        Testimoni<input type="text" required="required" name="testimoni" value="{{ $p->testimoni }}"> <br/>
        rating<input type="number" required="required" name="rating" value="{{ $p->rating }}"> <br/>
        id Produk<input type="number" required="required" name="id_produk" value="{{ $p->id_produk }}"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach


</body>
</html>
