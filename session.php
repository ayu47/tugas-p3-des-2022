<?php
session_start();
include_once("koneksi.php");
if(isset($_POST['login']) ? $_POST['login']:''){
	$username= isset($_POST['nama']) ? $_POST['nama']:'';
	$password= isset($_POST['password']) ? $_POST['password']:'';
	$level= isset($_POST['level']) ? $_POST['level']:'';
	$passmd5=md5($password);
	if(empty($username)){
		echo("<script type='text/javascript'>
		alert('silahkan isi semua data');document.location='javascript:history.back(1)';
		</script>");
		}else{
         $query=mysqli_query($koneksi,"SELECT nama, password, level, online FROM user  WHERE stasus='1' and nama = '$username' and password = '$passmd5' ");
            $data=mysqli_fetch_array($query);

            if(($username == $data['nama']) && ($passmd5 == $data['password']) && ($data['online'] == '0') ){
			$_SESSION['password']=$data['password'];
			$_SESSION['nama']=$data['nama'];
            $_SESSION['level']=$data['level'];
			$_SESSION['online']=$data['online'];
			$query= mysqli_query($koneksi,"update user set online=1 where nama = '$username' and password = '$passmd5' ");
			header('Location:home.php');
		 }
            else if ($username == $data['nama'] && $passmd5 == $data['password'] && $data['online'] == '1')
            {
                echo ("
                    <script type='text/javascript'> 
                        alert ('username Sedang digunakan'); document.location='javascript:history.back(1)';
                    </script>
                ");
            }
            else
            {
                echo ("
                    <script type='text/javascript'> 
                        alert ('username atau password anda salah'); document.location='javascript:history.back(1)';
                    </script>
                ");
            }
        }
    }

?>