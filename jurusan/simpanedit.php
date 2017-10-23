<?php
include('/laragon/www/a/koneksi.php');
$id =$_POST['id'];
$jurusan =$_POST['a'];
$edit ="UPDATE jurusan SET jurusan='$jurusan' WHERE id='$id'";
mysqli_query($koneksi,$edit);
header("location:jurusan.php");
?>