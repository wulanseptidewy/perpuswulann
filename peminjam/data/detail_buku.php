<!doctype html>
<html lang="en">
  <head>
    <title>Detail Buku</title>
    <!--css dan js bootstra -->
    <link rel="stylesheet" type="text/css" href="../../asset/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="../../asset/bootstrap/js/bootstrap.js"></script>
  </head>
  <body>

    <div class="container" style="margin-top: 7rem;">
    <div class="col-sm-10 mx-auto">
        <div class="card bg-info">
            <div class="row m-4">
                <?php
                    include '../../koneksi/koneksi.php';
                    if (isset($_GET['idbuku'])) {
                      $idbuku = $_GET['idbuku'];  
                    }else {
                        die ("Error, Data Tidak Ditemukan");
                    }
                    $query = mysqli_query($con, "SELECT * FROM buku WHERE idbuku='$idbuku' ");
                    $result = mysqli_fetch_array($query);
                ?>
                <div class="col text-center">
                    <img src="../../petugas/asset/sampul/<?php echo $result['Foto'];?>" style="margin-top: 30px;" height="300" alt="">
                </div>
                <div class="col" style="margin-top: 1rem;">
                <h2>Detail Buku</h2>
                <hr>
                    <table>
                        <tr>
                            <td><h5>ID Buku</h5></td>
                            <td><h5>: <?php echo $result['IDbuku'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Judul</h5></td>
                            <td><h5>: <?php echo $result['judul'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penulis</h5></td>
                            <td><h5>: <?php echo $result['penulis'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Penerbit</h5></td>
                            <td><h5>: <?php echo $result['penerbit'];?></h5></td>
                        </tr>
                        <tr>
                            <td><h5>Tahun Terbit</h5></td>
                            <td><h5>: <?php echo $result['tahunterbit'];?></h5></td>
                        </tr>
                    </table>
                    <a href="baca.php?idbaca=<?php echo $result['IDbuku'];?>" class="btn btn-success my-3">Baca Buku</a>
                    <a href="ulasan.php?idbuku=<?php echo $result['IDbuku'];?>" class="btn btn-danger text-white">Beri Ulasan</a>
                </div>
            </div>
        </div>
    </div>
     </body>
</html>