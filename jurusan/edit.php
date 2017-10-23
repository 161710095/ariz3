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
	<?php
		include('/laragon/www/a/koneksi.php');
			$id =$_GET['id'];
				$c = mysqli_query($koneksi,"SELECT * FROM jurusan WHERE id='$id'");
					$data = mysqli_fetch_array($c);
	?>
	<center><h2>Ubah Jurusan</h2></center>
	<fieldset style="width: 50%; margin: auto;">
	<legend>Form Ubah Jurusan</legend>
	<form action="simpanedit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<p>
			Jurusan<br />
			<input type="text" name="a" class="form-control" value="<?php echo $data['jurusan'];?>">
		</p>
		<p>
			<input type="submit" value="Simpan">
		</p>
	</form>
	</fieldset><br />
	<center><a href="jurusan.php" class="btn btn-primary">&Lt; Kembali Ke Tabel</a></center>
</body>
</html>