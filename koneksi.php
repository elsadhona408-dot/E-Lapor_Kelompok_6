<?php
$host     = "localhost";
$username = "root";
$password = "123"; // <--- Masukkan password kamu di sini
$database = "db_elapor";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>