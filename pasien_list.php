<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Pendaftaran Pasien | Rumah Sakit Jaya</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body>
	<header>
		<h3>Pasien yang sudah mendaftar</h3>
	</header>
	
	<nav>
		<a href="pasien.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Lahir</th>
			<th>Penyakit</th>
			<th>Nama Dokter</th>
			<th>ID Kamar</th>
			<th>Nama Obat</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM pasien";
		$query = mysqli_query($db, $sql);
		
		while($pasien = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$pasien['id_pasien']."</td>";
			echo "<td>".$pasien['nama_pasien']."</td>";
			echo "<td>".$pasien['alamat_pasien']."</td>";
			echo "<td>".$pasien['jenis_kelamin']."</td>";
			echo "<td>".$pasien['tanggal_lahir']."</td>";
			echo "<td>".$pasien['penyakit']."</td>";
			echo "<td>".$pasien['id_dokter']."</td>";
			echo "<td>".$pasien['id_kamar']."</td>";
			echo "<td>".$pasien['id_obat']."</td>";

			
			echo "<td>";
			echo "<a href='form-edit.php?id=".$pasien['id_pasien']."'>Edit</a> |   ";
			echo "<a href='hapus.php?id=".$pasien['id_pasien']."'>Hapus</a> |  ";
			echo "<a href='pasien_hasil.php?id=".$pasien['id_pasien']."'>Detail</a>";
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
