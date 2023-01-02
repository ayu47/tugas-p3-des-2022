<?php 
       include 'koneksi.php';
	   if(isset($_POST['cari'])){
		$no = 1;
	//$tampil = mysqli_query($koneksi,"select * from transaksi where tgl_transaksi='".$_POST['search']."'");//where
	  $tampil = mysqli_query($koneksi,"select * from transaksi where tgl_transaksi like '%".$_POST['search']."%'");//where like
	//	$tampil = mysqli_query($koneksi,"select * from transaksi where tgl_transaksi between '".$_POST['search']."' and '".$_POST['search']."'");//where like
	   }else{
		$no = 1;
		$tampil = mysqli_query($koneksi,"select * from transaksi");
	   }
		
?>
<form method="POST">
	<table>
		<tr>
		<td>Cari tgl transaksi</td>
			<td><input type="date" name="search"></td>
		</tr>
		<tr>
			<td><input type="submit" name="cari" value="cari"></td>
		</tr>
	</table>
</form>
<html>
<head>
    <title>Ayu47.com</title>
</head>
<body>
   <h2>tabel transaksi</h2>
   <br/>
   <a href="inputtransaksi.php">+ TAMBAH TRANSAKSI</a>
   <br/>
   <table border="1">
       <tr>
	       <th>no</th>
	       <th>tanggal transaksi</th>
		   <th>no transaksi</th>
		   <th>jenis transaksi</th>
		   <th>barang</th>
		   <th>jumlah transaksi</th>
		   <th>user</th>
		   <th>opsi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$no = 1;
		$query = mysqli_query($koneksi,"select * from transaksi");
		while($data = mysqli_fetch_array($tampil)){
			?>
			<tr>
			   <td><?php echo $no++; ?></td>
			   <td><?php echo $data['tgl_transaksi']; ?></td>
			   <td><?php echo $data['no_transaksi']; ?></td>
			   <td><?php echo $data['jenis_transaksi']; ?></td>
			   <td><?php echo $data['barang_id']; ?></td>
			   <td><?php echo $data['jumlah_transaksi']; ?></td>
			   <td><?php echo $data['user_id']; ?></td>
			   
			   <td>
			       <a href="edit_transaksi.php?id=<?php echo $data['id_transaksi']; ?>">EDIT</a>
				   <a href="hapus_transaksi.php?id=<?php echo $data['id_transaksi']; ?>">HAPUS</a>
			   </td>
			</tr>
			<?php
	    }
		?>
	</table>
</body>
</html>
