<!DOCTYPE html>
<html>
<head>
	<title>ayu47.com</title>
</head>
<?php 
// koneksi database
include 'koneksi.php';
if(isset($_POST['save'])){
	$id=$_POST['id'];
	$tgl_transaksi = $_POST['tgl_transaksi'];
    $no_transaksi = $_POST['no_transaksi'];
    $jenis_transaksi = $_POST['jenis_transaksi'];
    $barang_id = $_POST['barang_id'];
    $jumlah_transaksi = $_POST['jumlah_transaksi'];
    $user_id = $_POST['user_id'];
	$update=mysqli_query($koneksi,"UPDATE transaksi SET tgl_transaksi='$tgl_transaksi', no_transaksi='$no_transaksi',jenis_transaksi='$jenis_transaksi', barang_id='$barang_id', jumlah_transaksi='$jumlah_transaksi', user_id='$user_id' WHERE id_transaksi='$id'");
	if($update){
		header("location:tampiltransaksi.php");
	}else{
		echo mysqli_error($koneksi);
	}
}
  $querybarang = "select * from barang";
  $resultbarang = mysqli_query ($koneksi,$querybarang);
  
  $queryuser = "select * from user";
  $resultuser = mysqli_query ($koneksi,$queryuser);
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM transaksi WHERE id_transaksi='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
	<h2>tabel transaksi</h2>
	<br/>
	<a href="transaksi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit DATA transaksi</h3>
	<form method="POST">
		<table>
			<tr>			
				<td>tanggal transaksi</td>
			   <input type="hidden" name="id" value="<?php echo $data['id_transaksi'];?>"/>
				<td><input type="date" name="tgl_transaksi" required value="<?php echo $data['tgl_transaksi'];?>"></td>
			</tr>
			<tr>
			<td>no transaksi</td>
			<td><input type="text" name="no_transaksi" required value="<?php echo $data['no_transaksi'];?>"></td>
		</tr>
		<tr>
		   <td>jenis transaksi</td>
		   <td>
		       <select name="jenis_transaksi">
			   <option value="">-----pilih</option>
			   <option value="tunai">tunai</option>
			   <option value="kredit">kredit</option>
			</select>
		   </td>         
		</tr>
		<tr>
	      <td>barang</td>
		  <td>
		     <select name="barang_id">
		       <option value="">-----pilih</option>
			   <?php
			   while ($databarang=mysqli_fetch_array($resultbarang))
			   {
				   echo "<option value=$databarang[id_barang]>$databarang[nama_barang]</option>";
			   }
			   ?>
		</select>
		</td>
	</tr>
	<tr>
	    <td>jumlah transaksi</td>
		<td><input type="number" name="jumlah_transaksi"></td>
	   </tr>
	   <tr>
	     <td>user</td>
		  <td>
		     <select name="user_id">
		       <option value="">-----pilih-----</option>
			   <?php
			   while ($datauser=mysqli_fetch_array($resultuser))
			   {
				   echo "<option value=$datauser[id_user]>$datauser[nama]</option>";
			   }
			   ?>
		</select>
		</td>
	</tr>
	<tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>		
		</table>
	</form>

</body>
<?php	}?>
</html>