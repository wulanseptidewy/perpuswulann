<?php 
include '../../koneksi/koneksi.php';
 
$id = $_GET['IDbuku'];
 
mysqli_query($con, "DELETE FROM buku WHERE IDbuku='$id'") or die(mysql_error());
 
header("location:../buku.php");
 
?>