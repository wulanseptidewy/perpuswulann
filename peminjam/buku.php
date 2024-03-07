<?php
  include 'layoutt/header.php';
?>

  <div class="container" style="margin-top: 2rem;">
  <div class="row">
        <h4>Koleksi Buku</h4>
        <?php
        include '../koneksi/koneksi.php';
        $no = 1;
        $data = mysqli_query($con, "SELECT * FROM buku Order by IDbuku asc");

        while ($d = mysqli_fetch_array($data)) {
        
        
        ?>
        <div class="card" style="width: 14rem;">
        <img src="../petugas/asset/sampul/<?php echo $d['Foto'];?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $d['judul'];?></h5>
            <h6>ID Buku : <?php echo $d['IDbuku'];?></h6>
            <h6>Tahun Terbit : <?php echo $d['tahunterbit'];?></h6>
            <a href="data/pinjam_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary">Pinjam</a>
              </div>
          </div>
          <?php
          }
          ?>
        </div>
  </div>

<?php
  include 'layoutt/footer.php';
?>