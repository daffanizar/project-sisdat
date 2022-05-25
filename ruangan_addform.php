<!DOCTYPE html>
<html>
<head>
	<title>Pengisian Data Kamar | Rumah Sakit Jaya</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body>
	<header>
		<h3>Formuliar Data Kamar</h3>
	</header>
	
	<form action="ruangan_input.php" method="POST">
		
		<fieldset>
		<div class="input">	

			<label for="id_kamar">ID_Kamar: </label>
            <textarea name="id_kamar"></textarea>

			<label for="golongan">Golongan: </label>
			<input type="text" name="golongan" placeholder="golongan" />

			<input type="submit" class = "button" value="Daftar" name="daftar" />
		</div>
		
		</fieldset>
	
	</form>
	
	</body>
</html>