<?php 
	if (!isset($_GET["judul"]) || !isset($_GET["cover"]) || !isset($_GET["penulis"])){
		header("Location: index.php");
		exit;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detail Buku</title>
</head>
<body>

	<ul type="none">
		<li><img src="cover/<?= $_GET['cover']; ?>"></li>
		<li>Judul : <?= $_GET['judul']; ?></li>
		<li>Penulis : <?= $_GET['penulis']; ?></li>
	</ul>

	<a href="index.php">Kembali</a>

</body>
</html>

