<!DOCTYPE html>
<html>
<head>
	<title>Edit Penjualan</title>
</head>
<body>

	<h3>Edit Penjualan</h3>

	<a href="/penjualan"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($penjualan as $pj)
	<form action="/penjualan/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $pj->id }}">
		<input type="hidden" name="id_user" value="{{ $pj->id_user }}">
		Nomor Penjualan <input type="text" name="no_penjualan" required="required" value="{{ $pj->no_penjualan}}"> <br/>
		Tanggal <input type="date" name="tgl_penjualan" required="required" value="{{$pj->tgl_penjualan}}"> <br/>
		Nama Pelanggan <input type="text" name="nama_pelanggan" required="required" value="{{ $pj->nama_pelanggan}}"> <br/>
		PPN 
		<select name="ppn" required="required">
			<option>0</option>
			<option>0.1</option>
			<option>0.01</option>	
		</select> <br/>
		NPWP <input type="text" name="npwp" value="{{$pj->npwp_pelanggan}}">
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		

</body>
</html>