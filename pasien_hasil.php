<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Detail Pasien | Rumah Sakit Jayag</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body>
	<header>
		<h3>Pasien yang Terdata</h3>
	</header>
	
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Penyakit</th>
			<th>Nama Dokter</th>
			<th>ID Kamar</th>
			<th>Nama Obat</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT p.id_pasien, p.nama_pasien, p.penyakit, k.id_kamar, d.nama_dokter, o.nama_obat 
        FROM pasien p 
        left join kamar k on p.id_kamar = k.id_kamar
        join dokter d on p.id_dokter = d.id_dokter
        join obat o on p.id_obat = o.id_obat;";

		$query = mysqli_query($db, $sql);
		
		while($pasien = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$pasien['id_pasien']."</td>";
			echo "<td>".$pasien['nama_pasien']."</td>";
			echo "<td>".$pasien['penyakit']."</td>";
			echo "<td>".$pasien['nama_dokter']."</td>";
			echo "<td>".$pasien['id_kamar']."</td>";
			echo "<td>".$pasien['nama_obat']."</td>";

	
			
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
