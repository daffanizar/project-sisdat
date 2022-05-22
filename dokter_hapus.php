<?php

include("config.php");

if( isset($_GET['id']) ){
	
	// ambil id dari query string
	$id = $_GET['id'];
	
	// buat query hapus
	$sql = "DELETE FROM dokter WHERE id_dokter='$id'";
	$query = mysqli_query($db, $sql);
	
	// apakah query hapus berhasil?
	if( $query ){
		header('Location: dokter_list.php');
	} else {
		die("gagal menghapus...");
	}
	
} else {
	die("akses dilarang...");
}

?>
