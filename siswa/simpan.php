<?php 
include('/laragon/www/a/koneksi.php');
$nis =$_POST['a'];
$nama =$_POST['b'];
$jk =$_POST['c'];
$ttl =$_POST['d'];
$alamat =$_POST['e'];
$kelas =$_POST['f'];

$tambah ="INSERT INTO siswa SET nis='$nis',nama='$nama',jk='$jk',ttl='$ttl',alamat='$alamat',id_kelas='$kelas'";
mysqli_query($koneksi,$tambah);
header("location:siswa.php");
?>