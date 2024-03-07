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
            <div class="card bg-info" style="margin-top: 7rem;">
                <div class="row">
                    <div class="col m-3">
                        <h2>Login</h2>
                        <?php
                        if (isset($_GET['pesan'])) {
                            if ($_GET['pesan']=="gagal"){
                            echo"<div class='alert alert-danger'>Username atau Password salah</div>";
                            }  
                          }
                        ?>
                    <form action="aksi/cek_login.php" method="post">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" required id="exampleInputEmail1">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
                        </div>
                        <P class="mt-3">Saya belum memiliki akun <a href="register.php" class="btn btn-warning text-white">Buat</a></p>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    </div>
                    <div class="col-4">
                        <img src="asset/img/rak.PNG" width= "220" style="margin-top: 4rem;">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
</body>
</html>