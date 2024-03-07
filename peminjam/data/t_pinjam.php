<?php

include '../../koneksi/koneksi.php';
 
$IDbuku = $_POST['IDbuku'];
$judul = $_POST['judul'];
$nama = $_POST['nama'];
$tgl_baca = $_POST['tgl_baca'];
 
mysqli_query($con,"INSERT into peminjaman (IDpeminjaman, IDbuku, judul, nama, tgl_baca) 
values('', '$IDbuku','$judul','$nama','$tgl_baca')");

$pilih = mysqli_query($con,"SELECT * FROM buku where idbuku = '$IDbuku'");
while($data = mysqli_fetch_assoc($pilih))
{
 
$id = $data["IDbuku"];
header("location: detail_buku.php?idbuku=$id");

}
?>