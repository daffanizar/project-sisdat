<!DOCTYPE html>
<html>
<head>
	<title>PASIEEEEEEEN | Rumah Sakit Jaya</title>
</head>

<body>
	<header>
		<h3>Pendaftaran Pasien</h3>
		<h1>Rumah Sakit</h1>
	</header>
	
	<h4>Menu</h4>
	<nav>
		<ul>
			<li><a href="pasien.php">Daftarkan Pasien</a></li>
			<li><a href="pasien_list.php">Pasien Terdata</a></li>
		</ul>
	</nav>
	
	
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
