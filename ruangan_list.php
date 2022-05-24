<?php include("config.php"); ?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar Ruangan Tersedia | Rumah Sakit Jaya</title>
</head>

<body>
	<header>
		<h3>Ruangan yang Tersedia</h3>
	</header>
	
	<nav>
		<a href="ruangan_addform.php">[+] Tambah Baru</a>
	</nav>
	
	<br>
	
	<table border="1">
	<thead>
		<tr>
			<th>id_kamar</th>
			<th>Golongan</th>
            <th>Tersedia</th>
		</tr>
	</thead>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM kamar";
		$query = mysqli_query($db, $sql);
		
		while($ruangan = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$ruangan['id_kamar']."</td>";
			echo "<td>".$ruangan['golongan']."</td>";

			
			echo "<td>";
			echo "<a href='ruangan_formedit.php?id=".$ruangan['id_kamar']."'>Edit</a> | ";
			echo "<a href='ruangan_hapus.php?id=".$ruangan['id_kamar']."'>Hapus</a>";
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
