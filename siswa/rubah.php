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
<br>
<body class="a">
<?php 
include('/laragon/www/a/koneksi.php');
	$id =$_GET['id'];
	$a =mysqli_query($koneksi,"SELECT siswa.id,siswa.nis,siswa.nama,siswa.jk,siswa.ttl,siswa.alamat,kelas.kelas FROM siswa Join kelas on kelas.id=siswa.id_kelas WHERE siswa.id='$id'");
$data = mysqli_fetch_array ($a);
?>
<fieldset style="width : 50%; margin: auto;">
<center><legend><font color="white">Ubah Data Siswa</font></legend></center>
<font color="black">
<form action="simpanedit.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data['id'];?>">
	<p>
		NIS<br />
		<input type="text" name="a" class="form-control" value="<?php echo $data['nis'];?>" required/>
	</p>
	<p>
		Nama<br />
		<input type="text" name="b" class="form-control" value="<?php echo $data['nama'];?>" required/>
	</p>
	<p>
		Jenis Kelamin<br />
		<input type="radio" name="c" value="Laki-Laki">Laki-Laki
		<input type="radio" name="c" value="Perempuan">Perempuan	
	</p>
	<p>
		Tempat Tanggal Lahir<br />
		<input type="text" name="d" class="form-control" value="<?php echo $data['ttl'];?>" required/>
	</p>
	<p>
		Alamat<br />
		<input name="e" cols="40" class="form-control" value="<?php echo $data['alamat'];?>" required/>
	</p>
	<p>
		Kelas<br />
		<?php
		include('/laragon/www/a/koneksi.php');
		$a = mysqli_query($koneksi,"SELECT * FROM Kelas");
		?>
		<select name="f" class="btn btn-info">
		<option>-|-</option>
		<?php foreach ($a as $data) {
		?>
		<option value="<?php echo $data['id'];?>">
		<?php echo $data['kelas']?>
		</option>
		<?php } ?>
		</select>
	</p>
	<br>
	<p>
		<input type="submit" class="btn btn-success" value="Simpan" />
	</p>
</form>
</fieldset>
<br />
<center>
	<a href="siswa.php" class="btn btn-primary">Kembali Ke Tabel</a>
</center>
</font>
</body>
</html>