<!DOCTYPE html>
<html>
<head>
	<title>PASIEEEEEEEN | Rumah Sakit Jaya</title>
	<link rel="stylesheet"  href="style.css">
</head>

<body id="bg-masuk">
	<header>
		<h3>Pendaftaran Pasien</h3>
		<h1>Rumah Sakit Jaya</h1>
	</header>
	
	<div class="container"></div>
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="pasien.php">Daftarkan Pasien</a></li>
			<li><a href="pasien_list.php">Pasien Terdata</a></li>
			<li><a href="dokter_list.php">Dokter Tersedia</a></li>
			<li><a href="ruangan_list.php">Ruangan Tersedia</a></li>
			<li><a href="obat_list.php">Obat Tersedia</a></li>
		</ul>
	</nav>
	</div>
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran pasien berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	
	</body>
</html>
