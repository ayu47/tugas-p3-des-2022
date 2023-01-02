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
	$nama=$_POST['nama'];
	$password=$_POST['password'];
	$level=$_POST['level'];
	$stasus=$_POST['stasus'];
	$update=mysqli_query($koneksi,"UPDATE user SET nama='$nama', level='$level',password=$password, stasus='$stasus' WHERE id_user='$id'");
	if($update){
		header("location:tampiluser2.php");
	}else{
		echo mysqli_error($koneksi);
	}
}
$id = $_GET['id'];

	$query_mysqli = mysqli_query($koneksi,"SELECT * FROM user WHERE id_user='$id'")or die(mysqli_error());
	$nomor = 1;
	while($data = mysqli_fetch_array($query_mysqli)){
?>
<body>
	<h2>tambah user</h2>
	<br/>
	<a href="user.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Edit DATA USER</h3>
	<form method="POST">
		<table>
			<tr>			
				<td>Name</td>
				<input type="hidden" name="id" value="<?php echo $data['id_user'];?>"/>
				<td><input type="text" name="nama" required value="<?php echo $data['nama'];?>"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" required value="<?php echo $data['password'];?>"></td>
			</tr>
			<tr>
				<td>level</td>
				<td><select name="level" required>
				       <option value="">-----Pilih--------</option>
					    <option value="1">Admin</option>
				 		<option value="2">Staff</option>
						<option value="3">Spv</option>
						<option value="4">Mgr</option>
				</select>
				</td>
			</tr>
			<tr>
				<td>status</td>
				<td><select name="stasus" required>
				       <option value="">-----Pilih</option>
					    <option value="4">Aktif</option>
				 		<option value="0">Tdk aktf</option>
				</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="save"></td>
			</tr>		
		</table>
	</form>
<?php	}?>
</body>
</html>