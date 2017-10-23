<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="a.jpg" type="image/x-icon">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Siswa SMK ASSALAAM BANDUNG</title>
	<link rel="stylesheet" type="text/css" href="/a/c.css">
	<link href="/a/Bootstrap/af/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="/a/Bootstrap/af/dist/css/bootstrap.css" rel="stylesheet">
	<link href="/a/Bootstrap/af/dist/css/bootstrap-theme.css" rel="stylesheet">
	<link href="/a/Bootstrap/af/dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<body class="a">
<font face="times new roman" color="black"> 
<br><fieldset style="width : 50%; margin: auto;">
<center><legend><font color="white">Tambah Data Siswa</font></legend></center>
<form action="simpan.php" method="post">
	<p>
		NIS<br />
		<input type="text" name="a" class="form-control" required/>
	</p>
	<p>
		Nama<br />
		<input type="text" name="b" class="form-control" required/>
	</p>
	<p>
		Jenis Kelamin<br />
		<input type="radio" name="c" value="Laki-Laki">Laki-Laki
		<input type="radio" name="c" value="Perempuan">Perempuan
	</p>
	<p>
		Tempat Tanggal Lahir<br />
		<input type="text" name="d" class="form-control" required/>
	</p>
	<p>
		Alamat<br />
		<textarea name="e" cols="40" class="form-control" required/></textarea>
	</p>
	<p>
		Kelas<br />
		<?php
		include('/laragon/www/a/koneksi.php');
		$a = mysqli_query($koneksi,"SELECT * FROM Kelas");
		?>
		<select name="f" class="btn btn-info">
		<option>-|-</option>
		<?php
			foreach ($a as $data) {
		?>
		<option value="<?php echo $data['id'];?>">
		<?php echo $data['kelas']?>
		</option>
		<?php } ?>
		</select> 
	</p>
	<p>
		<input type="submit" class="btn btn-success" value="Simpan" />
		<input type="reset" class="btn btn-danger" value="Reset" onclick="return confirm ('hapus data yang telah di input ?')">
	</p>
</form>
</fieldset>
<br />
<center>
	<a href="siswa.php" class="btn btn-primary">Kembali Ke Tabel</a>
</center>
</body>
</html>