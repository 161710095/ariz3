<?php
include('/laragon/www/a/koneksi.php');
$id =$_GET['id'];
$delete = "DELETE FROM siswa WHERE siswa.id='$id'";
mysqli_query($koneksi,$delete);
header("location:siswa.php");
?>