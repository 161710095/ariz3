<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="a.jpg.jpg" type="image/x-icon">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa</title>
	<link href="/a/Bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/a/Bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
	<link href="/a/Bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
	<link href="/a/Bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body>
<br>
<H2>DATA UNIVERSITAS</H2>
<br>
<ul class="nav nav-tabs nav-justified">
  <li role="presentation" class="active"><a href="/a/jurusan/jurusan.php" class="glyphicon glyphicon-wrench">JURUSAN</a></li>
  <li role="presentation"><a href="/a/kelas/kelas.php" class="glyphicon glyphicon-briefcase">KELAS</a></li>
  <li role="presentation"><a href="/a/siswa/siswa.php" class="glyphicon glyphicon-user">SISWA</a></li>
</ul>
<br>
<br>
<center>
<fieldset style="width : 85%; margin: auto;">
<legend>Tabel Data Jurusan</legend>
<table border="2" class="table table-striped">
	<th>Nomor</th>
	<th>Jurusan</th>
	<th colspan="2">opsi</th>
	<?php
	include('/laragon/www/a/koneksi.php');
	$a = mysqli_query($koneksi,"SELECT * FROM jurusan");
	$no = 1;
	foreach ($a as $data) {
		echo "<tr>
		<td>$no</td>
		<td>".$data ['jurusan']."</td>
		<td><a class ='btn btn-success'href='edit.php?id=$data[id]'>Ubah</a></td>
		<td><a class = 'btn btn-danger'href='delete.php?id=$data[id]'>Hapus</a></td>
		</tr>";
		$no++;
	}
	?>
</table>
</center><br>
<center><a href="tambah.php" class="btn btn-primary">Tambah Jurusan</a></center>
</body>
</html>