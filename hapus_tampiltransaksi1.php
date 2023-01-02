<?php
include 'koneksi.php';
$id =$_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM transaksii WHERE id_transaksi='$id'")or die(mysqli_error());
if($query_delete){
	header("location:tampiltransaksi1.php");
}else{
	echo mysqli_error();
}