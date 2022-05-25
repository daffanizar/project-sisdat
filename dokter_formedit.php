<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: dokter_list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM dokter WHERE id_dokter='$id'";
$query = mysqli_query($db, $sql);
$dokter = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Dokter | Rumah Sakit Jaya</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body>
	<header>
		<h3>Formulir Edit Siswa</h3>
	</header>
	
	<form action="dokter_edit.php" method="POST">
		
		<fieldset>
		<div class="input">	
			<input type="hidden" name="id" value="<?php echo $dokter['id_dokter'] ?>" />

			<label for="nama_dokter">Nama: </label>
			<input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $dokter['nama_dokter'] ?>" />

			<label for="spesialis">Spesialis : </label>
			<input type="text" name="spesialis" placeholder="spesialis" value="<?php echo $dokter['spesialis'] ?>" />

			<input type="submit" class = "button" value="Simpan" name="simpan" />
		</div >	
		</fieldset>
		
	
	</form>
	
	</body>
</html>
