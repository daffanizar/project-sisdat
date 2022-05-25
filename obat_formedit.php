<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: obat_list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM obat WHERE id_obat='$id'";
$query = mysqli_query($db, $sql);
$obat = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Obat | Rumah Sakit Jaya</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body>
	<header>
		<h3>Formulir Edit Obat</h3>
	</header>
	
	<form action="obat_edit.php" method="POST">
		
		<fieldset>
		<div class="input">		
			<input type="hidden" name="id" value="<?php echo $obat['id_obat'] ?>" />

			<label for="nama_obat">Nama Obat : </label>
			<input type="text" name="nama_obat" placeholder="nama obat" value="<?php echo $obat['nama_obat'] ?>" />

			<input type="submit" class = "button" value="Simpan" name="simpan" />
		</div>
		</fieldset>
		
	
	</form>
	
	</body>
</html>
