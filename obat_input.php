<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
    $id = $_POST['id_obat'];
	$nama = $_POST['nama_obat'];
	
	// buat query
	$sql = "INSERT INTO obat (id_obat, nama_obat) VALUE ('$id', '$nama')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: obat_list.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: obat_list.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
