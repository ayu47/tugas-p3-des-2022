<?php
include 'koneksi.php';
$id =$_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM kategori WHERE id_kategori='$id'")or die(mysqli_error());
if($query_delete){
	header("location:tampilkategori.php");
}else{
	echo mysqli_error();
}