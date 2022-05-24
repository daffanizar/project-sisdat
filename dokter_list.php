<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendataan Dokter | Rumah Sakit Jaya</title>	
	<link rel="stylesheet"  href="style.css">
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
		
		while($dokter = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$dokter['id_dokter']."</td>";
			echo "<td>".$dokter['nama_dokter']."</td>";
			echo "<td>".$dokter['spesialis']."</td>";

			
			echo "<td>";
			echo "<a href='dokter_formedit.php?id=".$dokter['id_dokter']."'>Edit</a> | ";
			echo "<a href='dokter_hapus.php?id=".$dokter['id_dokter']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	<nav>
		<a href="index.php">[<-] Kembali ke Menu</a>
	</nav>
	
	</body>
</html>
