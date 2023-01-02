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
	$nama = $_POST['nama'];
$level = $_POST['level'];
	$update=mysqli_query($koneksi," UPDATE member SET nama='$nama',level='$level' WHERE id_member='$id'");
	if ($update){
			header("location:tampilmember.php");
	}else{
		echo mysqli_error();
	}
}
	$querykategori = "SELECT * FROM kategori";
	$resultkategori = mysqli_query($koneksi,$querykategori);
	
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM member WHERE id_member='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
<h2>tambah member<h/2>
<br/>
<a href="member.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA MEMBER</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama</td>
	<input type="hidden" name="id" value="<?php echo $data['id_member'];?>"/>
	<td><input type="text" name="nama" required value="<?php echo $data['nama'];?>"></td>
	</tr>
	<tr>
	<td>level</td>
	<td><select name="level">
	<option value="">-----Pilih</option>
	<option value="1">Gold</option>
	<option value="2">Silver</option>
	<option value="3">Platinum</option>
	</select>
	<td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="save"><td>
	</tr>
	</table>
	</form>
	
	</body>
	<?php }?>
	</html>