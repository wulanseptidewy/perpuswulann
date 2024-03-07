<?php
  include 'layout/header.php';
?>

<div class="container">
    <div class="row" style="margin-top: 1rem;">
    <div class="col">
        <h2>Data Pembaca</h2>
        <table class="table my-2">   
                <tr>
                    <th scope="col">ID Baca</th>
                    <th scope="col">ID Buku</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Nama Pembaca</th>
                    <th scope="col">Tanggal Baca</th>
                    <th scope="col">Aksi</th>
                </tr>
            <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($con, "SELECT * FROM peminjaman");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $d['IDpeminjaman'];?></th>
                    <td><?php echo $d['IDbuku'];?></td>
                    <td><?php echo $d['judul'];?></td>
                    <td><?php echo $d['nama'];?></td>
                    <td><?php echo $d['tgl_baca'];?></td>
                    <td>
                        <a href="data/delete_pembaca.php?idp=<?php echo $d['IDpeminjaman'];?>" class="btn btn-danger text-white">Delete</a>
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