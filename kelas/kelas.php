<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="a.jpg.jpg" type="image/x-icon">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Siswa</title>
	<link rel="stylesheet" type="text/css" href="/a/c.css">
	<link href="/a/Bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/a/Bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
	<link href="/a/Bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
	<link href="/a/Bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body class="b">
<font face="times new roman">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <p class="navbar-text navbar-left"><font color="white"><img src="#" srcset="https://www.smkassalaambandung.sch.id/style/images/logo.svg 1x, https://www.smkassalaambandung.sch.id/style/images/logo.svg 2x" class="logo-light" alt="" style="width: 230px; height: 50px;"></p></font>
    <br>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/a/siswa/siswa.php">SISWA</a></li>
        <li class="active"><a href="/a/kelas/kelas.php">KELAS</a></li>
        <li><a href="/a/jurusan/jurusan.php">JURUSAN</a></li>
      </ul>
      </div>
      </nav>
<br>
<br>
<center>
<fieldset style="width : 85%; margin: auto;">
<legend><font color="white">Tabel Data Kelas</font></legend>
<table border="2" class="table table-striped">
	<th>Nomor</th>
	<th>Kelas</th>
	<th>Jurusan</th>
	<th>Wali Kelas</th>
	<th colspan="2">opsi</th>
	<?php
	include('/laragon/www/a/koneksi.php');
	$d = mysqli_query($koneksi,"SELECT kelas.id,kelas.kelas,jurusan.jurusan,kelas.Wali_kelas FROM kelas Join jurusan on jurusan.id=kelas.id_jurusan");
	$no = 1;
	foreach ($d as $data) {
		echo "<tr class='active'>
		<td>$no</td>
		<td>".$data['kelas']."</td>
		<td>".$data['jurusan']."</td>
		<td>".$data['Wali_kelas']."</td>
		<td><a class ='btn btn-success'href='ubah.php?id=$data[id]'>Ubah</a></td>
		<td><a class = 'btn btn-danger'href='delete.php?id=$data[id]'>Hapus</a></td>
		</tr>";
		$no++;
	}
	?>
	</table>
	</center>
	<br>
<center><a href="tambah.php" class="btn btn-primary">Tambah Kelas</a></center>
</body>
</html>