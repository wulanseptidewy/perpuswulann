<!doctype html>
<html lang="en">
  <head>
    <title>Sedang Membaca Buku</title>
    <link rel="stylesheet" type="text/css" href="../../asset/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="../../asset/bootstrap/js/bootstrap.js"></script>  </head>
  <body>
    
  <?php
    include '../../koneksi/koneksi.php';
    if (isset($_GET['idbaca'])) {
        $id = $_GET['idbaca'];
    }
    $sql = mysqli_query($con, "SELECT * from buku where IDbuku='$id'");
    $info = mysqli_fetch_array($sql);
  ?>

        <embed src="../../petugas/asset/buku/<?php echo $info['Buku'];?>" type="application/pdf" width="100%" height="900">
  </body>
</html>