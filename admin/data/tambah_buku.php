<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" type="text/css" href="../../asset/bootstrap/css/bootstrap.css">
  <script type="text/javascript" src="../../asset/bootstrap/js/bootstrap.js"></script>
    <title>Form Tambah Buku</title>
  </head>
  <body>
    <div class="container">
    <div class="col-sm-7 mx-auto">
        <div class="card bg-info" style="margin-top: 2rem;">
            <div class="row m-4">
                
                <div class="col-sm-12">
                    <h3>Tambah Buku</h3>
                    <form action="t_buku.php" method="POST" enctype="multipart/form-data">
                    <hr>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                            <input type="text" name="penulis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                                    <input type="text" name="penerbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                        <div class="col">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                                    <input type="text" name="tahunterbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                            </div>
                                <div class="input-group mb-3">
                                    <label for="formFileMultiple" class="form-label">Gambar</label> 
                                    <input class="form-control" name="Foto" type="file" id="formFileMultiple" multiple>
                                </div>
                                <div class="input-group mb-3">
                                    <label for="formFileMultiple" class="form-label">Buku</label> 
                                    <input class="form-control" name="Buku" type="file" id="formFileMultiple" multiple>
                                </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn btn-primary">Tambah buku</button>
                        <a href="../buku.php" class="btn btn-danger my-2">Kembali</a>
                </div>
            </div>
        </div>
    </div>
  </body>
</html>