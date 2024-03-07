<?php

    include '../koneksi/koneksi.php';

    $username= $_POST['username'];
    $password= $_POST['password'];
    $email= $_POST['email'];
    $namalengkap= $_POST['namalengkap'];
    $alamat= $_POST['alamat'];
    $level= $_POST['level'];

    mysqli_query($con,"INSERT into user(username, password, email, namalengkap, alamat, level)
                        values('$username','$password','$email','$namalengkap','alamat','level')");
    
    header("location:../index.php");

?>