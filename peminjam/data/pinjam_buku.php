<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="../../asset/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="../../asset/bootstrap/js/bootstrap.js"></script>

    <title>Form Pinjam Buku</title>
  </head>
  <body>

    <div class="container">
        <div class="card bg-info" style="margin-top: 1rem;">
            <div class="row m-3">
                <?php
                    if(isset($_GET['idbuku'])) {
                        $idbuku = $_GET['idbuku'];
                    }
                    else{
                        die("Data tidak tersedia");
                    }
                    include "../../koneksi/koneksi.php";
                    $query = mysqli_query($con, "SELECT * FROM buku WHERE idbuku='$idbuku'");
                    $result = mysqli_fetch_array($query);

                    
                ?>
                <div class="col-sm-7">
                    <h3>From Peminjaman Buku</h3>
                    <form action="t_pinjam.php" method="POST">
                    <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">ID Buku</label>
              <input type="text" name="IDbuku" class="form-control" required value="<?php echo $result['IDbuku'];?>" readonly>
              </div>
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Judul</label>
              <input type="text" name="judul" class="form-control" required value="<?php echo $result['judul'];?>" readonly>
              </div>
              <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Nama Peminjam</label>
              <input type="text" name="nama" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="row">
                <div class="col">
                <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Tanggal Baca</label>
                <input type="date" name="tgl_baca" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                </div>
                </div>
              <button type="submit" class="btn btn-primary">Pinjam</button>
              <a href="../buku.php" class="btn btn-danger m-2">Kembali</a>

                    </form>
                </div>
            </div>
        </div>
    </div>
      </body>
</html>