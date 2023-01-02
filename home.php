<?php 
session_start();
if(isset($_SESSION['nama']) && isset($_SESSION['level'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}
?>
<?php if($_SESSION['level']=='1'){
	echo "<center><b>WELHOME ADMIN</b></center><br>";
	?>
<center><a href="tampiluser2.php">Menu User</a></center>
<center><a href="tampilbarang.php">Menu Barang</a></center>
<center><a href="tampilkategori.php">Menu kategori</a></center>
<center><a href="tampiltransaksi.php">Menu Transaksi</a></center>
<center><a href="tampilmember.php">Menu Member</a></center>
<center><a href="logout.php">Log Out</a></center>
<?php }else if($_SESSION['level']=='2'){ 
echo "<center><b>WELHOME USER</b></center><br>";
?>
<center><a href="tampiltransaksi1">Menu Transaksi</a></center>
<center><a href="logout.php">Log Out</a></center>
<?php } ?>



