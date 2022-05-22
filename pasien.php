<!DOCTYPE html>
<html>
<head>
	<title>Pengisian Data Pasien | Rumah Sakit Jaya</title>
</head>

<body>
	<header>
		<h3>Formuliar Data Pasien</h3>
	</header>
	
	<form action="pasien_masuk.php" method="POST">
		
		<fieldset>
		
		<p>
			<label for="nama_pasien">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat_pasien">Alamat: </label>
			<textarea name="alamat"></textarea>
		</p>

		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="L"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="P"> Perempuan</label>
		</p>
        <p>
			<label for="tanggal_lahir">Tanggal Lahir: </label>
			<input type="date" name="tanggal_lahir" placeholder="tanggal_lahir" />
		</p>
		<p>
			<label for="penyakit">Penyakit: </label>
			<input type="text" name="penyakit" placeholder="penyakit" />
		</p>
		<p>
			<input type="submit" value="Daftar" name="daftar" />
		</p>
		
		</fieldset>
	
	</form>
	
	</body>
</html>
