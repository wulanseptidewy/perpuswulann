<?php 
include '../../koneksi/koneksi.php';
 
$id = $_GET['IDpeminjaman'];
 
mysqli_query($con, "DELETE FROM peminjaman WHERE IDpeminjaman='$id'") or die(mysql_error());
 
header("location:../peminjam.php");
 
?>