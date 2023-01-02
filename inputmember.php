<! DOCTYPE html>
<html>
<html>
<title>ayu47.com></title>
</head>
<?php
//koneksi database
include "koneksi.php";
if(!empty($_POST['save'])){
	$Nama = $_POST['Nama'];
$level = $_POST['level'];
$a=mysqli_query($koneksi,"insert into member values('','$Nama','$level')");
if ($a){
header("location:tampilmember.php");
}else{
	echo mysqli_error();
}
}

?>
<body>
<h2>ayu47.com<h/2>
<br/>
<a href="tampilmember.php">KEMBALI<a/>
<br/>
<br/>
<h3>TAMBAH DATA MEMBER</h3>
<form method="POST">
	<table>
	<tr>
	<td>Nama</td>
	<td><input type="text" Name="Nama"></td>
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
	</html>