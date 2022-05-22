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
		
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			echo "<td>".$siswa['id_kamar']."</td>";
			echo "<td>".$siswa['Golongan']."</td>";

			
			echo "<td>";
			echo "<a href='ruangan_formedit.php?id=".$siswa['id_kamar']."'>Edit</a> | ";
			echo "<a href='ruangan_hapus.php?id=".$siswa['id_kamar']."'>Hapus</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	
	<p>Total: <?php echo mysqli_num_rows($query) ?></p>
	
	</body>
</html>
