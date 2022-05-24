<!DOCTYPE html>
<html>
<head>
	<title>Pengisian Data Dokter | Rumah Sakit Jaya</title>	
	<link rel="stylesheet"  href="style.css">
</head>

<body>
	<header>
		<h3>Formuliar Data Dokter</h3>
	</header>
	
	<form action="dokter_input.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama_dokter">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="id_dokter">id_dokter: </label>
			<textarea name="id_dokter"></textarea>
		</p>
		<p>
			<label for="spesialis">Spesialis : </label>
			<input type="text" name="spesialis" placeholder="spesialis" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
