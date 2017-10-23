<?php
include('/laragon/www/a/koneksi.php');
$id = $_POST['id'];
$kelas = $_POST['a'];
$jurusan = $_POST['b'];
$wali_kelas = $_POST['c'];
$tambah = "INSERT INTO kelas SET kelas='$kelas',id_jurusan='$jurusan',Wali_kelas='$wali_kelas'";
mysqli_query($koneksi,$tambah);
header("location:kelas.php");
?>