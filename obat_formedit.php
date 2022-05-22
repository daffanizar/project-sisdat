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
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Formulir Edit Obat | Rumah Sakit Jaya</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Obat</h3>
	</header>
	
	<form action="obat_edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $siswa['id_obat'] ?>" />
		<p>
			<label for="nama_obat">nama: </label>
			<input type="text" name="nama" placeholder="nama obat" value="<?php echo $siswa['nama'] ?>" />
		</p>
		
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
