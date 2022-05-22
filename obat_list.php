<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Data Obat | Rumah Sakit Jaya</title>
</head>

<body>
	<header>
		<h3>Obat yang sudah terdaftar</h3>
	</header>
	
	<nav>
		<a href="obat_addform.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>id_obat</th>
			<th>nama_obat</th>
			<th>dosis</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM obat";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['id_obat']."</td>";
			echo "<td>".$siswa['nama_obat']."</td>";
			
			echo "<td>";
			echo "<a href='obat_formedit.php?id=".$siswa['id_obat']."'>Edit</a> | ";
			echo "<a href='obat_hapus.php?id=".$siswa['id_obat']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
