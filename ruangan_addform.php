<!DOCTYPE html>
<html>
<head>
	<title>Pengisian Data Kamar | Rumah Sakit Jaya</title>
</head>

<body>
	<header>
		<h3>Formuliar Data Kamar</h3>
	</header>
	
	<form action="ruangan_input.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="id_kamar">ID_Kamar: </label>
            <textarea name="id_kamar"></textarea>
		</p>
		<p>
			<label for="golongan">Golongan: </label>
			<input type="text" name="golongan" placeholder="golongan" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>