<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: ruangan_list.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM kamar WHERE id_kamar='$id'";
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
	<title>Formulir Edit Ruangan | SMK Coding</title>
</head>

<body>
	<header>
		<h3>Formulir Edit Ruangan</h3>
	</header>
	
	<form action="ruangan_edit.php" method="POST">
		
		<fieldset>
			
			<input type="hidden" name="id" value="<?php echo $siswa['id_kamar'] ?>" />
		<p>
			<label for="golongan">Golongan: </label>
			<input type="text" name="golongan" placeholder="golongan" value="<?php echo $siswa['golongan'] ?>" />
		</p>
		
		<p>
			<input type="submit" value="Simpan" name="simpan" />
		</p>
		
		</fieldset>
		
	
	</form>
	
	</body>
</html>
