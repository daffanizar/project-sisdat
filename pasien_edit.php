"<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	// ambil data dari formulir
    $id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$tanggal = $_POST['tanggal_lahir'];
	$penyakit = $_POST['penyakit'];
	
	// buat query update
	$sql = "UPDATE pasien SET nama_pasien='$nama', alamat_pasien='$alamat', jenis_kelamin='$jk', tanggal_lahir = '$tanggal', penyakit ='$penyakit' WHERE id_pasien=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: pasien_list.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
