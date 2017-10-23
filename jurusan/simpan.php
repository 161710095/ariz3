<?php
include('/laragon/www/a/koneksi.php');
$jurusan = $_POST['jurusan'];
$tambah = "INSERT INTO jurusan SET 
jurusan='$jurusan'";
mysqli_query($koneksi,$tambah);
header("location:jurusan.php");
?>