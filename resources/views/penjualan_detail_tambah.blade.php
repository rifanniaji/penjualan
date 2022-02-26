<!DOCTYPE html>
<html>
<head>
	<title>Detail Form</title>
</head>
<body>

	
	<h3>Penambahan Detail</h3>

	<a href="/penjualan"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/penjualan/store_detail" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id">
		<input type="hidden" name="id_penjualan" value=''>
		Deskripsi <input type="text" name="deskripsi" required="required"> <br/>
		Qty <input type="number" name="qty" required="required"> <br/>
		Harga <input type="number" name="harga" required="required"> <br/>
		

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>