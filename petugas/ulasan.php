<?php
  include 'layout/header.php';
?>

<div class="container">
    <div class="row" style="margin-top: 1rem;">
    <div class="col">
        <h2>Data Ulasan</h2>
        <table class="table my-2">   
                <tr>
                    <th scope="col">ID Ulasan</th>
                    <th scope="col">Username</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Ulasan</th>
                </tr>
            <?php
            include '../koneksi/koneksi.php';

            $data = mysqli_query($con, "SELECT * FROM ulasanbuku");
            while ($d = mysqli_fetch_array($data)) {
            ?>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $d['IDulasan'];?></th>
                    <td><?php echo $d['username'];?></td>
                    <td><?php echo $d['judul'];?></td>
                    <td><?php echo $d['ulasan'];?></td>
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