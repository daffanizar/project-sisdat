<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: pasien_list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM pasien WHERE id_pasien=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Siswa | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Siswa</h3>
	</header>
	
	<form action="pasien_edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $siswa['id_pasien'] ?>" />
		
		<p>
			<label for="nama_pasien">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama_pasien'] ?>" />
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<?php $jk = $siswa['jenis_kelamin']; ?>
			<label><input type="radio" name="jenis_kelamin" value="L" <?php echo ($jk == 'L') ? "checked": "" ?>> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="P" <?php echo ($jk == 'P') ? "checked": "" ?>> Perempuan</label>
		</p>

		<p>
			<label for="alamat_pasien">Alamat: </label>
			<input type="text" name="alamat" placeholder="alamat" value="<?php echo $siswa['alamat_pasien'] ?>" />
		</p>		
		<p>
			<label for="tangal_lahir">Tanggal Lahir: </label>
			<input type="date" name="tanggal_lahir" placeholder="tanggal_lahir" value="<?php echo $siswa['tanggal_lahir'] ?>" />
		</p>
		<p>
			<label for="penyakit">Penyakit: </label>
			<input type="text" name="penyakit" placeholder="penyakit" value="<?php echo $siswa['penyakit'] ?>" />
		</p>
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
