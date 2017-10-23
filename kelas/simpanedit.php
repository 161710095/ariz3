6<?php
include('/laragon/www/a/koneksi.php');
$id = $_POST['id'];
$kelas = $_POST['a'];
$jurusan = $_POST['b'];
$wali_kelas = $_POST['c'];
$edit = "UPDATE kelas SET kelas='$kelas',id_jurusan='$jurusan',Wali_kelas='$wali_kelas' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:kelas.php");
?>