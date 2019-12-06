<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<a href="upload.php">upload</a>
	<table>
		<tr>
			<th>kode</th>
			<th>nama</th>
			<th>harga</th>
			<th>aksi</th>
		</tr>
		<?php
			include 'koneksi.php';
			$sql = "SELECT * from list";
			$query = mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_array($query)) {
				echo"<tr>
				<td>$row[kode]</td>
				<td>$row[nama]</td>
				<td>$row[harga]</td>
				<td><a href='edit.php?id=$row[id]'>edit</a> | 
				<a href='delete.php?id=$row[id]'>delete</a></td>";
				
			}
		?>
	</table>

</body>
</html>