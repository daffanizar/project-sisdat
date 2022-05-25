<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Data Obat | Rumah Sakit Jaya</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body>
	<header>
		<h3>Obat yang sudah terdaftar</h3>
	</header>
	
	<nav>
		<a href="obat_addform.php" class = "button">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table class="tbl">
	<thead>
		<tr>
			<th>id_obat</th>
			<th>nama_obat</th>
			<th>Tindakan</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM obat";
		$query = mysqli_query($db, $sql);
		
		while($obat = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$obat['id_obat']."</td>";
			echo "<td>".$obat['nama_obat']."</td>";
			
			echo "<td>";
			echo "<a href='obat_formedit.php?id=".$obat['id_obat']."'>Edit</a> | ";
			echo "<a href='obat_hapus.php?id=".$obat['id_obat']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	<nav>
		<a href="index.php"class = "button1">[<-] Kembali ke Menu</a>
	</nav>
	
	</body>
</html>
