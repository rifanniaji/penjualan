<!DOCTYPE html>
<html>
<head>
	<title>Penjualan</title>
</head>
<body>

	
	<h3>Data Penjualan</h3>

	<a href="/penjualan/tambah">Tambah Data</a>
	
	<br/>
	<br/>

	<table border="1">	
		<tr>
			<th>No</th>
			<th>Tanggal Penjualan</th>
			<th>No Penjualan</th>
			<th>Nama Pelanggan</th>
			<th>PPN</th>
			<th>NPWP</th>
			<th>Action</th>
		</tr>
		@foreach($penjualan as $p)
		<tr>
			<?php $no = 1;?> 
			<td><?=$no++?></td>
			<td>{{ $p->tgl_penjualan }}</td>
			<td>{{ $p->no_penjualan }}</td>
			<td>{{ $p->nama_pelanggan }}</td>
			<td>{{ $p->ppn }}</td>
			<td>{{ $p->npwp_pelanggan }}</td>
			<td>
				<a href="/penjualan/edit/{{ $p->id }}">Edit</a>
				<a href="/penjualan/hapus/{{ $p->id }}">Hapus</a>
				<a href="/penjualan/penjualan_detail/{{ $p->id }}">Pembelian</a>

			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>