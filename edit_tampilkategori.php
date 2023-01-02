<!DOCTYPE html>
<html>
<head>
	<title>Ayu47.com</title>
</head>
<?php 
// koneksi database
include 'koneksi.php';
if(isset($_POST['save'])){
	$id=$_POST['id'];  
$nama_kategori = $_POST['nama_kategori'];
$update=mysqli_query($koneksi,"UPDATE kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id'");
 if($update){
	header("location:tampilkategori.php");
 }else{
	echo mysqli_error($koneksi);
    }
  }
  
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM kategori WHERE id_kategori='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
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
			   <td><input type="hidden" name="id" value="<?php echo $data['id_kategori'];?>"/>
		        <td><input type="text" name="nama_kategori" required value="<?php echo $data['nama_kategori'];?>"></td>  
			</tr>
			<tr>
	     <td></td>
		 <td><input type="submit" name="save"></td>
	 </tr>
    </table>
   </form>
   <?php }?>
</body>
</html>