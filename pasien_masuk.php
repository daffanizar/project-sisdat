<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){
	
	// ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$tanggal = $_POST['tanggal_lahir'];
	$penyakit = $_POST['penyakit'];
	$dokter = $_POST['id_dokter'];
	$obat = $_POST['id_obat'];
	$kamar = $_POST['id_kamar'];
	
	// buat query
	$sql = "INSERT INTO pasien (nama_pasien, alamat_pasien, jenis_kelamin, penyakit, tanggal_lahir,id_dokter,id_obat,id_kamar) 
	VALUE ('$nama', '$alamat', '$jk', '$penyakit','$tanggal','$dokter','$obat','$kamar')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
