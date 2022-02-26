<!DOCTYPE html>
<html>
<head>
	<title>Penjualan Detail</title>
</head>
<body>

	
	<h3>Data Penjualan</h3>

	<a href="/penjualan/penjualan_detail_tambah">Tambah Data</a>
	
	<br/>
	<br/>

	<table border="1">
		<tr>
			<th>No</th>
			<th>ID Penjualan</th>
			<th>Deskripsi</th>
			<th>Kuantiti</th>
			<th>Harga</th>
			<th>Action</th>
			
		</tr>
		@foreach($penjualan_detail as $pd)
		<tr>
			<?php $no = 1;?> 
			<td><?=$no++?></td>
			<td>{{ $pd->id_penjualan }}</td>
			<td>{{ $pd->deskripsi }}</td>
			<td>{{ $pd->qty }}</td>
			<td>{{ $pd->harga }}</td>
			
			<td>
				<a href="/penjualan/penjualan_detail_edit/{{ $pd->id }}">Edit</a>
				<a href="/penjualan/penjualan_detail_hapus/{{ $pd->id }}">Hapus</a>
				

			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>