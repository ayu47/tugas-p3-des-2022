<?php
session_start();
include_once('koneksi.php');

$username   = $_SESSION['nama'];
$password   = $_SESSION['password'];
$level      = $_SESSION['level']; 


$query=mysqli_query($koneksi,"Update user set online=0 where nama = '$username' and password = '$password' ");

unset($_SESSION['nama']);
unset($_SESSION['password']);
unset($_SESSION['level']); 

header('Location: index.php');

?>