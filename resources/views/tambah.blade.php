<!DOCTYPE html>
<html>
<head>
	<title>Insert</title>
</head>
<body>

	
	<h3>Input Penjualan</h3>

	<a href="/penjualan"> Kembali</a>
	
	<br/>
	<br/>

	<form action="/penjualan/store" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id">
		<input type="hidden" name="id_user" value="1">
		Nomor Penjualan <input type="text" name="no_penjualan" required="required"> <br/>
		Tanggal <input type="date" name="tgl_penjualan" required="required"> <br/>
		Nama Pelanggan <input type="text" name="nama_pelanggan" required="required"> <br/>
		PPN 
		<select name="ppn" required="required">
			<option>0</option>
			<option>0.1</option>
			<option>0.01</option>	
		</select> <br/>
		NPWP <input type="text" name="npwp">

		<input type="submit" value="Simpan Data">
	</form>

</body>
</html>