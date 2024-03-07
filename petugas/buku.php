<?php
  include 'layout/header.php';
?>
<div class="container">
    <div class="row" style="margin-top: 1rem;">
        <h2>Data Buku</h2>
        <div class="col">
            <a href="data/tambah_buku.php" class="btn btn-warning my-3 text-white">Tambah Buku</a>
        <table class="table mb-2">
            <thead  class="table">
                <tr>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Penulis</th>
                    <th scope="col">Penerbit</th>
                    <th scope="col">Tahun Terbit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($con, "SELECT * FROM buku");
            while ($d = mysqli_fetch_array($data)) {
            
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $d['IDbuku'];?></th>
                    <td><?php echo $d['judul'];?></td>
                    <td><?php echo $d['penulis'];?></td>
                    <td><?php echo $d['penerbit'];?></td>
                    <td><?php echo $d['tahunterbit'];?></td>
                    <td>
                        <a href="data/detail_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-primary text-white">Detail</a>
                        <a href="data/delete_buku.php?IDbuku=<?php echo $d['IDbuku'];?>" class="btn btn-danger text-white">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php
              }
            ?>
        </table>
        </div>
    </div>
  </div>
<?php
  include 'layout/footer.php';
?>


