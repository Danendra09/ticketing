<?php
$user='root';
$pass='';
$db='ticketing';
$host='localhost';

$conn = mysqli_connect($host, $user, $pass, $db);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil";
//mysqli_close($conn);
?>