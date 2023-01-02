<?php 
session_start();
if(isset($_SESSION['nama']) && isset($_SESSION['level'])){
}else{
	echo ("<script type='text/javascript'>alert('Anda harus login');document.location='index.php';</script>");
}
?>
<?php if($_SESSION['level']=='0'){?>
<center><a href="tampiluser.php">Menu user</a></center>
<center><a href="tampilbarang.php">Menu barang</a></center>
<center><a href="tampilkategori.php">Menu kategori</a></center>
<?php }else if($_SESSION['level']=='3'){ ?>
<center><a href="tampiltransaksi.php">Menu transaksi</a></center>
<?php } ?>
