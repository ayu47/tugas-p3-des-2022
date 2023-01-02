</html>
	<head>
	<title>UnayahNurlailiNovianti.com</title>
	</head>
	<body>
	<h2>UnayahNurlailiNovianti.com</h2>
	<br/>
	<a href="inputtransaksi1.php">+ TAMBAH TRANSAKSI</a>
	<br/>
	<table border="1">
	<tr>
		<th>No</th>
		<th>Tanggal transaksi</th>
		<th>No transaksi</th>
		<th>Jenis transaksi</th>
		<th>Barang</th>
		<th>Jumlah Transaksi</th>
		<th>Diskon Member</th>
		<th>Diskon Barang</th>
		<th>Total Pembelian</th>
		<th>Total Diskon</th>
		<th>Total Transaksi</th>
		<th>Member</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from transaksii");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['tgl_transaksi']; ?></td>
			<td><?php echo $d['no_transaksi']; ?></td>
			<td><?php echo $d['jenis_transaksi']; ?></td>
			<td><?php echo $d['barang_id']; ?></td>
			<td><?php echo $d['jumlah_transaksi']; ?></td>
			<td><?php echo $d['diskon_member']; ?></td>
			<td><?php echo $d['diskon_barang']; ?></td>
			<td><?php echo $d['total_pembelian']; ?></td>
			<td><?php echo $d['total_diskon']; ?></td>
			<td><?php echo $d['total_transaksi']; ?></td>
			<td><?php echo $d['member_id']; ?></td>
			<td>
				<a href="edit_tampiltransaksi1.php?id=<?php echo $d['id_barang']; ?>">EDIT</a>
				<a href="hapus_tampiltransaksi1.php?id=<?php echo $d['id_barang']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>