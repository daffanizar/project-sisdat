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
		<div class="input">
			<label for="nama_dokter">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
			<label for="id_dokter">id_dokter: </label>
			<textarea name="id_dokter"></textarea>
			<label for="spesialis">Spesialis : </label>
			<input type="text" name="spesialis" placeholder="spesialis" />
			<input type="submit" class = "button" value="Daftar" name="daftar" />
		</div>
		</fieldset>
	
	</form>
	
	</body>
</html>
