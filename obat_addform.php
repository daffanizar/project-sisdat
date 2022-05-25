<!DOCTYPE html>
<html>
<head>
	<title>Pengisian Data Obat | Rumah Sakit Jaya</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body>
	<header>
		<h3>Formuliar Data Obat</h3>
	</header>
	
	<form action="obat_input.php" method="POST">
		
		<fieldset>
		
		<div class="input">
            <label for="id_obat">Id_Obat: </label>
            <textarea name="id_obat"></textarea>

			<label for="nama_obat">Nama: </label>
			<input type="text" name="nama_obat" placeholder="nama obat" />

			<input type="submit" class = "button" value="Daftar" name="daftar" />

		</div>
		</fieldset>
	
	</form>
	
	</body>
</html>
