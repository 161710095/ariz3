<?php
include('/laragon/www/a/koneksi.php');
$id =$_POST['id'];
$nis =$_POST['a'];
$nama =$_POST['b'];
$jk =$_POST['c'];
$ttl =$_POST['d'];
$alamat =$_POST['e'];
$kelas =$_POST['f'];

$edit = "UPDATE siswa SET nis='$nis',nama='$nama',jk='$jk',ttl='$ttl',alamat='$alamat',id_kelas='$kelas' WHERE siswa.id='$id'";
mysqli_query($koneksi,$edit);
header("location:siswa.php");
?>