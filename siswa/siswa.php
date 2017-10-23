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
<font face="times new roman">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <p class="navbar-text navbar-left"><font color="white"><img src="#" srcset="https://www.smkassalaambandung.sch.id/style/images/logo.svg 1x, https://www.smkassalaambandung.sch.id/style/images/logo.svg 2x" class="logo-light" alt="" style="width: 230px; height: 50px;"></p></font>
    <br>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="/a/siswa/siswa.php">SISWA</a></li>
        <li><a href="/a/kelas/kelas.php">KELAS</a></li>
        <li><a href="/a/jurusan/jurusan.php">JURUSAN</a></li>
      </ul>
      </div>
      </nav>
<br>
<br>
<fieldset style="width : 85%; margin: auto;">
<center><legend><font color="white">Tabel Data Siswa</font></legend></center>
<center><table border="2" class="table table-striped">
	<th>Nomor</th>
	<th>NIS</th>
	<th>Nama</th>
	<th>Jenis Kelamin</th>
	<th>Tempat Tanggal Lahir</th>
	<th>Alamat</th>
	<th>Kelas</th>
	<th colspan="3">Opsi</th>
<?php
include('/laragon/www/a/koneksi.php');
	$a =mysqli_query($koneksi,"SELECT siswa.id,siswa.nis,siswa.nama,siswa.jk,siswa.ttl,siswa.alamat,kelas.kelas FROM siswa Join kelas on kelas.id=siswa.id_kelas");
	$no =1;
	foreach ($a as $data) {
	echo "<tr class='active'>
	<td>$no</td>
	<td>".$data['nis']."</td>
		<td>".$data['nama']."</td>
			<td>".$data['jk']."</td>
				<td>".$data['ttl']."</td>
					<td>".$data['alamat']."</td>
						<td>".$data['kelas']."</td>
	<td><a class='btn btn-success' href='rubah.php?id=$data[id]'>Ubah</a></td>
	<td><a class='btn btn-danger' href='delete.php?id=$data[id]'>Hapus</a></td>

	</tr>";
	$no++;
	}
?>
</table>
</center>
</fieldset>
<br>
<center><a href="tambah.php" class="btn btn-primary"> &plus;Tambah Data Mahasiswa</a></center>

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>