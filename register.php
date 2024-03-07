<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.css">
    <script type="text/javascript" src="asset/bootstrap/js/bootstrap.js"></script>
    <title>Halaman Login</title>
  </head>
  <body>
<div class="container">
        <div class="conten text-white">
            <div class="col-sm-8 mx-auto">
            <div class="card bg-info" style="margin-top: 1rem;">
                <div class="row">
                    <div class="col m-3">
                    <h2>Registrasi</h2>
                    <form action="aksi/proses_daftar.php" method="POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" required id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nama Lengkap</label>
                            <input type="text" name="namalengkap" class="form-control" required id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input type="text" name="alamat" class="form-control" required id="exampleInputPassword1">
                        </div>
                            <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Level</label>
                            <select class="form-select" name="level" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="peminjam">Pengguna</option>
                            </select>
                            </div>
                         <P class="mt-3">Saya sudah memiliki akun <a href="index.php" class="btn btn-warning text-white">Disini</a></p>
                         <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    <div class="col">
                        <img src="asset/img/rak.png" width= "220" style="margin-top: 12rem;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
  </body>
</html>