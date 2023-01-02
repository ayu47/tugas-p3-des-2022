<?php
session_start();
include_once("koneksi.php");
if(isset($_POST['login']) ? $_POST['login']:''){
	$username= isset($_POST['nama']) ? $_POST['nama']:'';
	$password= isset($_POST['password']) ? $_POST['password']:'';
	$level= isset($_POST['level']) ? $_POST['level']:'';
	$passmd5=md5($password);
	if(empty($username) || empty($username)){
		echo("<script type='text/javascript'>
		alert('silahkan isi semua data');document.location='javascript:history.back(1)';
		</script>");
		}else{
		$query=mysqli_query($koneksi,"select*from user where nama='$username' and password='$passmd5'");
		$data=mysqli_fetch_array($query);
		if($username==$data['nama'] && $passmd5==$data ['password']) {
			$_SESSION['id_user']=$data['id_user'];
			$_SESSION['nama']=$data['nama'];
            $_SESSION['level']=$data['level'];
			header('Location:home.php');
		}else{
			echo ("<script type='text/javascript'> alert ('username atau password anda salah'); document.location='javascript:history.back(1)';
			</script>");
		}
		}
}
?>	