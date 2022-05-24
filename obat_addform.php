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
		
        <p>
            <label for="id_obat">Id_Obat: </label>
            <textarea name="id_obat"></textarea>
        </p>

		<p>
			<label for="nama_obat">Nama: </label>
			<input type="text" name="nama_obat" placeholder="nama obat" />
		</p>
		
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
