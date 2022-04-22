<?php
$email=$_POST['email'];
$password=$_POST['password'];
include('koneksi.php');
$cek= mysqli_query($conn, 'select * from users where email="'.$email.'" and pass="'.$password.'"');
//print_r('select * from users where email="'.$email.'" and pass="'.$password.'"');
if (mysqli_num_rows($cek) > 0) {
    echo 'login berhasil';
}else {
    echo 'gagal login';
}