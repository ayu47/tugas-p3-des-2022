<?php
 error_reporting(0);
 session_start();
 $username = $_SESSION['nama'];
 $password = $_SESSION['password'];
 $level = $_SESSION['level'];
 
   if(isset($_SESSION['nama']) && isset($_SESSION['level']))
   {
	   header('location: home.php');
   }
   else
   {
	   //header('location: index.php');
   }
 ?>
<form method="POST" action="session.php">
  <center>Silahkan Login </center>
   
    <table class="table table-dark">
		<tr>
			<td>Username</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="login" value="save"></td>
		</tr>
  </table>
  <form>
