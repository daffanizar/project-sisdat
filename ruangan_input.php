<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
    $id = $_POST['id_kamar'];
	$golongan = $_POST['golongan'];
	
	// buat query
	$sql = "INSERT INTO kamar (id_kamar, golongan) VALUE ('$id', '$golongan')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: ruangan_list.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: ruangan_list.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
