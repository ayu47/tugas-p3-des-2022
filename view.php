<h2>Report Penjualan </h2>

<table border="1">
<tr>

	<th>Member</th>
	<th>level</th>
	<th>diskon member</th>
	<th>diskon barang</th>
	<th>total pembelian</th>
	<th>total diskon</th>
	<th>Total transaksi</th>
	</tr>
<?php
	include"koneksi.php";
	$no=1;
	$ambildata=mysqli_query($koneksi,"select * from member join transaksii WHERE member.id_member = transaksii.member_id");
	while ($tampil = mysqli_fetch_array($ambildata)){
		?>
		<tr>
			
			<td><?php echo $tampil['nama']; ?></td>
			<td><?php echo $tampil['level']; ?></td>
			<td><?php echo $tampil['diskon_member']; ?></td>
			<td><?php echo $tampil['diskon_barang']; ?></td>
			<td><?php echo $tampil['total_pembelian']; ?></td>
			<td><?php echo $tampil['total_diskon']; ?></td>
			<td><?php echo $tampil['total_transaksi']; ?></td>
			<td>
			</tr>
		<?php
	}
			

?>
</table>
</body>
	</html>
	
	