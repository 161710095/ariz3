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
  <li role="presentation"><a href="/a/jurusan/jurusan.php" class="glyphicon glyphicon-wrench">JURUSAN</a></li>
  <li role="presentation" class="active"><a href="/a/kelas/kelas.php" class="glyphicon glyphicon-briefcase">KELAS</a></li>
  <li role="presentation"><a href="/a/siswa/siswa.php" class="glyphicon glyphicon-user">SISWA</a></li>
</ul>
<br>
<br>
<h2 align="center">Tambah Kelas</h2>
<fieldset style="width: 50%; margin: auto;">
	<legend>Form Tambah Kelas</legend>
	<form action="simpan.php" method="post">
		<p>
			Kelas<br />
			<input type="text" name="a" required />
		</p>
		<p>
			Jurusan<br />
			<?php 
				include('/laragon/www/a/koneksi.php');
			$z = mysqli_query($koneksi,"SELECT * FROM jurusan");?>
			<select name="b">
				<option>-|-</option>
			<?php foreach ($z as $data){
			?>
			<option value="<?php echo $data['id'];?>">
			<?php
				echo $data['jurusan']
			?>
			</option>
			<?php } ?>
			</select>
		</p>
		<p>
			Wali Kelas<br />
			<input type="text" name="c">
		</p>
		<p>
		<input type="submit" value="Simpan" />
		<input type="reset" value="Reset" onclick="return confirm ('hapus data yang telah di input?')">
	</p>
	</form>
</fieldset>
<br />
<center><a href="kelas.php" class="btn btn-primary">&Lt; Kembali Ke Tabel</a></center>
</body>
</html>