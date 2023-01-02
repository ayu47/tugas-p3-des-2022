</html>
	<head>
	<title>Ayu47.com</title>
	</head>
	<body>
	<h2>Tabel katagori</h2>
	<br/>
	<a href="inputkategori.php">+ TAMBAH KATEGORI</a>
	<br/>
	<table border="1">
	<tr>
	<th>No</th>
		<th>Nama Kategori</th>
		<th>OPSI</th>
	</tr>
	<?php
	include 'koneksi.php';
	$no =1;
	$data = mysqli_query($koneksi,"select * from kategori");
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_kategori']; ?></td>
			<td>
				<a href="edit_tampilkategori.php?id=<?php echo $d['id_kategori']; ?>">EDIT</a>
				<a href="hapus_tampilkategori.php?id=<?php echo $d['id_kategori']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>