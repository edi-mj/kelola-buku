<?php
	require('functions.php');
	$books = query('SELECT * FROM buku');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>dashboard</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>

	<!-- <ul>
		<?php foreach($books as $book) : ?>
			<li><a href="rincian.php?judul=<?= $book["judul"]; ?>&penulis=<?= $book["penulis"]; ?>&cover=<?= $book["cover"]; ?>">
				<?= $book["judul"]; ?>
			</a></li>
		<?php endforeach; ?>
	</ul> -->


	<div class="content">
		<table cellpading="50" cellspacing="0">
		<caption>
          <b>DAFTAR BUKU</b>
        </caption>
		<thead>
			<tr>
				<th>No.</th>
				<th>Judul</th>
				<th>Cover</th>
				<th>Penulis</th>
				<th>Penerbit</th>
				<th>Tahun Terbit</th>
				<th>Aksi</th>
			</tr>
		</thead>
			<?php $no = 1;?>
			<?php foreach($books as $book): ?>
			<tr>
				<td><?= $no;?></td>
				<td><?= $book["judul"]; ?></td>
				<td><img width="100" src="cover/<?= $book["cover"]; ?>"></td>
				<td><?= $book["penulis"]; ?></td>
				<td><?= $book["penerbit"]; ?></td>
				<td><?= $book["tahun_terbit"]; ?></td>
				<td>
					<div class="tombol">
						<button id="ubah">Ubah</button>
						<button id="hapus">Hapus</button>
					</div>
				</td>
			</tr>
			<?php $no++; ?>
			<?php endforeach; ?>
		</table>
		<div class="tombol">
			<button id="tambah"><a href="tambah.php">Tambah</a></button>
      </div>
	</div>
	
</body>
</html>