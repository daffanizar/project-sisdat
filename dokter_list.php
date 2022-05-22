<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Siswa Baru | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Siswa yang sudah mendaftar</h3>
	</header>
	
	<nav>
		<a href="dokter_addform.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>id_dokter</th>
			<th>Nama</th>
			<th>Spesialis</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM dokter";
		$query = mysqli_query($db, $sql);
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['id_dokter']."</td>";
			echo "<td>".$siswa['nama_dokter']."</td>";
			echo "<td>".$siswa['spesialis']."</td>";

			
			echo "<td>";
			echo "<a href='dokter_formedit.php?id=".$siswa['id_dokter']."'>Edit</a> | ";
			echo "<a href='dokter_hapus.php?id=".$siswa['id_dokter']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
