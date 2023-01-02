<?php
include 'koneksi.php';
$id =$_GET['id'];
$query_delete = mysqli_query($koneksi,"DELETE FROM member WHERE id_member='$id'")or die(mysqli_error());
if($query_delete){
	header("location:tampilmember.php");
}else{
	echo mysqli_error();
}