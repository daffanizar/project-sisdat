<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
    $id = $_POST['id_dokter'];
	$nama = $_POST['nama'];
	$spesialis = $_POST['spesialis'];
	
	// buat query
	$sql = "INSERT INTO dokter (id_dokter, nama_dokter, spesialis) VALUE ('$id','$nama','$spesialis')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: dokter_list.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: dokter_list.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
