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
<?php
	include('/laragon/www/a/koneksi.php');
	$id =$_GET['id'];
	$c =mysqli_query($koneksi,"SELECT kelas.id,kelas.kelas,jurusan.jurusan,kelas.Wali_kelas FROM kelas Join jurusan on jurusan.id=kelas.id_jurusan WHERE kelas.id='$id'");
	$data =mysqli_fetch_array($c);
?>
	<center><h2>Ubah Data Kelas</h2></center>
	<fieldset style="width: 50%; margin: auto;">
	<legend>Form Ubah Data Kelas</legend>
	<form action="simpanedit.php" method="post">
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
		<p>
			Kelas<br />
			<input type="text" name="a" class="form-control" value="<?php echo $data['kelas'];?>" required>
		</p>
		<p>
			Jurusan<br />
			<?php
			include('/laragon/www/a/koneksi.php');
			$z = mysqli_query($koneksi,"SELECT * FROM jurusan");?>
			<select name="b" class="form-control">
				<?php
				foreach ($z as $data) {
				?>
				<option value="<?php echo $data['id'];?>">
					<?php echo $data['jurusan']?>
				</option>
				<?php } ?>
			</select>
		</p>
		<p>
			Wali Kelas<br />
			<?php
				include('/laragon/www/a/koneksi.php');
				$d = mysqli_query($koneksi,"SELECT kelas.id,kelas.kelas,jurusan.jurusan,kelas.Wali_kelas FROM kelas Join jurusan on jurusan.id=kelas.id_jurusan WHERE kelas.id='$id'");
				foreach ($d as $data) {
			?>
			<input type="text" name="c" class="form-control" value="<?php echo $data['Wali_kelas'];?>" required>
			<?php } ?>
		</p>
		<p>
			<input type="submit" value="Simpan" />
		</p>
		</form>
		</fieldset><br>
	<center><a href="kelas.php" class="btn btn-primary">&Lt; Kembali Ke Tabel</a></center>
</body>
</html>