<?php
	include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"SELECT * FROM user");
				?>
				<form method="POST">
<html>
		<head>
			<title>UnayahNurlailiNovianti.com</title>
		</head>
		<body>
			<h2>tabel user</h2>
			<br/>
			<a href="user.php">+ TAMBAH USER</a>
			<br/>
			<table border="1">
				<tr>
					<th>no</th>
					<th>nama</th>
					<th>password</th>
					<th>level</th>
					<th>stasus</th>
					<th>opsi</th>
				</tr>
				<?php 
					
					while($d = mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama']; ?></td>
					<td><?php echo $d['password']; ?></td>
					<td><?php echo $d['level']; ?></td>
					<td><?php echo $d['stasus']; ?></td>
					<td>
						<a href="edit_user.php?id=<?php echo $d['id']; ?>">EDIT</a>
						<a href="hapus_user.php?id=<?php echo $d['id']; ?>">HAPUS</a>
					</td>
				</tr>
				<?php
				}
				?>
			</table>
		</body>
	</html>
	</form>