"<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$spesialis = $_POST['spesialis'];
	
	// buat query update
	$sql = "UPDATE dokter SET nama_dokter ='$nama', spesialis = '$spesialis'  WHERE id_dokter='$id'";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: dokter_list.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
