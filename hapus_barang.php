<?php
include 'koneksi.php';
$id =$_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM barang WHERE id_barang='$id'")or die(mysqli_error());
if($query_delete){
	header("location:tampilbarang.php");
}else{
	echo mysqli_error();
}