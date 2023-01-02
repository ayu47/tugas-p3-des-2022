<?php
include 'koneksi.php';
	$no =1;
	if(isset($_POST['cari'])){
					//$data = mysqli_query($koneksi,"SELECT * FROM user where nama='".$_POST['nama']."'");
					$data = mysqli_query($koneksi,"SELECT * FROM user where nama like'%".$_POST['nama']."%'");
				}else{
	$data = mysqli_query($koneksi,"select * from barang");
	}
				?>
				<form method="POST">
				<table>
				<tr>
					<td><input type="text" name="nama"></td>
					<td><input type="submit" name="cari"></td>
					</tr>
					</table>
</html>
	<head>
	<title>Ayu47.com</title>
	</head>
	<body>
	<h2>Tambah barang.com</h2>
	<br/>
	<a href="inputbarang.php">+ TAMBAH BARANG</a>
	<br/>
	<table border="1">
	<tr>
		<th>No</>
		<th>nama barang</th>
		<th>kode barang</th>
		<th>qty</th>
		<th>kategori</th>
		<th>OPSI</th>
	</tr>
	<?php
	
	while($d= mysqli_fetch_array($data)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['nama_barang']; ?></td>
			<td><?php echo $d['kode_barang']; ?></td>
			<td><?php echo $d['qty']; ?></td>
			<td><?php echo $d['kategori_id']; ?></td>
			<td>
				<a href="edit_barang.php?id=<?php echo $d['id_barang']; ?>">EDIT</a>
				<a href="hapus_barang.php?id=<?php echo $d['id_barang']; ?>">HAPUS</a>
			<td>
		</tr>
	<?php
	}
	?>
	</table>
	</body>
	</html>
	</form>