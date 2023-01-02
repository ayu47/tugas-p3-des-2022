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
	 
$nama_kategori = $_POST['nama_kategori'];
// menginput data ke database
$query=mysqli_query($koneksi,"insert into kategori values('','$nama_kategori')");
 if($query)
 {
	// mengalihkan halaman kembali
	header("location:tampilkategori.php");
 }
 else
 {
	echo mysqli_error($koneksi);
    }
  }
  
 
?>
<body>
    <h2>tabel kategori</h2>
	<br/>
	<a href="kategori.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA KATEGORI</h3>
	<form method="POST">
	    <table>
		    <tr>
			   <td>nama kategori</td>
			   <td><input type="text" name="nama_kategori"></td>
		          
			</tr>
			<tr>
	     <td></td>
		 <td><input type="submit" name="save"></td>
	 </tr>
    </table>
   </form>
</body>
</html>