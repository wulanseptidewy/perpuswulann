<!doctype html>
<html lang="en">
  <head>
    <!--css dan js bootstra -->
    <link rel="stylesheet" type="text/css" href="../../asset/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="../../asset/bootstrap/js/bootstrap.js"></script>

    <title>Detail Buku</title>
  </head>
  <body>

    <div class="container" style="margin-top: 2rem;">
    <div class="col-sm-10 mx-auto">
        <div class="card bg-info">
            <div class="row m-4">
                <?php
                    include '../../koneksi/koneksi.php';
                    if (isset($_GET['idbuku'])) {
                      $id = $_GET['idbuku'];  
                    }else {
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($con, "SELECT * FROM buku WHERE idbuku='$id' ");
                    $result = mysqli_fetch_array($query);
                ?>
                <div class="col text-center">
                    <img src="../asset/sampul/<?php echo $result['Foto'];?>" height="400" alt="">
                </div>
                <div class="col" style="margin-top: 2rem;">
                <h2>Detail Buku</h2>
                    <table>
                        <hr>
                        <tr>
                            <td><h5>ID Buku</h5></td>
                            <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Judul Buku</h5></td>
                            <td><h5>: <?php echo $result['judul'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penulis Buku</h5></td>
                            <td><h5>: <?php echo $result['penulis'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penerbit Buku</h5></td>
                            <td><h5>: <?php echo $result['penerbit'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tahun Terbit</h5></td>
                            <td><h5>: <?php echo $result['tahunterbit'];?></h5></td>
                        </tr>
                    </table>
                    <hr>
                    <a href="../buku.php" class="btn btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>