<!DOCTYPE html>
<html>
<head>
    <title>ayu47.com</title>
</head>
<?php
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
if(!empty($_POST['save'])){
	 
$tgl_transaksi = $_POST['tgl_transaksi'];
$no_transaksi = $_POST['no_transaksi'];
$jenis_transaksi = $_POST['jenis_transaksi'];
$barang_id = $_POST['barang_id'];
$jumlah_transaksi = $_POST['jumlah_transaksi'];
$user_id = $_POST['user_id'];
// menginput data ke database
$query=mysqli_query($koneksi,"insert into transaksi2 values('','$tgl_transaksi','$no_transaksi','$jenis_transaksi','$barang_id','$jumlah_transaksi','$user_id')");
 if($query)
 {
	// mengalihkan halaman kembali
	header("location:tampiltransaksi.php");
 }
 else
 {
	echo mysqli_error($koneksi);
    }
  }
  
  $querybarang = "select * from barang";
  $resultbarang = mysqli_query ($koneksi,$querybarang);
  
  $queryuser = "SELECT * FROM user";
  $resultuser = mysqli_query ($koneksi,$queryuser);
?>
<body>
    <h2>tabel transaksi</h2>
	<br/>
	<a href="tampiltransaksi.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA TRANSAKSI</h3>
	<form method="POST">
	    <table>
		    <tr>
			   <td>tanggal transaksi</td>
			   <td><input type="date" name="tgl_transaksi"></td>
			</tr>
			<tr>
			<td>no transaksi</td>
			<td><input type="text" name="no_transaksi"></td>
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
</html>