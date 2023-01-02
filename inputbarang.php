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
	 
$nama_barang = $_POST['nama_barang'];
$kode_barang = $_POST['kode_barang'];
$qty = $_POST['qty'];
$kategori_id = $_POST['kategori_id'];
// menginput data ke database
$query=mysqli_query($koneksi,"insert into barang values('','$nama_barang','$kode_barang','$qty','$kategori_id')");
 if($query)
 {
	// mengalihkan halaman kembali
	header("location:tampilbarang.php");
 }
 else
 {
	echo mysqli_error($koneksi);
    }
  }
  
  $querykategori = "select * from kategori";
  $resultkategori = mysqli_query ($koneksi,$querykategori);
?>
<body>
    <h2>tabel barang</h2>
	<br/>
	<a href="barang.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA BARANG</h3>
	<form method="POST">
	    <table>
		    <tr>
			   <td>nama barang</td>
			   <td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
			<td>kode barang</td>
			<td><input type="text" name="kode_barang"></td>
		</tr>
		<tr>
		   <td>qty</td>
		   <td><input type="number" name="qty"></td>
		          
		</tr>
		<tr>
	      <td>kategori barang</td>
		  <td><select name="kategori_id">
		  <option value="">-----pilih</option>
			   
			   <?php
			   while ($datakategori=mysqli_fetch_array($resultkategori))
			   {
				   echo "<option value=$datakategori[id_kategori]>$datakategori[nama_kategori]</option>";
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